<?php

namespace App\Controllers;

class Konsultasi extends BaseController
{
    public function konsultasi(): string
    {
        return view('konsultasi');
    }
}