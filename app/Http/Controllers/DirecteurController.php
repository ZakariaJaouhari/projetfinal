<?php

namespace App\Http\Controllers;

use App\Models\Newdirecteur;
use Illuminate\Http\Request;

class DirecteurController extends Controller
{
    //
    public function Ajouter(Request $request)
    {
        
        $validatedData = $request->validate([
            'nom_ecole' => 'required|string',
            'nom_directeur' => 'required|string',
            'email' => 'required|string',
            'password' => 'required|string',
            'confirmation_password' => 'required|string|same:password',


        ]);
        dd('nom_ecole');
    
        Newdirecteur::create([
            'nom_ecole' => $validatedData['nom_ecole'],
            'nom_directeur' => $validatedData['nom_directeur'],
            'email' => $validatedData['email'],
            'password' => $validatedData['password'],
            'confirmation_password' => $validatedData['confirmation_password'],
        ]);

      
    }
}

