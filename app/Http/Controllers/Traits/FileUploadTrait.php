<?php

namespace App\Http\Controllers\Traits;

use Illuminate\Http\Request;
//use Intervention\Image\Facades\Image;

trait FileUploadTrait {

    /**
     * File upload trait used in controllers to upload files
     */
    public function saveFiles(Request $request) {

        if (! file_exists(public_path('uploads'))) {
            mkdir(public_path('uploads'), 0777);
            mkdir(public_path('uploads/thumb'), 0777);
        }

        $finalRequest = $request;
        foreach ($request->all() as $key => $value) {
            if ($request->hasFile($key)) {
                if ($request->has($key . '_max_width') && $request->has($key . '_max_height')) {
                   
                    $filename = time() . '-' . $request->file($key)->getClientOriginalName();
                    $file     = $request->file($key);
                    
                    if (! file_exists(public_path('uploads/thumb'))) {
                        mkdir(public_path('uploads/thumb'), 0777, true);
                    }
                    
                    
                    resize($file, public_path('uploads/thumb') . '/' . $filename, 50, 50);
                    move_uploaded_file($file,public_path('uploads') . '/' . $filename);
                    $finalRequest = new Request(array_merge($finalRequest->all(), [$key => $filename]));
                } else {
                    $filename = time() . '-' . $request->file($key)->getClientOriginalName();
                    $request->file($key)->move(public_path('uploads'), $filename);
                    $finalRequest = new Request(array_merge($finalRequest->all(), [$key => $filename]));
                }
            }
        }
        return $finalRequest;
    }
}

function resize($file, $imgpath, $width, $height) {
    /* Get original image x y*/
    list($w, $h) = getimagesize($file);
    /* calculate new image size with ratio */
    $ratio = max($width/$w, $height/$h);
    $h = ceil($height / $ratio);
    $x = ($w - $width / $ratio) / 2;
    $w = ceil($width / $ratio);

    /* new file name */
    $path = $imgpath;
    /* read binary data from image file */
    $imgString = file_get_contents($file);
    /* create image from string */
    $image = imagecreatefromstring($imgString);
    $tmp = imagecreatetruecolor($width, $height);
    imagecopyresampled($tmp, $image, 0, 0, $x, 0, $width, $height, $w, $h);
    /* Save image */

    switch ($file->getClientMimeType()) {
       case 'image/jpeg':
          imagejpeg($tmp, $path, 100);
          break;
       case 'image/png':
          imagepng($tmp, $path, 0);
          break;
       case 'image/gif':
          imagegif($tmp, $path);
          break;
          default:
          //exit;
          break;
        }
     return $path;

     /* cleanup memory */
     imagedestroy($image);
     imagedestroy($tmp);
}