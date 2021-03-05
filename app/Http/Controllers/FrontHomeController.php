<?php

namespace App\Http\Controllers;

use App\about;
use App\main;
use App\portfolio;
use App\services;
use Illuminate\Http\Request;

class FrontHomeController extends Controller
{


    public function frontHome(){

        $main=main::first();
        $services=services::all();
        $portfolios=portfolio::all();
        $abouts=about::all();
        return view('front.home.home',compact('main','services','portfolios','abouts'));

    }




}
