<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Blog;

class CategoryController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $category = Category::all();
        return view('backend.category.list', compact('category'));
    }

    public function create(){
        return view('backend.category.create');
    }

    public function store(Request $request){
        $category = new Category;
        $category->name = $request->name;
        $category->description = $request->description;
        $category->save();
        return redirect(route('get.list.category'));
    }

    public function edit($id){
        $category = Category::where('id', $id)->first();
        return view('backend.category.edit', compact('category'));
    }

    public function postedit(Request $request){
        $category = Category::where('id', $request->id)
              ->update([
                  'name' => $request->name,
                  'description' => $request->description,
                ]);
        return redirect(route('get.list.category'));
    }

    public function delete($id){
        Category::where('id', $id)->delete();

        $posts = Blog::where('category', $id)
            ->update([
                'category' => null,
            ]);

        return redirect(route('get.list.category'));
    }
}
