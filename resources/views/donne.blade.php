@extends('layouts.layout_simple')

@section('title', 'Bienvenue sur le site à Vinyle')
@section('GrandTitre')
<x-barre-de-navigation/>
@endsection

@section('Contenu')

@foreach ($etablissements as $etablissement)

<p>{{$etablissement['nomEtablissement']}} --- {{$etablissement->vinyle->titre}}</p>

@endforeach

{{ $etablissement->links( )}}

@endsection
