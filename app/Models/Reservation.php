<?php

// app/Models/Reservation.php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    protected $fillable = ['id_internaute', 'id_hotel', 'date_debut_sejour', 'date_fin_sejour', 'titre'];

    public function internaute()
    {
        return $this->belongsTo('App\Models\Internaute', 'id_internaute');
    }

    public function hotel()
    {
        return $this->belongsTo('App\Models\Hotel', 'id_hotel');
    }
}
