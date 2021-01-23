<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;

class PDFController extends Controller
{
    public function print() {
    $pdf = PDF::loadview('index')->setPaper('A4','potrait');
    return $pdf->stream();
    }
}
