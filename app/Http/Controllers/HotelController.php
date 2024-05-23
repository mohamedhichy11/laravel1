<?php

// app/Http/Controllers/HotelController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Hotel;

class HotelController extends Controller
{
    public function index()
    {
        $hotels = Hotel::all();
        return view('hotels.index', compact('hotels'));
    }

    public function create()
    {
        // Retourne la vue pour créer un nouvel hôtel
        return view('hotels.create');
    }

    public function store(Request $request)
    {
        // Validation des données
        $request->validate([
            'titre' => 'required',
            'adresse' => 'required',
            'prix_unitaire' => 'required|numeric',
            'type_chambre' => 'required'
        ]);

        // Création du nouvel hôtel
        Hotel::create($request->all());

        // Redirection avec un message de succès
        return redirect()->route('hotels.index')
                         ->with('success', 'Hôtel créé avec succès.');
    }
    public function show($id)
    {
        $hotel = Hotel::findOrFail($id);
        return view('hotels.show', compact('hotel'));
    }

    public function edit(Hotel $hotel)
    {
        // Retourne la vue pour modifier un hôtel existant
        return view('hotels.edit', compact('hotel'));
    }

    public function update(Request $request, Hotel $hotel)
    {
        // Validation des données
        $request->validate([
            'titre' => 'required',
            'adresse' => 'required',
            'prix_unitaire' => 'required|numeric',
            'type_chambre' => 'required'
        ]);

        // Mise à jour de l'hôtel
        $hotel->update($request->all());

        // Redirection avec un message de succès
        return redirect()->route('hotels.index')
                         ->with('success', 'Hôtel mis à jour avec succès.');
    }

    public function destroy(Hotel $hotel)
    {
        // Suppression de l'hôtel
        $hotel->delete();

        // Redirection avec un message de succès
        return redirect()->route('hotels.index')
                         ->with('success', 'Hôtel supprimé avec succès.');
    }
}
