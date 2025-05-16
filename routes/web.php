<?php

use Illuminate\Support\Facades\Route;
use Barryvdh\DomPDF\Facade\Pdf;

Route::get('/', function () {
    $options = new \Dompdf\Options();
    $options->set('isRemoteEnabled', true); // Enable loading images from URLs

    $pdf = Pdf::loadView('franchise_manual', [])
        ->setPaper('a4', 'portrait');

    $pdf->getDomPDF()->setOptions($options); // Apply the options to the DomPDF instance

    return $pdf->stream();
});
