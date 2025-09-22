<?php

use Illuminate\Support\Facades\Route;
use thiagoalessio\TesseractOCR\TesseractOCR;

Route::get('/', function () {


    $imagePath = storage_path('app/public/cv-demo.jpg');
    $text = (new TesseractOCR($imagePath))
        ->lang('por', 'eng')
        ->psm(3)
        ->oem(1)
        ->run();
    echo $text;

    // return view('welcome');
});
