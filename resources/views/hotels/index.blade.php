@extends('layouts.app')

@section('content')

    <div class="container">

        <div class="row justify-content-center">

            <div class="col-md-8">

                <div class="card">
                    <div class="card-header">{{ __('Hotel Details') }}</div>

                    <div class="card-body">
                        @foreach ($hotels as $hotel)
                            <h2>{{ $hotel->titre }}</h2>
                            <p><strong>Address:</strong> {{ $hotel->adresse }}</p>
                            <p><strong>Price per Unit:</strong> ${{ $hotel->prix_unitaire }}</p>
                            <p><strong>Room Type:</strong> {{ $hotel->type_chambre }}</p>
                            <hr>
                        @endforeach
                    </div>
                </div>

            </div>

        </div>

    </div>

@endsection
