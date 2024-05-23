@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Modifier la Réservation</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('reservations.update', $reservation->id) }}">
                            @csrf
                            @method('PUT')

                            <div class="form-group">
                                <label for="id_internaute">Internaute</label>
                                <select class="form-control" id="id_internaute" name="id_internaute">
                                    @foreach($internautes as $internaute)
                                        <option value="{{ $internaute->id }}" {{ $reservation->id_internaute == $internaute->id ? 'selected' : '' }}>{{ $internaute->nom }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="id_hotel">Hôtel</label>
                                <select class="form-control" id="id_hotel" name="id_hotel">
                                    @foreach($hotels as $hotel)
                                        <option value="{{ $hotel->id }}" {{ $reservation->id_hotel == $hotel->id ? 'selected' : '' }}>{{ $hotel->titre }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="date_debut_sejour">Date de début de séjour</label>
                                <input type="date" class="form-control" id="date_debut_sejour" name="date_debut_sejour" value="{{ $reservation->date_debut_sejour }}">
                            </div>

                            <div class="form-group">
                                <label for="date_fin_sejour">Date de fin de séjour</label>
                                <input type="date" class="form-control" id="date_fin_sejour" name="date_fin_sejour" value="{{ $reservation->date_fin_sejour }}">
                            </div>

                            <div class="form-group">
                                <label for="titre">Titre</label>
                                <input type="text" class="form-control" id="titre" name="titre" value="{{ $reservation->titre }}">
                            </div>

                            <button type="submit" class="btn btn-primary">Modifier la Réservation</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
