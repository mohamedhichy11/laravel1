@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Liste des Internautes</h2>
    <a href="{{ route('internautes.create') }}" class="btn btn-primary mb-3">Ajouter un Internaute</a>
    <table class="table">
        <thead>
            <tr>
                <th>Nom</th>
                <th>Prénom</th>
                <th>Adresse</th>
                <th>Date de Naissance</th>
                <th>CIN</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($internautes as $internaute)
            <tr>
                <td>{{ $internaute->nom }}</td>
                <td>{{ $internaute->prenom }}</td>
                <td>{{ $internaute->adresse }}</td>
                <td>{{ $internaute->date_naissance }}</td>
                <td>{{ $internaute->cin }}</td>
                <td>
                    <a href="{{ route('internautes.show', $internaute->id) }}" class="btn btn-info btn-sm">Voir</a>
                    <a href="{{ route('internautes.edit', $internaute->id) }}" class="btn btn-warning btn-sm">Modifier</a>
                    <form action="{{ route('internautes.destroy', $internaute->id) }}" method="POST" style="display: inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Êtes-vous sûr de vouloir supprimer cet internaute?')">Supprimer</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
