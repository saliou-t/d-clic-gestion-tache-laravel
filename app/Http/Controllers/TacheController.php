<?php

namespace App\Http\Controllers;

use App\Models\Tache;
use Illuminate\Http\Request;

class TacheController extends Controller
{
    public function getListeTaches(){

      $taches = Tache::all();
    

    return view('tache.taches', ["taches"=>$taches]);

    // return view('tache.taches', compact('taches') );

    }

    public function show(Request $req){

      $tache = Tache::find($req->id_tache);

      return view('tache.show',
        ['tacheTrouvee'=>$tache]      
     );
    }
}
