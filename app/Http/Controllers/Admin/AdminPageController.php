<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Post;
class AdminPageController extends Controller
{
        public function index()
        {
            $category=Category::all();
            $post=Post::all();

            return view('admin.index', compact('category','post'));
        }
}
