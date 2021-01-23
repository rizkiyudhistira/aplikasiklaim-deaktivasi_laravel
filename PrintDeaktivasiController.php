<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;

class PrintDeaktivasiController extends Controller
{
    public function print()
    {
        $pdf = PDF::loadview('indexdeaktivasi')->setPaper('A4', 'portrait');
        return $pdf->stream();
    }    
}
