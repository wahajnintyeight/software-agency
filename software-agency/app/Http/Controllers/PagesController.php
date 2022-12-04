<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        return view('index');
    }
    public function team(){
        return view('layouts.team');
    }
    public function about(){
        return view('layouts.about');
    }
}
