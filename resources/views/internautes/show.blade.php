@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Détails de l'Internaute</h2>
    <p><strong>Nom:</strong> {{ $internaute->nom }}</p>
    <p><strong>Prénom:</strong> {{ $internaute->prenom }}</p>
    <p><strong>Adresse:</strong> {{ $internaute->adresse }}</p>
    <p><strong>Date de Naissance:</strong> {{ $internaute->date_naissance }}</p>
    <p><strong>CIN:</strong> {{ $internaute->cin }}</p>
    <a href="{{ route('internautes.index') }}" class="btn btn-primary">Retour</a>
</div>
@endsection
