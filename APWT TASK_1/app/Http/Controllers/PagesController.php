<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

class PagesController extends Controller
{
    //
    public function index(){
        $message = "Welcome";
        return view('pages.index.landingPages.home')->with('message');
    }
    
    public function services(){
        //$message = "Service Page";
        return view('pages.products.services');
    }

    public function ourteams(){
        return view('pages.ourteams');
    }

    public function contactus(){
        return view('pages.contactus');
    }

    public function aboutUs(){
        return view('pages.aboutUs');
    }
}
