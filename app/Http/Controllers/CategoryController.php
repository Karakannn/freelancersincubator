<?php

namespace App\Http\Controllers;

use App\Category;
use App\Blogs;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use TJGazel\Toastr\Facades\Toastr;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view('admin.category.index',compact('categories',$categories));
    }
    public function switch(Request $request){
        $category = Category::findOrFail($request->id);
        $category->statu = $request->statu == 'true' ? 1 : 0;
        $category->save();
    }
    public function update(Request $request){



        $category = Category::find($request->id);
        $category->name = $request->name;
        $category->slug = Str::slug($request->slug);


        $category->save();
      return redirect()->back();

    }
    public function getData(Request $request)
    {
        $category = Category::findOrFail($request->id);
        return response()->json($category);
    }
    public function create(Request $request){
        $isExist = Category::where('name', Str::slug($request->category))->first();
        if ($isExist) {
            toastr()->error($request->category . ' adında bir kategori mevcut!');
            return redirect()->back();
        }

        $category = new Category();
        $category->name = $request->name;
        $category->slug = Str::slug($request->name);


        $category->save();
        return redirect()->route('admin.category.index');
    }
    public function delete(Request $request)
    {
        $category = Category::findOrFail($request->id);

        if ($category->id == 1) {
            toastr()->error('Bu Kategori Silinemez');
            return redirect()->back();
        }
        $message = '';
        $count = $category->articles->count();

        if ($count > 0) {
            Blogs::where('category_id', $category->id)->update(['category_id' => 1]);
            $defaultCategory = Category::find(1);
            $message = 'Bu Kategoriye Ait ' . $count . ' Makale' . $defaultCategory->name . ' Kategorisine Taşındı';
        }
        $category->delete();
        return redirect()->back();


    }



}
