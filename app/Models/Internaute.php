<?php

// app/Models/Internaute.php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Internaute extends Model
{
    protected $fillable = ['nom', 'prenom', 'adresse', 'date_naissance', 'cin'];
}

