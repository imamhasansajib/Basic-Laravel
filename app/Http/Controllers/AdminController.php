<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function home(){
        return view('admin.pages.home');
    }

    public function button(){
        return view('admin.pages.button');
    }

    public function card(){
        return view('admin.pages.card');
    }

    public function color(){
        return view('admin.pages.color');
    }

    public function border(){
        return view('admin.pages.border');
    }

    public function animation(){
        return view('admin.pages.animation');
    }

    public function other(){
        return view('admin.pages.other');
    }

    /*
    public function login(){
        return view('admin.pages.login');
    }

    public function register(){
        return view('admin.pages.register');
    }

    public function forgotPass(){
        return view('admin.pages.forgot-password');
    }
    */

    public function error(){
        return view('admin.pages.404');
    }

    public function blank(){
        return view('admin.pages.blank');
    }

    public function chart(){
        return view('admin.pages.chart');
    }

    public function table(){
        return view('admin.pages.table');
    }
}