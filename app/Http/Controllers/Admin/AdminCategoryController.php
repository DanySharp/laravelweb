<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryRequest;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class AdminCategoryController extends Controller
{


    public function index()
    {
        $categories=Category::paginate(5);
        return view('admin.category.index',compact('categories'));
    }


    public function create()
    {
        return view('admin.category.create');
    }


    public function store(CategoryRequest $request)
    {


        $category=new Category();
        $category->title=$request->input('title');

        if($request->input('slug')){
            $category->slug=make_slug($request->input('slug'));

        }
        else{
            $category->slug==make_slug($request->input('title'));
        }
        $category->meta_description=$request->input('meta_description');
        $category->meta_keywords=$request->input('meta_keywords');
        $category->save();
        Session::flash('add_category','دسته بندی جدیدثبت شد');
        return redirect('/admin/category');
    }



    public function show($id)
    {
        //
    }



    public function edit($id)
    {
        $category=Category::FindOrFail($id);
        return view('admin.category.edit',compact('category'));
    }



    public function update(CategoryRequest $request, $id)
    {
        $category=Category::FindOrFail($id);
        $category->title=$request->input('title');

        if($request->input('slug')){
            $category->slug=make_slug($request->input('slug'));

        }
        else{
            $category->slug==make_slug($request->input('title'));
        }
        $category->meta_description=$request->input('meta_description');
        $category->meta_keywords=$request->input('meta_keywords');
        $category->save();
        Session::flash('update_category','دسته بندی جدید ویرایش شد');
        return redirect('/admin/category');
    }



    public function destroy($id)
    {
        $category=Category::FindOrFail($id);
        $category->delete();
        Session::flash('delete_category','دسته بندی مورد نظر حذف شد');
        return redirect('/admin/category');
    }
}
