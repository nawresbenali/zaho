<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\trajet;
use Auth;
use App\Models\reservation;

class trajetContrroler extends Controller
{
    public function ajoutrecherche(Request $request){

        $traj = new trajet;
        $traj->addepart = $request->addepart;
        $traj->addarrivee = $request->addarrivee;
        $traj->date = $request->date;
        $traj->nomdechauufeur = $request->nomdechauufeur;



        $traj->save();
       return redirect('/listerecherche') ->with('mesg','trajet ajout avec sucée');}


    public function gettrajet(){
        $traj=trajet::all()->where('nomdechauufeur',Auth::user()->id);
        return view('listerecherche',['donnee'=>$traj]);

    }
    public function gettrajetid($id){
        $traj=Trajet::find($id);
        return view('modifiertrajet',['data'=>$traj]);

    }

    public function updatetrajet(Request $req){
        $traj=Trajet::find($req->id);
        $traj->addepart = $req->addepart;

            $traj->addarrivee = $req->addarrivee;
            $traj->date = $req->date;

            $traj->save();
           return redirect('/listerecherche') ->with('mesg','conducteur modif avec sucée');
        }
    public function deletetrajet($id){

        $traj=trajet::find($id);
        $traj->delete();
        return redirect('listerecherche') ->with('mesg','trajet supp avec sucée');}
    public function searchTrajet(Request $request)
{
    $dep = $request->depart;
    $arr = $request->arr;
    $date = $request->date;

    $trajets = Trajet::where('addepart', "=", $dep)
        ->where('addarrivee', "=", $arr)
        ->where('date', "=", $date)
        ->get();

    foreach ($trajets as  $value) {
        $reservations = reservation::where('trajer_id', "=", $value->id)->get();
        $value->nombreplace = 4 - count($reservations);
        $postion=['1'=>0,'2'=>0,'3'=>0,'4'=>0];
        foreach ($reservations as $key) {
            if($key->position == 1){
                $postion['1'] = 1;
            }
            if($key->position == 2){
                $postion['2'] = 1;
            }
            if($key->position == 3){
                $postion['3'] = 1;
            }
            if($key->position == 4){
                $postion['4'] = 1;
            }

        }


        $value->postion = $postion;


    }
    return back()->with("trajets", $trajets);
}
public function searchtt(Request $request){
    $name = $request->input('name');
       $traj = trajet::where('date', 'like', $name.'%')
       ->get();
       if ($traj->count() === 0) {
        return view('listerecherche', ['donnee' => null]);
    }

       return view('listerecherche',['donnee'=>$traj]);
    }
}
