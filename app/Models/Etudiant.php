<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Etudiant extends Model
{
    // Les attributs qui sont assignables en masse.
    protected $fillable = [
        'nom', 'prenom', 'email', 'telephone'
    ];
}
