<?php

namespace App\Http\Controllers;

use App\services;
use Illuminate\Http\Request;

class ServicePagesController extends Controller
{
 public function create(){

     return view('admin.service.Screate');
 }


    public function store(Request $request){


        $this->validate($request,[
            'icone'=>'required|string',
            'title'=>'required|string',
            'description'=>'required|string',
        ]);

        $services=new services();
        $services->icone=$request->icone;
        $services->title=$request->title;
        $services->description=$request->description;

        $services->save();


        return redirect('/Screate')->with('success','update info update successfully');


    }

 public function list(){

     $services=services::all();

     return view('admin.service.Slist',compact('services'));
 }



 public function edit($id){

     $service=services::find($id);
     return view('admin.service.Sedit',compact('service'));
 }


 public function update(Request $request,$id){


     $this->validate($request,[
         'icone'=>'required|string',
         'title'=>'required|string',
         'description'=>'required|string',
     ]);

     $services=services::find($id);
     $services->icone=$request->icone;
     $services->title=$request->title;
     $services->description=$request->description;

     $services->save();


     return redirect('/Slist')->with('success','updated successfully');


 }

 public function delete($id){



     $service=services::find($id);
     $service->delete();
     return redirect('/Slist')->with('success','Delete successfully');





 }

//    public function update(Request $request,$id){
//
//        $this->validate($request,[
//            'icone'=>'required|string',
//            'title'=>'required|string',
//            'description'=>'required|string',
//        ]);
//
//        $services=service::find($id);
//        $services->icone=$request->icone;
//        $services->title=$request->title;
//        $services->description=$request->description;
//
//        $services->save();
//
//
//        return redirect('/Slist')->with('success','Edit info updated successfully');
//
//
//    }


}
