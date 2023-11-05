<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BusinessController extends Controller
{
    public function business($n, $m)
    {
        return view('business', ['category' => $n, 'news'=> $m]);
    }
}