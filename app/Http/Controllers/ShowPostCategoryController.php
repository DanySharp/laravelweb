<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\contact;
use App\Models\showlink;
use Illuminate\Http\Request;

class ShowPostCategoryController extends Controller
{
    public function show(Category $category)
    {
        $posts=$category->posts('user','category','photo','showlink','contact')
            ->where('status',1)
            ->ORDERBY('created_at','ASC')
            ->paginate(4);
        $categories=Category::all();
        $showlinks=showlink::all();
        $contacts=contact::all();
        return view('frontend.main.index',compact('posts','categories','showlinks','contacts'));
    }
}
