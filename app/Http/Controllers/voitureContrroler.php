<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\voiture;


class voitureContrroler extends Controller
{
    public function getvoiture(){
        $voit=voiture::all();
        return view('listevoiture',['donnee'=>$voit]);

    }
    public function getvoiturefront(Request $req){

        $voit=voiture::all();
        return view('voiture',['donnee'=>$voit]);


    }
    public function pdfvoiture(){
        $voit=voiture::all();
        //select * from client
        return view('imprimevoiture',['donnee'=>$voit]);
    }
    public function searchvoiture(Request $request){
        $num = $request->input('num');
           $voit = voiture::where('num', 'like', $num.'%')->get();
           if ($voit->count() === 0) {
            return view('listevoiture', ['donnee' => null]);
        }

           return view('listevoiture',['donnee'=>$voit]);
        }

    public function ajoutvoiture(Request $req){
        $voit = new voiture;
        $voit->num = $req->num;
        $voit->nom = $req->nom;

        $voit->Description = $req->Description;
        if($req->hasFile('image')){
            $name = time().'.'.$req->file('image')->extension();
            $req->file('image')->move(base_path() . '/storage/app/public', $name);
            $voit->image = $name;
        }
        $voit->save();
       return redirect('/listevoiture');
}
public function ajouterdevis(Request $req){

    $devis= new devis ;




     $devis->save();

     return redirect('/');
 }
public function getvoitureid($id){
    $voit=voiture::find($id);
    return view('modifervoiture',['data'=>$voit]);}
    public function updatevoiture(Request $req){
        $voit=voiture::find($req->id);
            $voit->num = $req->num;
            $voit->nom = $req->nom;
            $voit->Description = $req->Description;
            if($req->hasFile('image')){
                $name = time().'.'.$req->file('image')->extension();
                $req->file('image')->move(base_path() . '/storage/app/public', $name);
                $voit->image = $name;}            $voit->save();
           return redirect('/listevoiture') ->with('mesg','voiture modif avec sucée');}
           public function search3(Request $request){
            $voit = voiture::where('num', "=", $request->num)->get();
            return view('voiture',['donnee'=>$voit]);
        }    public function search4(Request $request){
            $voit = voiture::where('Num', "=", $request->num)->get();
            return view('voiture',['donnee'=>$voit]);
        }

public function deletevoiture($id){

    $voit=voiture::find($id);
    $voit->delete();
    return redirect('listevoiture') ->with('mesg','voiture supp avec sucée');}
    }

