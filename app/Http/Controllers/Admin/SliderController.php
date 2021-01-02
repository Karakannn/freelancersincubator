<?php

namespace App\Http\Controllers\Admin;

use App\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Gate;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreSliderRequest;
use App\Http\Requests\Admin\UpdateSliderRequest;
use App\Http\Controllers\Traits\FileUploadTrait;

class SliderController extends Controller
{
    use FileUploadTrait;

    /**
     * Display a listing of Sliders.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {


        if (request('show_deleted') == 1) {
            if (!Gate::allows('slider_delete')) {
                return abort(401);
            }
            $slider = Slider::onlyTrashed()->get();
        } else {
            $slider = DB::table('sliders')->get();
        }

        return view('admin.slider.index', compact('slider'));
    }

    /**
     * Show the form for creating new Slider.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (!Gate::allows('slider_create')) {
            return abort(401);
        }
        return view('admin.slider.create');
    }

    /**
     * Store a newly created Slider in storage.
     *
     * @param  \App\Http\Requests\Admin\StoreSliderRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSliderRequest $request)
    {
        if (!Gate::allows('slider_create')) {
            return abort(401);
        }
        $request = $this->saveFiles($request);
        Slider::create($request->all());

        return redirect()->route('admin.slider.index');
    }


    /**
     * Show the form for editing Slider.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if (!Gate::allows('slider_edit')) {
            return abort(401);
        }

        $slider = DB::table('sliders')->find($id);

        return view('admin.slider.edit', compact('slider'));
    }

    /**
     * Update Testimonials in storage.
     *
     * @param  \App\Http\Requests\Admin\UpdateSliderRequest $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSliderRequest $request, $id)
    {
        if (!Gate::allows('slider_edit')) {
            return abort(401);
        }
        $request = $this->saveFiles($request);
        $fields = array();
        if ($request->image == null) {
            $fields = [
            'line_1' => $request->line_1,
            'line_2' => $request->line_2,
            'line_3' => $request->line_3,
            'button_text' => $request->button_text,
            'button_url' => $request->button_url
            ];
 
        }else {
           $fields = [
            'line_1' => $request->line_1,
            'line_2' => $request->line_2,
            'line_3' => $request->line_3,
            'image' => $request->image,
            'button_text' => $request->button_text,
            'button_url' => $request->button_url
            ];
        }
        DB::table('sliders')->where('id', $id)->update($fields);

        return redirect()->route('admin.slider.index');
    }


    /**
     * Display Slider.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if (!Gate::allows('slider_view')) {
            return abort(401);
        }

        $slider = DB::table('sliders')->find($id);

        return view('admin.slider.show', compact('slider'));
    }


    /**
     * Remove Slider from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     * @throws \Exception
     */
    public function destroy($id)
    {
        if (!Gate::allows('slider_delete')) {
            return abort(401);
        }
        DB::table('sliders')->softDelete($id);
        
        return redirect()->route('admin.slider.index');
    }

    /**
     * Delete all selected Slider at once.
     *
     * @param Request $request
     */
    public function massDestroy(Request $request)
    {
        if (!Gate::allows('slider_delete')) {
            return abort(401);
        }
        if ($request->input('ids')) {
            $entries = DB::table('sliders')->whereIn('id', $request->input('ids'))->get();

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
        if (!Gate::allows('slider_delete')) {
            return abort(401);
        }
        $slider = DB::table('sliders')->find($id);
        $slider->restore();

        return redirect()->route('admin.slider.index');
    }

    /**
     * Permanently delete Slider from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function perma_del($id)
    {
        if (!Gate::allows('slider_delete')) {
            return abort(401);
        }
        $slider = Slider::table('sliders')->find($id);
        $slider->forceDelete();

        return redirect()->route('admin.slider.index');
    }
}