@extends('layouts.layout_simple')

@section('title', 'Bienvenue sur le site à Vinyle')
@section('GrandTitre')
<x-barre-de-navigation/>
@endsection

@section('Contenu')
<p> Pour l'instant je n'affiche rien ici </p>
@foreach ($vinyle as $unVinyle )
<p> aled </p>
@endforeach
@endsection
