<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        $data = array(
            'imgsrc' => "images/about.jpg",
            'page' => "The About Us Page"
        );

        return view('pages.about')->with($data);
    }
}
