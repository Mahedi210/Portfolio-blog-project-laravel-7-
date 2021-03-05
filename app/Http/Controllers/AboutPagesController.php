<?php

namespace App\Http\Controllers;

use App\about;
use App\portfolio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AboutPagesController extends Controller
{
public function create(){

    return view('admin.about.acreate');
}

    public function store(Request $request){


        $this->validate($request,[
            'title1'=>'required|string',
            'title2'=>'required|string',
            'image'=>'required|image',
            'description'=>'required|string',
        ]);

        $abouts=new about();
        $abouts->title1=$request->title1;
        $abouts->title2=$request->title2;
        $abouts->description=$request->description;

        $image_file=$request->file('image');
        Storage::putFile('public/img/',$image_file);
        $abouts->image="storage/img/".$image_file->hashName();


        $abouts->save();


        return redirect('/acreate')->with('success','New About Created');


    }

public function list(){
    $abouts=about::all();
    return view('admin.about.alist',compact('abouts'));
}

    public function editInfo($id){

        $about=about::find($id);

        return view('admin.about.aedit',compact('about'));
    }

    public function update(Request $request,$id){

        $this->validate($request,[
            'title1'=>'required|string',
            'title2'=>'required|string',
            'description'=>'required|string',
        ]);

        $abouts=about::find($id);
        $abouts->title1=$request->title1;
        $abouts->title2=$request->title2;
        $abouts->description=$request->description;

        if($request->file('image')){

            $image_file=$request->file('image');
            Storage::putFile('public/img/',$image_file);
            $abouts->image="storage/img/".$image_file->hashName();
        }



        $abouts->save();


        return redirect('/alist')->with('success','New About Created');


    }

    public function deleteListInfo($id){

        $about=about::find($id);
        @unlink(public_path($about->image));
        $about->delete();

        return redirect('/alist')->with('success','Delete successfully');

    }

}
