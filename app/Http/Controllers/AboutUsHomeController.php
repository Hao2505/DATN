<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AboutUsHome;

class AboutUsHomeController extends Controller
{
    public function edit(){
        $aboutushome = AboutUsHome::where('id', 1)->first();
        return view('backend.aboutushome.edit', compact('aboutushome'));
    }

    public function postedit(Request $request){
        $aboutushome = AboutUsHome::where('id', 1)
              ->update([
                  'title' => $request->title,
                  'content' => $request->content,
                ]);

        if($request->image_1){
            $file = $request->file('image_1');
            $destinationPath = 'storage';
            $format = "%H-%M-%S-%d-%B-%Y";
            $timestamp = time();
            $strTime = strftime($format, $timestamp );
            $fileName = $strTime . "_" . $file->getClientOriginalName();
            $file->move($destinationPath,$fileName);

            $aboutushome = AboutUsHome::first()
                ->update([
                    'image_1' => $fileName,
                ]);
        }

        if($request->image_2){
            $file = $request->file('image_2');
            $destinationPath = 'storage';
            $format = "%H-%M-%S-%d-%B-%Y";
            $timestamp = time();
            $strTime = strftime($format, $timestamp );
            $fileName = $strTime . "_" . $file->getClientOriginalName() . '2';
            $file->move($destinationPath,$fileName);

            $aboutushome = AboutUsHome::first()
                ->update([
                    'image_2' => $fileName,
                ]);
        }

        if($request->image_3){
            $file = $request->file('image_3');
            $destinationPath = 'storage';
            $format = "%H-%M-%S-%d-%B-%Y";
            $timestamp = time();
            $strTime = strftime($format, $timestamp );
            $fileName = $strTime . "_" . $file->getClientOriginalName() . '3';
            $file->move($destinationPath,$fileName);

            $aboutushome = AboutUsHome::first()
                ->update([
                    'image_3' => $fileName,
                ]);
        }

        if($request->image_4){
            $file = $request->file('image_4');
            $destinationPath = 'storage';
            $format = "%H-%M-%S-%d-%B-%Y";
            $timestamp = time();
            $strTime = strftime($format, $timestamp );
            $fileName = $strTime . "_" . $file->getClientOriginalName() . '4';
            $file->move($destinationPath,$fileName);

            $aboutushome = AboutUsHome::first()
                ->update([
                    'image_4' => $fileName,
                ]);
        }

        if($request->image_5){
            $file = $request->file('image_5');
            $destinationPath = 'storage';
            $format = "%H-%M-%S-%d-%B-%Y";
            $timestamp = time();
            $strTime = strftime($format, $timestamp );
            $fileName = $strTime . "_" . $file->getClientOriginalName() . '5';
            $file->move($destinationPath,$fileName);

            $aboutushome = AboutUsHome::first()
                ->update([
                    'image_5' => $fileName,
                ]);
        }

        $aboutushome = AboutUsHome::where('id', 1)->first();
        return view('backend.aboutushome.edit', compact('aboutushome'));
    }
}
