<?php

namespace App\Http\Controllers;

use App\main;
use App\services;
use Illuminate\Http\Request;

class MainPagesController extends Controller
{

public function mainIndex(){

    $main= main::first();


    return view('admin.main.main',compact('main'));

}


    public function updateInfo(Request $request)
    {

        $this->validate($request,[
            'title'=>'required|string',
            'sub_title'=>'required|string',
        ]);

        $main=Main::first();
        $main->title=$request->title;
        $main->sub_title=$request->sub_title;

        if($request->file('bc_image')){

            $img_file=$request->file('bc_image');
            $img_file->storeAs('public/img/','bc_image.' . $img_file->getClientOriginalExtension());
            $main->bc_image='storage/img/bc_image.' . $img_file->getClientOriginalExtension();
        }

        if($request->file('resume')){

            $pdf_file=$request->file('resume');
            $pdf_file->storeAs('public/pdf/','resume.' . $pdf_file->getClientOriginalExtension());
            $main->resume='storage/pdf/resume.' . $pdf_file->getClientOriginalExtension();
        }

        $main->save();

        return redirect('/main')->with('success','update info update successfully');

    }

}
