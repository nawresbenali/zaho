<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\covoiturage;
class CovoiturageContrroler extends Controller
{
    public function getCovoiturage(){
        $cov=covoiturage::all();
        return view('listcovoiturage',['donnee'=>$cov]);
}
public function ajoutcovoiturage(Request $req){

    $cov = new covoiturage;
    $cov->nom = $req->nom;
    $cov->prenom = $req->prenom;
    $cov->password = $req->password;
    $cov->email = $req->email;
    $cov->tel = $req->tel;
    $cov->adresse = $req->adresse;
    $cov->save();
    return redirect('listcovoiturage') ->with('mesg','covoiturage ajout avec sucée');}
   public function deletecovoiturage($id){

    $cov=covoiturage::find($id);
    $cov->delete();
    return redirect('listcovoiturage') ->with('mesg','covoiturage supprime avec sucée');}
    public function getcovid($id){
        $cov=covoiturage::find($id);
        return view('modifiercovoiturage',['data'=>$cov]);}
        public function updatecovoiturage(Request $req){
            $cov=covoiturage::find($req->id);
                $cov->nom = $req->nom;
                $cov->prenom = $req->prenom;
                $cov->password = $req->password;
                $cov->email = $req->email;
                $cov->tel = $req->tel;
                $cov->adresse = $req->adresse;
                $cov->save();
               return redirect('/listcovoiturage') ->with('mesg','covoiturage modifier avec sucée');}}
            

