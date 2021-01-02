<?php

namespace App\Http\Controllers\Admin;

use App\Info;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Gate;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\UpdateInfoRequest;
use App\Http\Controllers\Traits\FileUploadTrait;

class InfoController extends Controller {
    use FileUploadTrait;

    /**
     * Display a listing of Info.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {

        if (request('show_deleted') == 1) {
            if (!Gate::allows('info_delete')) {
                return abort(401);
            }
            $info = Info::onlyTrashed()->get();
        } else {
            $info = DB::table('info')->get();
        }

        return view('admin.info.index', compact('info'));
    }

    /**
     * Show the form for editing Info.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
        if (!Gate::allows('info_edit')) {
            return abort(401);
        }

        $info = DB::table('info')->find($id);

        return view('admin.info.edit', compact('info'));
    }

    /**
     * Update Info in storage.
     *
     * @param  \App\Http\Requests\Admin\UpdateInfoRequest $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateInfoRequest $request, $id) {
        if (!Gate::allows('info_edit')) {
            return abort(401);
        }
        
        $request = $this->saveFiles($request);
        $fields = array();
        if ($request->image == null) {
            $fields = [     
                'footer_image' => $request->footer_image,
                'contact_number' => $request->contact_number,
                'office_location' => $request->office_location,
                'email' => $request->email,
                'linkedin_url' => $request->linkedin_url,
                'facebook_url' => $request->facebook_url,
                'twitter_url' => $request->twitter_url,
                'youtube_url' => $request->youtube_url];
 
        }else if ($request->footer_image == null) {
            $fields = [     
                'image' => $request->image,
                'contact_number' => $request->contact_number,
                'office_location' => $request->office_location,
                'email' => $request->email,
                'linkedin_url' => $request->linkedin_url,
                'facebook_url' => $request->facebook_url,
                'twitter_url' => $request->twitter_url,
                'youtube_url' => $request->youtube_url];
    
        }else {
            $fields = [     
                'footer_image' => $request->footer_image,
                'image' => $request->image,
                'contact_number' => $request->contact_number,
                'office_location' => $request->office_location,
                'email' => $request->email,
                'linkedin_url' => $request->linkedin_url,
                'facebook_url' => $request->facebook_url,
                'twitter_url' => $request->twitter_url,
                'youtube_url' => $request->youtube_url];  
        }
        
        DB::table('info')->where('id', $id)->update($fields);

        return redirect()->route('admin.info.index');
    }
}