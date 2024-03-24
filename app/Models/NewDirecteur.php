<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NewDirecteur extends Model
{
    use HasFactory;
    protected $table = 'directeurs';

    protected $fillable = [
        'nom_ecole',
        'nom_directeur',
        'email',
        'password',
        'confirmation_password',
    ];
}
