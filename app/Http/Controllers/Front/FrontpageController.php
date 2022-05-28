<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;
use App\Models\About;
use App\Models\Contact;
class FrontpageController extends Controller
{
    public function  index()
    {
        $posts=Post::take(6)->latest()->get();
        return view('front.index', compact('posts'));
    }

    public function  news(Request $request)
    {

        $posts=Post::latest()->paginate(4);
        $categories=Category::all();
        $category_name=$request->get('category');
        if($category_name)
        {
            $posts=Category::where('Category_name', $category_name)->firstOrFail()->posts()->latest()->paginate(4);
        }
         return view('front.news', compact('posts', 'categories'));
    }

    public function  news_Single($slug)
    {

        $post=Post::whereSlug($slug)->first() ?? abort(403);
        // $category=$post->category->category_id;
        $beylekiler= $post->where('id', '!=', $post->id)->take(5)->latest()->get();

        return view('front.news-single', compact(['post', 'beylekiler']));
    }

    public function  about()
    {
        $about=About::get()->first();
        return view('front.about', compact('about'));
    }

    public function  contact()
    {
        $contact=Contact::get()->first();
        return view('front.contact', compact('contact'));
    }




    public function search(Request $request)
    {
        $gozleg= $request->input('gozleg');
        if($gozleg)
        {
            $result= Post::where('title', 'LIKE', '%'. $gozleg .'%')->get()  ?? abort(403);

        }

        return view('front.search', compact('result'));


    }
}
