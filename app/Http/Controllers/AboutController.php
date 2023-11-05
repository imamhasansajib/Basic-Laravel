<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function about()
    {
        $name = 'Imam Hasan Sajib';
        $phone = 'xxxxxxxxxxx';
        return view('about', ['myname' => $name, 'myphone' => $phone]);
    }
}
