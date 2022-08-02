@extends('layouts.app')

@section('title')
    accueil
@endsection

@section('header')
    
@endsection

@section('cars')
    <h2 style="margin-top: 100px">voitures</h2>
    <a href="/create" style="color: black">ajouter nouvelle voiture</a>
    @if (count($cars) > 0)
    <ul>
        @foreach ($cars as $car)
            <div class="cars">
                <h3 class="carpost">{{$car->marque}}</h3>
                <p> <strong>année: </strong> {{$car->annee}}</p> <br>
                <p><strong>Prix: </strong> {{$car->prix}} $</p>
                <br>
                <br>
                
                <a href="/edit/{{$car->id}}" class="editbut" style="border: none; font-size: 15px; color: black">modifier</a>
                <a href="/delete/{{$car->id}}" class="deletebut" style="border: none; font-size: 15px; color: black">supprimer</a>
            </div> 
        @endforeach
    </ul>
    @endif
    
@endsection