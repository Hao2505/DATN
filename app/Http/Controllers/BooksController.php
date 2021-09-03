<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Books;

class BooksController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $books = Books::orderBy('created_at', 'DESC')->paginate(6);
        return view('backend.books.list', compact('books'));
    }

    public function create(){
        return view('backend.books.create');
    }

    public function store(Request $request){
        $books = new Books;
        $books->name = $request->name;
        $books->description = $request->description;
        $books->content = $request->content;
        $books->qty = $request->qty;
        $books->categories = $request->category;
        $books->price = $request->price;
        if($request->image){
            $file = $request->file('image');
            $destinationPath = 'storage';
            $format = "%H-%M-%S-%d-%B-%Y";
            $timestamp = time();
            $strTime = strftime($format, $timestamp );
            $fileName = $strTime . "_" . $file->getClientOriginalName();
            $file->move($destinationPath,$fileName);
            $books->image = $fileName;
        }
        $books->save();
        return redirect(route('get.list.book'));
    }

    public function edit($id){
        $book = Books::where('id', $id)->first();
        return view('backend.books.edit', compact('book'));
    }

    public function postedit(Request $request){
        if($request->image){
            $file = $request->file('image');
            $destinationPath = 'storage';
            $format = "%H-%M-%S-%d-%B-%Y";
            $timestamp = time();
            $strTime = strftime($format, $timestamp );
            $fileName = $strTime . "_" . $file->getClientOriginalName();
            $file->move($destinationPath,$fileName);

            $books = Books::where('id', $request->id)
              ->update([
                  'image' => $fileName,
                ]);
        }
        $books = Books::where('id', $request->id)
              ->update([
                  'name' => $request->name,
                  'qty' => $request->qty,
                  'description' => $request->description,
                  'content' => $request->content,
                  'price' => $request->price,
                  'categories' => $request->category,
                ]);
        return redirect(route('get.list.book'));
    }

    public function delete($id){
        Books::where('id', $id)->delete();

        return redirect(route('get.list.book'));
    }
}
