<?php

namespace App\Http\Controllers;

use App\Models\Tache;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TacheController extends Controller
{
    public function getListeTaches(){

      $taches = Tache::orderBy('id', 'desc')->get();

      // $taches = DB::table('taches')->get();

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


      $tache = new Tache(); //on crée un object vide

      //on aliment notre objet crée

      $tache->nom_tache = $req->nom;
      $tache->description_tache = $req->description;
      $tache->date_echeance = $req->date;
      $tache->priorite = $req->priorite;


      //on  gére la priorité
      if ($req->termine) {
        $tache->is_termine = 1;
      }else{
        $tache->is_termine = 0;
      }

      //si l'ajout s'est bien effectué, alors on redirige vers la liste des taches

      if ($tache->save()) {
        return redirect('/taches');
      }

      

    }
}
