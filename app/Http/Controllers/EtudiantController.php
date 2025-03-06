<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Etudiant;


class EtudiantController extends Controller
{
    public function index()
    {
        $etudiants = Etudiant::all();
        return view('etudiants.index', compact('etudiants'));
    }

    public function create()
    {
        return view('etudiants.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nom' => 'required',
            'prenom' => 'required',
            'email' => 'required|email|unique:etudiants',
            'telephone' => 'required'
        ]);

        Etudiant::create($request->all());
        return redirect()->route('etudiants.index')
            ->with('success', 'Etudiant créé avec succès.');
    }

    public function show(Etudiant $etudiant)
    {
        return view('etudiants.show', compact('etudiant'));
    }

    public function edit(Etudiant $etudiant)
    {
        return view('etudiants.edit', compact('etudiant'));
    }

    public function update(Request $request, Etudiant $etudiant)
    {
        $request->validate([
            'nom' => 'required',
            'prenom' => 'required',
            'email' => 'required|email|unique:etudiants,email,' . $etudiant->id,
            'telephone' => 'required'
        ]);

        $etudiant->update($request->all());
        return redirect()->route('etudiants.index')
            ->with('success', 'Etudiant mis à jour avec succès.');
    }

    public function destroy(Etudiant $etudiant)
    {
        $etudiant->delete();
        return redirect()->route('etudiants.index')
            ->with('success', 'Etudiant supprimé avec succès.');
    }
}
