<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
class PdfController extends Controller
{
    public function pdf_stage()
    {
      
        // $pdf = Pdf::loadView('demande_stage', $data);
        $pdf = Pdf::loadView('dashboard')->setOptions(['defaultFont' => 'sans-serif']);
        return $pdf->download('demande_stage.pdf');

        
    }
}
