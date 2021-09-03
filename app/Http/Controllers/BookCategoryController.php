<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\book_category;
use App\Books;

class BookCategoryController extends Controller
{

    public function index(){
        $category = book_category::all();
        return view('backend.category-books.list', compact('category'));
    }

    public function create(){
        return view('backend.category-books.create');
    }

    public function store(Request $request){
        $category = new book_category;
        $category->name = $request->name;
        $category->description = $request->description;
        $category->save();
        return redirect(route('get.list.category.book'));
    }

    public function edit($id){
        $category = book_category::where('id', $id)->first();
        return view('backend.category.edit', compact('category'));
    }

    public function postedit(Request $request){
        $category = book_category::where('id', $request->id)
              ->update([
                  'name' => $request->name,
                  'description' => $request->description,
                ]);
        return redirect(route('get.list.category.book'));
    }

    public function delete($id){
        book_category::where('id', $id)->delete();

        Books::where('categories', $id)
            ->update([
                'categories' => null,
            ]);

        return redirect(route('get.list.category.book'));
    }
}
