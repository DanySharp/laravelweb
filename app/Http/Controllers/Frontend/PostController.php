<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\contact;
use App\Models\Post;
use App\Models\showlink;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function show($slug)
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

    public function searchTitle(Request $request)
    {
        $title = $request->input('title');

        // Search in the title and body columns from the posts table
        $posts = Post::query()
            ->where('title', 'LIKE', "%{$title}%")
            ->get();

        // Return the search view with the resluts compacted
        return view('search', compact('posts'));




       }
}
