<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Car;

class CarsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = array(
            'imgsrc' => "/images/home.png",
            'page' => "",
            'cars' => Car::all()
        );
        return view('pages.home')->with($data);
    }

    /**
     * Show the form for creating a new resource.
     *@param  \Illuminate\Http\Request
     * @return \Illuminate\Http\Response
     */
    public function add(Request $req)
    {
        $car = new Car();
        $car->marque = $req->marque;
        $car->annee = $req->annee;
        $car->prix = $req->prix;
        $car->save();
        return redirect('/');
    }
    public function create()
    {
        return view('pages.create');
    }



    /**
     * Show the form for creating a new resource.
     *@param  \Illuminate\Http\Request
     * @return \Illuminate\Http\Response
     */

    public function subedit(Request $req)
    {
        $car = Car::find($req->id);
        $car->marque = $req->marque;
        $car->annee = $req->annee;
        $car->prix = $req->prix;
        $car->save();
        return redirect('/');
    }
    public function edit($id)
    {
        $data = Car::find($id);
        return view('pages.edit', compact('data'));
    }
    public function delete($id)
    {
        $car = Car::find($id);
        $car->delete();
        return redirect('/');
    }
}
