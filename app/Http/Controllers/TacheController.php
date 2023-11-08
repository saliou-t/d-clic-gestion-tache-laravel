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

      $tache = Tache::findOrFail($req->id_tache);
      

      return view('tache.show',
        [
          'tacheTrouvee'=>$tache,
        ]      
     );
    }

    public function termine(Request $req){
      
      $tache = Tache::findOrFail($req->id_tache); //on essaie de récupérer la tache en question
      
      // dd($tache->is_termine);
      
      $tache->is_termine = 1; //on modifie le status a terminé(en l'affectant la valeur 1)

      $tache->save(); //on applique ma mise a jour dans notre BDD


      return back(); //maintenant, on fait une petite redirection vers la page show

    }
}
