@extends('layouts.layout_simple')

@section('title', 'Bienvenue sur le site à Vinyle')
@section('GrandTitre')
<x-barre-de-navigation/>
@endsection

@section('Contenu')
<p> Pour l'instant je n'affiche rien ici </p>
@foreach ( $vinyles as $unVinyle)
    <p> {{$unVinyle}} --- {{$unVinyle->artiste->name}} </p>
@endforeach
@endsection
<div>
    {{-- {{ $unVinyle->links() }} --}}
</div>


