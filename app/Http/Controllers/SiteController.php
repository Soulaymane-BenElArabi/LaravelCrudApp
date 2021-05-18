<?php

namespace App\Http\Controllers;

use  App\Classroom;
use Illuminate\Http\Request;
use DB;

class SiteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Ensaj.index');
    }

    public function charts(){
        $data = Classroom::select(DB::raw("count(*) as nbr"))->groupBy('Filiere')->get()->toJson();
        $lesfilieres = Classroom::select(DB::raw( "Filiere as filiere"))->groupBy('Filiere')->get()->toArray();
        return view("welcome",['data'=>$data, 'filieres'=>$lesfilieres]);
    }
    public function chartjs(){
        $data = Classroom::select(DB::raw("count(*) as nbr"))->groupBy('Filiere')->get()->toArray();
        $lesfilieres = Classroom::select(DB::raw( "Filiere as filiere"))->groupBy('Filiere')->get()->toArray();
        $data = array_column($data, 'nbr');
        $lesfilieres = array_column($lesfilieres, 'filiere');
        return view('welcome')
            ->with('data',json_encode($data,JSON_NUMERIC_CHECK))
            ->with('filiere',json_encode($lesfilieres));

    }
}