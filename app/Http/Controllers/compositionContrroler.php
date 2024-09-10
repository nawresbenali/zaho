<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\composition;


class compositionContrroler extends Controller
{
    public function getcomposition(){
        $comp=composition::all();
        return view('listecomposition',['donnee'=>$comp]);
    

    }
    public function getcompositionfront(Request $req){

        $comp=composition::all();
        return view('about',['donnee'=>$comp]);

    }
    public function ajoutcomposition(Request $req){

        $comp = new composition;
        $comp->nom = $req->nom;
        if($req->hasFile('image')){
            $name = time().'.'.$req->file('image')->extension();
            $req->file('image')->move(base_path() . '/storage/app/public', $name);
            $comp->image = $name;
        }
        $comp->save();
       return redirect('/listecomposition') ->with('mesg','admin ajout avec sucée');}
     
}
