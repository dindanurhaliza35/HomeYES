<?php

namespace App\Controllers;

class Layanan extends BaseController
{
    public function layanan(): string
    {
        return view('layanan');
    }
}