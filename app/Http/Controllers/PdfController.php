<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
class PdfController extends Controller
{
    public function pdf_stage()
    {
      
        
        return view ('Service_Effectif.Renseignements');

        
    }
}
