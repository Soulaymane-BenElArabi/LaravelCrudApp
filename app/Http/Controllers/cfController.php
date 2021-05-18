<?php

namespace App\Http\Controllers;

use App\Models\Post, App\Filiere, App\Classroom;
use Illuminate\Http\Request;

class cfController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function afficFil(){
        $filieres = Filiere::all();
        return view('Ensaj.cf', ['mes'=>$filieres]);
    }

    public function lookFor(Request $request){
        $fil = $request->FiliereChoisi;
        $lesclasses = Classroom::where('Filiere', $fil )->get();
        return view('Ensaj.cf', ['mesCF'=>$lesclasses]);


    }
}