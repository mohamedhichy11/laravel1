<?php

namespace App\Http\Controllers;

use App\Models\Hotel;
use App\Models\Internaute;
use Illuminate\Http\Request;
use App\Models\Reservation;

class ReservationController extends Controller
{
   public function index()
{
    $reservations = Reservation::all();
    $internautes = Internaute::all();
    $hotels = Hotel::all();    // Fetch internautes data
    return view('reservations.index', compact('reservations', 'internautes','hotels')); // Pass internautes variable to the view
}

    public function create()
    {
        $internautes = Internaute::all();
        $hotels = Hotel::all();
        return view('reservations.create', compact('internautes', 'hotels'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'id_internaute' => 'required',
            'id_hotel' => 'required',
            'date_debut_sejour' => 'required|date',
            'date_fin_sejour' => 'required|date|after_or_equal:date_debut_sejour',
            'titre' => 'required'
        ]);

        Reservation::create($request->all());

        return redirect()->route('reservations.index')
                         ->with('success', 'Réservation créée avec succès.');
    }

    public function show(Reservation $reservation)
    {
        return view('reservations.show', compact('reservation'));
    }
    public function edit(Reservation $reservation)
    {
        $internautes = Internaute::all();
        $hotels = Hotel::all(); // Fetch hotels data
        return view('reservations.edit', compact('reservation', 'internautes', 'hotels'));
    }
    public function update(Request $request, Reservation $reservation)
    {
        $request->validate([
            'id_internaute' => 'required',
            'id_hotel' => 'required',
            'date_debut_sejour' => 'required|date',
            'date_fin_sejour' => 'required|date|after_or_equal:date_debut_sejour',
            'titre' => 'required'
        ]);

        $reservation->update($request->all());

        return redirect()->route('reservations.index')
                         ->with('success', 'Réservation mise à jour avec succès.');
    }

    public function destroy(Reservation $reservation)
    {
        $reservation->delete();

        return redirect()->route('reservations.index')
                         ->with('success', 'Réservation supprimée avec succès.');
    }
}
