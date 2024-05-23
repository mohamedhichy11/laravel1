@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Reservation Details') }}</div>

                    <div class="card-body">
                        <p><strong>internaute:</strong> {{ $reservation->internaute->nom }}</p>
                        <p><strong>Cin:</strong> {{ $reservation->internaute->cin }}</p>
                        <p><strong>Hotel:</strong> {{ $reservation->hotel->titre }}</p>

                        <p><strong>Start Date:</strong> {{ $reservation->date_debut_sejour }}</p>
                        <p><strong>End Date:</strong> {{ $reservation->date_fin_sejour }}</p>
                        <p><strong>Title:</strong> {{ $reservation->titre }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
