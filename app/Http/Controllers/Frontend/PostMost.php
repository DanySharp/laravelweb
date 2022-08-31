<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\contact;
use App\Models\Post;
use App\Models\showlink;
use Illuminate\Http\Request;

class PostMost extends Controller
{
    public function index()
    {
        $postmost=Post::with('user','category','photo','showlink','contact')
            ->where('status',1)
            ->ORDERBY('created_at','DESC')
            ->simplePaginate(3);
        $categories=Category::all();
        $showlinks=showlink::all();
        $contacts=contact::all();
        return view('partials.most',compact('postmost','categories','showlinks','contacts'));




    }

}
