<?php

use Illuminate\Support\Facades\Route;
use App\Models\Vinyle;
use App\Models\Etablissement;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/accueil', function () {

    $vinyle=Vinyle::all();
    return view('PageAccueil', ['vinyles'=> $vinyle]);
});

Route::get('/vinyle/{id}', function ($id) {

    return view('VinyleDetails');
});

Route::get('/donne', function () {
    $etablissements = Etablissement::with('vinyles')->paginate(10);

    return view('donne',['etablissements' =>$etablissements]);
});

Route::get('/tp2',function(){

    $vinyles = Vinyle::with('artiste')->get();
    //$vinyles = Vinyle::with('artistes')->paginate(10);
    return view('TP2Affichage', ['vinyles' => $vinyles]);
});


// Route::get('/donne', function () {
    // return view('donne',['etablissements' => Etablissement::all()]);
// });
