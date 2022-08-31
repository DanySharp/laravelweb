<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\contact;
use App\Models\Post;
use App\Models\showlink;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        $posts=Post::with('user','category','photo','showlink','contact')
            ->where('status',1)
            ->ORDERBY('created_at','ASC')
            ->paginate(4);
        $categories=Category::all();
        $showlinks=showlink::all();
        $contacts=contact::all();
        return view('frontend.main.index',compact('posts','categories','showlinks','contacts'));




    }
}
