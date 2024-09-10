<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\admin;

class adminContrroler extends Controller
{
    public function getAdmin(){
        $ad=admin::all();
        return view('listeadmin',['donnee'=>$ad]);

    }
    public function pdfadmin(){
        $ad=admin::all();
        //select * from client
        return view('imprimadmin',['donnee'=>$ad]);
    }
    public function searchadmine(Request $request){
        $nom = $request->input('nom');
        $ad = admin::where('nom', 'like', $nom.'%')
        ->orWhere('adresse', 'like', $nom.'%')
        ->get();
                   if ($ad->count() === 0) {
            return view('listeadmin', ['donnee' => null]);
        }

           return view('listeadmin',['donnee'=>$ad]);
        }
    public function ajoutadmin(Request $req){

        $ad = new admin;
        $ad->nom = $req->nom;
        $ad->prenom = $req->prenom;
        $ad->password = $req->password;
        $ad->email = $req->email;
        $ad->tel = $req->tel;
        $ad->adresse = $req->adresse;
        $ad->save();
       return redirect('/listeadmin') ->with('mesg','admin ajout avec sucée');}


public function deleteAdmin($id){

 $ad=admin::find($id);
 $ad->delete();
 return redirect('listeadmin')->with('mesg','admin supprimer avec sucée');}
 public function getAdminid($id){
    $ad=admin::find($id);
    return view('modifieradmin',['data'=>$ad]);

}
public function updateadmin(Request $req){
$ad=admin::find($req->id);
    $ad->nom = $req->nom;
    $ad->prenom = $req->prenom;
    $ad->password = $req->password;
    $ad->email = $req->email;
    $ad->tel = $req->tel;
    $ad->adresse = $req->adresse;
    $ad->save();
   return redirect('/listeadmin')->with('mesg','admin modifier avec sucée');}}
