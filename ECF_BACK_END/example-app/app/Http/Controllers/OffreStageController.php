<?php

namespace App\Http\Controllers;

use App\Models\InternshipOpportunity;
use Illuminate\Http\Request;

class OffreStageController extends Controller
{
    public function index()
    {
        $offres = InternshipOpportunity::all();
        return view('offres.index', compact('offres'));
    }

    public function show($id)
    {
        $offre = InternshipOpportunity::findOrFail($id);
        return view('offres.show', compact('offre'));
    }

}
public function create()
{
    return view('offres.create');
}

public function store(Request $request)
{
    // Validation et enregistrement de l'offre de stage
}
