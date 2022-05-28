<?php

namespace App\Http\Controllers\Admin\Post;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;
class PostListController extends Controller
{

     public function list()
    {
             $lists=Post::all();
            return view('admin.Posts.allpostList', compact('lists'));
    }
    public function single_post($slug)
    {
         $post=Post::whereSlug($slug)->get()->first();
        return view('admin.Posts.single_post', compact('post'));
    }
}
