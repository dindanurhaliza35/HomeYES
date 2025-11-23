<?php

namespace App\Controllers;

class Kontak extends BaseController
{
    public function kontak(): string
    {
        return view('kontak');
    }
}