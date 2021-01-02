<?php

namespace App\Http\Controllers\Admin;

use App\Settings;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Gate;
use App\Http\Controllers\Controller;
//use App\Http\Requests\Admin\StoreTestimonialsRequest;
//use App\Http\Requests\Admin\UpdateTestimonialsRequest;
use App\Http\Controllers\Traits\FileUploadTrait;

class SettingsController extends Controller
{
    use FileUploadTrait;

    /**
     * Display a listing of Testimonials.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {


        if (request('show_deleted') == 1) {
            if (!Gate::allows('testimonials_delete')) {
                return abort(401);
            }
            $testimonials = Testimonials::onlyTrashed()->get();
        } else {
            $testimonials = DB::table('testimonials')->get();
        }

        return view('admin.settings.index', compact('settings'));
    }

    /**
     * Show the form for creating new Testimonial.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (!Gate::allows('testimonials_create')) {
            return abort(401);
        }
        return view('admin.testimonials.create');
    }

    /**
     * Store a newly created Testimonials in storage.
     *
     * @param  \App\Http\Requests\Admin\StoreTestimonialsRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTestimonialsRequest $request)
    {
        if (!Gate::allows('testimonials_create')) {
            return abort(401);
        }
        $request = $this->saveFiles($request);
        Testimonials::create($request->all());

        return redirect()->route('admin.testimonials.index');
    }


    /**
     * Show the form for editing Testimonials.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if (!Gate::allows('test_edit')) {
            return abort(401);
        }

        $testimonial = DB::table('testimonials')->find($id);

        return view('admin.testimonials.edit', compact('testimonial'));
    }

    /**
     * Update Testimonials in storage.
     *
     * @param  \App\Http\Requests\Admin\UpdateTestimonialsRequest $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTestimonialsRequest $request, $id)
    {
        if (!Gate::allows('testimonials_edit')) {
            return abort(401);
        }
        $request = $this->saveFiles($request);
        DB::table('testimonials')->where('id', $id)->update([
            'client' => $request->client,
            'position' => $request->position,
            'title' => $request->title,
            'image' => $request->image
            ]);

        return redirect()->route('admin.testimonials.index');
    }


    /**
     * Display Testimonials.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if (!Gate::allows('testimonials_view')) {
            return abort(401);
        }
//        $testimonials = \DB::table('testimonials')->get()->where('id', '=' ,$id);
        $testimonials = DB::table('testimonials')->find($id);

        return view('admin.testimonials.show', compact('testimonials'));
    }


    /**
     * Remove Testimonials from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     * @throws \Exception
     */
    public function destroy($id)
    {
        if (!Gate::allows('testimonials_delete')) {
            return abort(401);
        }
        DB::table('testimonials')->softDelete($id);

        return redirect()->route('admin.testimonials.index');
    }

    /**
     * Delete all selected Testimonials at once.
     *
     * @param Request $request
     */
    public function massDestroy(Request $request)
    {
        if (!Gate::allows('testimonials_delete')) {
            return abort(401);
        }
        if ($request->input('ids')) {
            $entries = DB::table('testimonials')->whereIn('id', $request->input('ids'))->get();

            foreach ($entries as $entry) {
                $entry->delete();
            }
        }
    }


    /**
     * Restore Testimonials from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function restore($id)
    {
        if (!Gate::allows('testimonials_delete')) {
            return abort(401);
        }
        $testimonials = DB::table('testimonials')->find($id);
        $testimonials->restore();

        return redirect()->route('admin.testimonials.index');
    }

    /**
     * Permanently delete Testimonials from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function perma_del($id)
    {
        if (!Gate::allows('testimonials_delete')) {
            return abort(401);
        }
        $testimonials = Testimonials::table('testimonials')->find($id);
        $testimonials->forceDelete();

        return redirect()->route('admin.testimonials.index');
    }
}