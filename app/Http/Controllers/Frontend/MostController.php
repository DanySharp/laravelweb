<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\contact;
use App\Models\Post;
use App\Models\showlink;
use Illuminate\Http\Request;

class MostController extends Controller
{



    public function showmost($slug)
    {


        $post=Post::with(['user','category','photo','showlink','contact',
            'comments' => function($query){
                $query->where('status',1);

            }])

            ->where('slug',$slug)
            ->where('status',1)
            ->first();

        $categories=Category::all();
        $showlinks=showlink::all();
        $contacts=contact::all();
        return view('frontend.posts.show',compact(['post','categories','showlinks','contacts']));


    }
}
