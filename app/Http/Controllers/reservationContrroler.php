<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\reservation;
use App\Models\conducteur;
use App\Models\reclamation;
use Illuminate\Support\Facades\DB;
use Auth;
use App\Models\trajet;

class reservationContrroler extends Controller
{
    public function getreserver(){
        $resv=reservation::all();
        return view('listereservation',['donnee'=>$resv]);
    }
    public function getreserverpayement(){
        $resv=reservation::where('email',auth()->user()->email)->get();
        //dd(auth()->user()->email);

        return view('listereservationpayement',['donnee'=>$resv]);
    }
    public function index(){

        return view('index');

    }

    public function resserver(Request $req){


        $traje = trajet::where('addepart', $req->départ)->where('addarrivee', $req->arivée)->where('date', $req->date)->get();
        if(count($traje) == 0){
            return back()->with("erreur", "trajer non disponible.");
        }
        $nbr_places = true;
        foreach ($traje as  $value) {
            $reservationc = reservation::where('trajer_id', "=", $value->id)->get();
            if(count($reservationc) <4){
                $nbr_places = false;
            }
            $postion=['1'=>0,'2'=>0,'3'=>0,'4'=>0];
            foreach ($reservationc as $key) {
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



        if($nbr_places){
            return back()->with("erreur", "Pas des places disponible pour ce date .");
        }else{

            $id =0;
            $idtrajer=0;
        foreach ($traje as $key => $item) {

            if($item->postion[$req->position] == 0){
                $id = $item->nomdechauufeur;
                $idtrajer = $item->id;
            }
        }
            if($id == 0)
            {
                return back()->with("erreur", "pas de position disponible.");
            }
            $resv = new reservation ;
            $resv->nom = $req->nom;
            $resv->email = $req->email;
            $resv->départ = $req->départ;
            $resv->arivée= $req->arivée;
            $resv->date= $req->date;
            $resv->tel= $req->tel;
            $resv->nombredeplace= $req->nombredeplace;
            $resv->position= $req->position;

            $resv->nomdechauufeur= $id;
            $resv->trajer_id = $idtrajer;
            $resv->accepter = null;
            $resv->save();
            return back()->with('success','resservation avec succées');
            return redirect('/listereservation')->with('mesg','aucun place');
        }
    }




public function accepter($id){
    $resv=reservation::find($id);
    $resv->accepter = 1;
    $resv->save();
     return redirect()->back();
}

public function refuse($id){

    $resv=reservation::find($id);
    $resv->refuser = 2;
    $resv->save();
     return redirect()->back();
}

        public function deletereservation($id){

            $resv=reservation::find($id);
            $resv->delete();
            return redirect('listereservation') ->with('mesg','reservation supp avec sucée');}
            public function pdfresrvation(){
                $resv=reservation::all();
                //select * from client
                return view('imprimreservation',['donnee'=>$resv]);
            }
            public function searchreservation(Request $request){
                $nom = $request->input('nom');
                $resv = reservation::where('nom', 'like', $nom.'%')
                ->orWhere('email', 'like', $nom.'%')
                ->get();
                           if ($resv->count() === 0) {
                    return view('listereservation', ['donnee' => null]);
                }

                   return view('listereservation',['donnee'=>$resv]);
                }

}
