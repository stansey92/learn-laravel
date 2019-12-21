<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//importing DB class
use DB;
//pulls in the Post eloquent model
use App\Post;

class PostsController extends Controller
{
    public function show($slug) {

        // $posts = [
        //     'my-first-post' => 'Hello, this is my first blog post',
        //     'my-second-post' => 'Now I am geting the hang of this bloggin.'
        // ];

        //Query Builder Style : accesses the db table posts where the slug matches the slug put into the url, returns the first matching post
        //$post = DB::table('posts')->where('slug', $slug)->first();
        //Eloquent: same as query builder but prefered laravel way using models (find post where the slug matches $slug)
        $post = Post::where('slug', $slug)->firstOrFail();
        //dd($post);


        //returns post view, with a post variable which is pulled from db
        return view('post', [
            'post' => $post
        ]);
    }
}
