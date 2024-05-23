<?php

// app/Models/Hotel.php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    protected $fillable = ['titre', 'adresse', 'prix_unitaire', 'type_chambre'];

    public function reservations()
    {
        return $this->hasMany('App\Models\Reservation', 'id_hotel');
    }
}
