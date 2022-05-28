<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\Log;


use App\Http\Controllers\Controller;
use App\Http\Requests\PostCreateRequest;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use App\Http\Requests\PostUpdateRequest;
class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $posts =Category::whereId($id)->with('posts')->first();

        // if(request()->get('title'))
        // {
        //       return  $posts=Category::whereId($id)->with('posts')->where('title', 'LIKE', "%".request()->get('title')."%" )->get();
        // }

        return view('admin.Posts.list', compact('posts'));
    }


    public function create($id)
    {
        $category=Category::find($id);
        return view('admin.Posts.create', compact('category'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PostCreateRequest $request, $id)
    {

            // $img_Path='storage/'.$request->file('image')->store('image', 'public');
            $img =$request->file('image');
            $name=$img->getClientOriginalName();

            $san=rand(20000000,50000000);
            $img_name =$san.$name;

            $salgy='post_images/';

            $img->move($salgy , $img_name);

            $title=$request->input('title');
            $slug=Str::slug($title, '-');
            $user_id =Auth::user()->id;
            Category::find($id)->posts()->create([
                  'title'=>$title,
                  'slug'=>$slug,
                  'description'=>$request->input('description'),
                  'category_id'=>$request->input($id),
                  'image'=>$img_name,
                  'user_id'=>$user_id,
             ]);
        return redirect()->route('posts.index', $id)->withSuccess('Post Doredildi');
    }


    public function show($category_id,$post_id)
    {
        $post=Category::find($category_id)->posts()->whereId($post_id)->first();
        return view('admin.Posts.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($category_id,$post_id)
    {
       $post=Category::find($category_id)->posts()->whereId($post_id)->first();
        return view('admin.Posts.edit', compact('post'));
    }

    public function update( PostUpdateRequest $request , $category_id, $post_id)
    {

        if($request->hasfile('image'))
        {
            $old_img=$request->old_image;
            $salgy='post_images/'.$old_img;
            unlink($salgy);

            $img =$request->file('image');
            $name=$img->getClientOriginalName();

            $san=rand(20000000,50000000);
            $img_name =$san.$name;

            $salgy='post_images/';
            $img->move($salgy , $img_name);

             $post=Category::find($category_id)->posts()->whereId($post_id)->first();

            $title=$request->input('title');
            $slug=Str::slug($title, '-');
            $user_id =Auth::user()->id;

            $post->update([
                'title'=>$title,
                'slug'=>$slug,
                'description'=>$request->input('description'),
                'category_id'=>$category_id,
                'image'=>$img_name,
                'user_id'=>$user_id,
            ]);
        }else
        {
            $post=Category::find($category_id)->posts()->whereId($post_id)->first();
            $title=$request->input('title');
            $slug=Str::slug($title, '-');
            $user_id =Auth::user()->id;

            $post->update([
                'title'=>$title,
                'slug'=>$slug,
                'description'=>$request->input('description'),
                'category_id'=>$category_id,
                'user_id'=>$user_id,
            ]);
        }

    return redirect()->route('posts.index', $category_id)->withSuccess('Updated Post ');
    }



    public function destroy($category_id, $post_id, Request $request)
    {

        $post=Category::find($category_id)->posts()->whereId($post_id);

        try {
            $img=$request->image;
            $salgy='post_images/'.$img;
            unlink($salgy);
            $post->delete();

        } catch (\Exception $e ) {
            return $e->getMessage();
        }

            return redirect()->route('posts.index', $category_id)->withSuccess('Deleted Post');
    }



}
