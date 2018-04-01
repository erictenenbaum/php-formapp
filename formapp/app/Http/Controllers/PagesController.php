<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //
    public function index(){
        return view('pages.index');
    }

    public function form(){
        return view('pages.form');
    }

    public function company(){
        return view('pages.company');
    }

    public function login(){
        return view('pages.login');
    }

    public function dashboard(){
        return view('pages.dashboard');
    }

  
}
