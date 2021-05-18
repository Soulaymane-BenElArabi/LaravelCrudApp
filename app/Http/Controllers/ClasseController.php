<?php

namespace App\Http\Controllers;

use App\Models\Post, App\Filiere, App\Classroom;
use Illuminate\Http\Request;

class ClasseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function afficClasses(Request $request){
        if($request->ajax()){
            if($request->op=="delete"){
            Classroom::where('id', $request->id)
            ->delete();
            }
            else if ($request->op=="update") {
                Classroom::where('id', $request->id)->update(['code'=>$request->code, 'Filiere'=>$request->Filiere]);
            }
            
        }
        $classes = Classroom::all();
        $filieres = Filiere::all();
        return view('Ensaj.classe', ['mesClasses'=>$classes, 'mesFilieres'=>$filieres]);
    }
    
    public function storeClasses(Request $request)
    {
        $classe = new Classroom();

        

        $classe->code = $request->input('code');
        $classe->filiere = $request->FiliereChoisi;

        $classe->save();
        return redirect('/Classes')->with('succes', 'Classe ajoute');
    }

}