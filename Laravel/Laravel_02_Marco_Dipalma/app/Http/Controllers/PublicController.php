<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicController extends Controller
{

    public $arrayReporters= [
        ['id'=>'1', 'name'=>'Giovanni', 'surname'=>'Bianchi', 'article'=>'Politica'],

        ['id'=>'2', 'name'=>'Federico', 'surname'=>'Rossi', 'article'=>'Tecnologia'],

        ['id'=>'3', 'name'=>'Valentina', 'surname'=>'Verdi', 'article'=>'Meteo'],

        ['id'=>'4', 'name'=>'Antonella', 'surname'=>'Neri', 'article'=>'Intrattenimento'],

    ];

    public function homepage() {
        return view('welcome');
    }

    public function chiSiamo () {
        
        return view('chiSiamo', ['reporters'=>$this->arrayReporters]);
    }

    public function servizi () {
        
        return view('servizi', ['reporters'=>$this->arrayReporters]);
    }

    public function dettaglio ($name){

        foreach ($this->arrayReporters as $reporter){
            if($name== $reporter['name']){
                
                return view('dettagli.dettaglioServizio', ['reporter'=>$reporter]);

            }
        }

    }


}
