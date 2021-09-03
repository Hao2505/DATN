<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Slider;

class SliderController extends Controller
{
    public function index(){
        $sliders = Slider::all();
        return view('backend.slider.list', compact('sliders'));
    }

    public function create(){
        return view('backend.slider.create');
    }

    public function store(Request $request){

        $slider = new Slider;
        $slider->title = $request->title;
        $slider->description = $request->description;
        $slider->content = $request->content;
        if($request->image){
            $file = $request->file('image');
            $destinationPath = 'storage';
            $format = "%H-%M-%S-%d-%B-%Y";
            $timestamp = time();
            $strTime = strftime($format, $timestamp );
            $fileName = $strTime . "_" . $file->getClientOriginalName();
            $file->move($destinationPath,$fileName);
            $slider->image = $fileName;
        }
        $slider->save();

        return redirect(route('get.list.slider'));

    }

    public function edit($id){
        $slider = Slider::where('id', $id)->first();
        return view('backend.slider.edit', compact('slider'));
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

            $slider = Slider::where('id', $request->id)
              ->update([
                  'title' => $request->title,
                  'description' => $request->description,
                  'content' => $request->content,
                  'image' => $fileName,
                ]);
        } else {
            $slider = Slider::where('id', $request->id)
              ->update([
                  'title' => $request->title,
                  'description' => $request->description,
                  'content' => $request->content,
                ]);
        }

        return redirect(route('get.list.slider'));
    }

    public function delete($id){
        Slider::where('id', $id)->delete();

        return redirect(route('get.list.slider'));
    }
}
