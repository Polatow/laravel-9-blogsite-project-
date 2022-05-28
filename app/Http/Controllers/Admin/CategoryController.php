<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryRequest;
use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\Str;
class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories= Category::withCount('posts')->get();
        return view('admin.category.list', compact('categories') );
    }


    public function create()
    {
        return view('admin.category.create');
    }

    public function store(CategoryRequest $request)
    {
        $category_name=$request->input('category_name');
        $slug=Str::slug($category_name, '-');

        Category::create([
            'category_name'=>$category_name,
            'slug'=>$slug,
        ]);

        return redirect()->route('category.index')->withSuccess('Created Category');

    }


    public function show($id)
    {

        //  $category= Category::whereId($id)->with('posts')->first();
        //  return   view('admin.category.show', compact('category'));
        }

    public function edit($id)
    {
        $update=Category::find($id);
        return view('admin.category.edit', compact('update'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CategoryRequest $request, $id)
    {
        $category_name=$request->input('category_name');
        $slug=Str::slug($category_name, '-');
         Category::whereId($id)->update([
            'category_name'=>$category_name,
            'slug'=>$slug,
         ]);

         return redirect()->route('category.index')->withSuccess('Updated Category');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category_delete=Category::find($id);
        $category_delete->delete();
        return redirect()->route('category.index')->withSuccess('Deleted Category');

    }
}
