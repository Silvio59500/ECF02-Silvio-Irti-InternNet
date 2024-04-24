<?php

// app/Http/Controllers/EntrepriseController.php
namespace App\Http\Controllers;

use App\Models\Entreprise;
use Illuminate\Http\Request;

class EntrepriseController extends Controller
{
    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        // Validation des données
        $validatedData = $request->validate([
            'nom' => 'required|string|max:255',
            // Ajoutez d'autres règles de validation selon vos besoins
        ]);

        // Création de l'entreprise
        Entreprise::create($validatedData);

        // Redirection avec un message de succès
        return redirect()->route('create')->with('success', 'Votre entreprise a été enregistrée avec succès.');
    }
}
