<?php

namespace App\Http\Controllers\Admin;

use App\Header;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Gate;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreHeaderRequest;
use App\Http\Requests\Admin\UpdateHeaderRequest;
use App\Http\Controllers\Traits\FileUploadTrait;

class HeaderController extends Controller
{
    use FileUploadTrait;

    /**
     * Display a listing of Headers.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        
        $header = DB::table('headers')->get();
        
        return view('admin.header.index', compact('header'));
    }

    /**
     * Show the form for editing Header.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if (!Gate::allows('header_edit')) {
            return abort(401);
        }

        $header = DB::table('headers')->find($id);

        return view('admin.header.edit', compact('header'));
    }

    /**
     * Update Headers in storage.
     *
     * @param  \App\Http\Requests\Admin\UpdateSliderRequest $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateHeaderRequest $request, $id)
    {
        if (!Gate::allows('header_edit')) {
            return abort(401);
        }
        $request = $this->saveFiles($request);
        DB::table('headers')->where('id', $id)->update([
            'image' => $request->image
            ]);

        return redirect()->route('admin.header.index');
    }
}