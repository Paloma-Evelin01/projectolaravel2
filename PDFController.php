<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade as PDF;
use App\estudiantes; //Modelo

class PDFController extends Controller
{
    //
    public function PDF(){

        $estudiante= estudiantes::get();
        
        $pdf = PDF::loadView('PDFestudiantes',compact('estudiante'));
        
        return $pdf->download('pdfEstu.pdf');
        
        }
}
