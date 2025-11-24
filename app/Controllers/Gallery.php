<?php

namespace App\Controllers;

class Gallery extends BaseController
{
    public function gallery(): string
    {
        return view('gallery');
    }
}