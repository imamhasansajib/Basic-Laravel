<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;

class PDFController extends Controller
{
    public function pdf(){
        $data = [
            'title' => 'Welcome to PDF Download page',
            'date' => date('m/d/Y')
        ];
        return view('pdf', $data);
    }

    public function generatePDF()
    {
        $data = [
            'title' => 'Welcome to ItSolutionStuff.com',
            'date' => date('m/d/Y')
        ];

        $pdf = PDF::loadView('pdf', $data);

        return $pdf->download('sajib.pdf');
    }
}