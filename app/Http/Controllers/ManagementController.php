<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ManagementController extends Controller
{
    public function index()
    {
        $data = array(
            'imgsrc' => "/images/manage.jpg",
            'page' => "The Management Page"
        );
        return view('pages.manage')->with($data);
    }
}
