<?php

namespace App\Http\Controllers;

use App\Models\Post, App\Filiere,App\Etudiant, App\Classroom;
use Illuminate\Http\Request;

class EtudiantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function show(){
        $etudiants = Etudiant::all();
        $classes = Classroom::all();
        $filieres = Filiere::all();
        return view('Ensaj.etudiant', ['mesEtudiants'=>$etudiants, 'mesClasses'=>$classes, 'mesFilieres'=>$filieres]);
    }


    public function store(Request $request)
    {
        $etudiant = new Etudiant();

        

        $etudiant->cin = $request->input('cin');
        $etudiant->nom = $request->input('nom');
        $etudiant->prenom = $request->input('prenom');
        $etudiant->telephone = $request->input('telephone');
        $etudiant->photo = $request->input('photo');
        $etudiant->filiere = $request->FiliereChoisi;
        $etudiant->classe = $request->ClasseChoisi;

        $etudiant->save();
        return redirect('/Etudiants')->with('succes', 'Etudiant ajoute');
    }

}