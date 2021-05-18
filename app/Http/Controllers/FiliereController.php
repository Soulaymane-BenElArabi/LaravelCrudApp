<?php

namespace App\Http\Controllers;

use App\Models\Post, App\Filiere, App\Classroom;
use Illuminate\Http\Request;

class FiliereController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function afficFilieres(Request $request){
        
        $filieres = Filiere::all();
        if($request->ajax()){
            if($request->op=="delete"){
            Filiere::where('id', $request->id)
            ->delete();
            }
            else if ($request->op=="update") {
                Filiere::where('id', $request->id)->update(['code'=>$request->code, 'libelle'=>$request->libelle]);
            }
        }
        return view('Ensaj.filiere', ['mesFilieres'=>$filieres]);
    }

    public function storeFilieres(Request $request)
    {
        $filiere = new Filiere();

        

        $filiere->code = $request->input('code');
        $filiere->libelle = $request->input('libelle');

        $filiere->save();
        return redirect('/Filieres')->with('succes', 'Filiere ajoute');
    }
    

}