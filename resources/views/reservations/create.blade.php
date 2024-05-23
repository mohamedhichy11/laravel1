@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Make a Reservation') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('reservation.store') }}">
                            @csrf

                            <div class="form-group row">
                                <label for="id_internaute" class="col-md-4 col-form-label text-md-right">{{ __('User') }}</label>

                                <div class="col-md-6">
                                    <select id="id_internaute" class="form-control @error('id_internaute') is-invalid @enderror" name="id_internaute" required>
                                        <option value="">Select Internaute</option>
                                        @foreach ($internautes as $internaute)
                                            <option value="{{ $internaute->id }}">{{ $internaute->nom }} {{ $internaute->prenom }}</option>
                                        @endforeach
                                    </select>

                                    @error('id_internaute')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="id_hotel" class="col-md-4 col-form-label text-md-right">{{ __('Hotel') }}</label>

                                <div class="col-md-6">
                                    <select id="id_hotel" class="form-control @error('id_hotel') is-invalid @enderror" name="id_hotel" required>
                                        <option value="">Select Hotel</option>
                                        @foreach ($hotels as $hotel)
                                            <option value="{{ $hotel->id }}">{{ $hotel->titre }}</option>
                                        @endforeach
                                    </select>
                                    

                                    @error('id_hotel')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="date_debut_sejour" class="col-md-4 col-form-label text-md-right">{{ __('Start Date') }}</label>

                                <div class="col-md-6">
                                    <input id="date_debut_sejour" type="date" class="form-control @error('date_debut_sejour') is-invalid @enderror" name="date_debut_sejour" required>

                                    @error('date_debut_sejour')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="date_fin_sejour" class="col-md-4 col-form-label text-md-right">{{ __('End Date') }}</label>

                                <div class="col-md-6">
                                    <input id="date_fin_sejour" type="date" class="form-control @error('date_fin_sejour') is-invalid @enderror" name="date_fin_sejour" required>

                                    @error('date_fin_sejour')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="titre" class="col-md-4 col-form-label text-md-right">{{ __('Title') }}</label>

                                <div class="col-md-6">
                                    <input id="titre" type="text" class="form-control @error('titre') is-invalid @enderror" name="titre" required>

                                    @error('titre')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Submit') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
