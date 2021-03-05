<?php

namespace App\Http\Controllers;

use App\portfolio;
use App\services;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PortfolioPagesController extends Controller
{
    public function create(){

        return view('admin.portfolios.pcreate');

    }



    public function store(Request $request){


        $this->validate($request,[
            'title'=>'required|string',
            'sub_title'=>'required|string',
            'big_image'=>'required|image',
            'small_image'=>'required|image',
            'description'=>'required|string',
            'client'=>'required|string',
            'category'=>'required|string',
        ]);

        $portfolios=new portfolio();
        $portfolios->title=$request->title;
        $portfolios->sub_title=$request->sub_title;
        $portfolios->description=$request->description;
        $portfolios->client=$request->client;
        $portfolios->category=$request->category;

        $big_file=$request->file('big_image');
        Storage::putFile('public/img/',$big_file);
        $portfolios->big_image="storage/img/".$big_file->hashName();

        $small_file=$request->file('small_image');
        Storage::putFile('public/img/',$small_file);
        $portfolios->small_image="storage/img/".$small_file->hashName();

        $portfolios->save();


        return redirect('/pcreate')->with('success','New portfolio Created');


    }


    public function list(){

        $portfolios= portfolio::all();

        return view('admin.portfolios.plist',compact('portfolios'));
    }



    public function editInfo($id){

        $portfolio=portfolio::find($id);

        return view('admin.portfolios.pedit',compact('portfolio'));
    }


    public function editListInfo(Request $request,$id){

        $this->validate($request,[

            'title'=>'required|string',
            'sub_title'=>'required|string',
            'description'=>'required|string',
            'client'=>'required|string',
            'category'=>'required|string',
        ]);

        $portfolios=portfolio::find($id);
        $portfolios->title=$request->title;
        $portfolios->sub_title=$request->sub_title;
        $portfolios->description=$request->description;
        $portfolios->client=$request->client;
        $portfolios->category=$request->category;

        if ($request->file('big_image')){

            $big_file=$request->file('big_image');
            Storage::putFile('public/img/',$big_file);
            $portfolios->big_image="storage/img/".$big_file->hashName();
        }

        if ($request->file('small_image')){

            $small_file=$request->file('small_image');
            Storage::putFile('public/img/',$small_file);
            $portfolios->small_image="storage/img/".$small_file->hashName();

        }

        $portfolios->save();



        return redirect('/plist')->with('success','portfolio info updated successfully');


    }

    public function deleteListInfo($id){

        $portfolio=portfolio::find($id);
        @unlink(public_path($portfolio->big_image));
        @unlink(public_path($portfolio->small_image));
        $portfolio->delete();

        return redirect('/plist')->with('success','Delete successfully');

    }

}
