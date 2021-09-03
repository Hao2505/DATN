<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blog;

class PostController extends Controller
{
    public function index(){
        $posts = Blog::paginate(6);
        return view('backend.blog.list', compact('posts'));
    }

    public function create(){
        return view('backend.blog.create');
    }

    public function store(Request $request){

        $post = new Blog;
        $post->name = $request->name;
        $post->description = $request->description;
        $post->content = $request->content;
        if($request->check_featured){
            $post->featured_post = $request->check_featured;
        } else {
            $post->featured_post = 0;
        }
        if($request->category){
            $post->category = $request->category;
        }
        if($request->image){
            $file = $request->file('image');
            $destinationPath = 'storage';
            $format = "%H-%M-%S-%d-%B-%Y";
            $timestamp = time();
            $strTime = strftime($format, $timestamp );
            $fileName = $strTime . "_" . $file->getClientOriginalName();
            $file->move($destinationPath,$fileName);
            $post->image = $fileName;
        }
        $post->save();

        return redirect(route('get.list.post'));

    }

    public function edit($id){
        $post = Blog::where('id', $id)->first();
        return view('backend.blog.edit', compact('post'));
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

            $post = Blog::where('id', $request->id)
              ->update([
                  'name' => $request->name,
                  'description' => $request->description,
                  'content' => $request->content,
                  'category' => $request->category,
                  'image' => $fileName,
                ]);
        } else {
            $post = Blog::where('id', $request->id)
              ->update([
                  'name' => $request->name,
                  'description' => $request->description,
                  'content' => $request->content,
                  'category' => $request->category,
                ]);
        }

        if($request->check_featured){
            $post = Blog::where('id', $request->id)
              ->update([
                  'featured_post' => $request->check_featured,
                ]);
        } else {
            $post = Blog::where('id', $request->id)
              ->update([
                  'featured_post' => 0,
                ]);
        }

        return redirect(route('get.list.post'));
    }

    public function delete($id){
        Blog::where('id', $id)->delete();
        return redirect(route('get.list.post'));
    }
}
