@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header">{{ __('Reservations') }}</div>

                    <div class="card-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>internaute</th>
                                    <th>CIN</th>
                                    <th>Hotel</th>
                                    <th>Start Date</th>
                                    <th>End Date</th>
                                    <th>Title</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($reservations as $reservation)
                                    <tr>
                                        <td>{{ $reservation->id }}</td>
                                        <td>{{ $reservation->internaute->nom }}</td>
                                        <td>{{ $reservation->internaute->cin }}</td>
                                        <td>{{ $reservation->hotel->titre }}</td>
                                        <td>{{ $reservation->date_debut_sejour }}</td>
                                        <td>{{ $reservation->date_fin_sejour }}</td>
                                        <td>{{ $reservation->titre }}</td>
                                        <td>
                                            <a href="{{ route('reservations.show', $reservation->id) }}" class="btn btn-sm btn-info">View</a>
                                            <a href="{{ route('reservations.edit', $reservation->id) }}" class="btn btn-sm btn-primary">Edit</a>
                                            <form action="{{ route('reservations.destroy', $reservation->id) }}" method="POST" style="display: inline-block;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
