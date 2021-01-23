<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;

class PrintKlaimController extends Controller
{
    public function print()
    {
        $pdf = PDF::loadview('indexklaim')->setPaper('A4', 'portrait');
        return $pdf->stream();
    }
}
