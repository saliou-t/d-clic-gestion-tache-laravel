<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TacheController extends Controller
{
    public function getListeTaches(){

      //essayer de récupérer la liste des taches depuis la bdd


      //RECHERCHES A FAIRE

      $taches = .....




        return view('tache.taches', ["taches"=>$tache]);
    }
}
