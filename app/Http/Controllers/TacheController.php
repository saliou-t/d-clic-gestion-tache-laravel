<?php

namespace App\Http\Controllers;

use App\Models\Tache;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TacheController extends Controller
{
    public function getListeTaches(){

      // $taches = Tache::all();

      $taches = DB::table('taches')->get();

      return view('tache.taches', ["taches"=>$taches]);

    // return view('tache.taches', compact('taches') );

    }

    public function show(Request $req){

      $tache = Tache::findOrFail($req->id_tache);
      

      return view('tache.show',
        [
          'tacheTrouvee'=>$tache,
        ]      
     );
    }

    public function termine(Request $req){
      
      $tache = Tache::findOrFail($req->id_tache); //on essaie de récupérer la tache en question
            
      $tache->is_termine = 1; //on modifie le status a terminé(en l'affectant la valeur 1)

      $tache->save(); //on applique la mise a jour dans notre BDD


      return back(); //maintenant, on fait une petite redirection vers la page precedente

    }


    public function create(){
      return view('tache.nouveau');
    }

    public function save(Request $req){
      dd($req);
    }
}
