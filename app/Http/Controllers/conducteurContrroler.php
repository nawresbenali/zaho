<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\conducteur;

class conducteurContrroler extends Controller
{

    public function res(){
        $cond=conducteur::where('status',1)->get();
        //dd($cond);
        return view('res',['donnee'=>$cond]);
    }

    public function bloque($id){
        //dd($id);
        $resv=conducteur::findOrFail($id);
        $resv->status = 0;
        $resv->save();
        if($resv){
            return redirect('listeconducteur')->with('success', 'conducteur bloqué successfully!');;
           }
        // 0 : bloquer
        // 1 : normal
        // 2 : reclamé
    }
    public function active($id){
        //dd($id);
        $resv=conducteur::findOrFail($id);
        $resv->status = 1;
        $resv->save();
        if($resv){
            return redirect('listeconducteur')->with('success', 'conducteur activer successfully!');;
           }
        // 0 : bloquer
        // 1 : normal
        // 2 : reclamé
    }
    public function getconducteur(){

        //$cond=conducteur::where('status',1)->get();
        $cond=conducteur::paginate(10);
        //dd($cond);
        return view('listeconducteur',['donnee'=>$cond]);


    }
    public function getchauffeur(Request $req){
        $cond=conducteur::where('status','!=',0)->get();

        return view('chauffeur',['donnee'=>$cond]);

    }
    public function getconducteurfront(Request $req){

        $cond=conducteur::all();
        return view('ourchauffeur',['donnee'=>$cond]);

    }

    public function ajoutconductteur(Request $req){

        $cond = new conducteur;
        $cond->nomdechauufeur = $req->nomdechauufeur;
        $cond->prenom = $req->prenom;
        $cond->password = $req->password;
        $cond->email = $req->email;
        $cond->tel = $req->tel;
        $cond->status = 1;  // status 1 active and 0 bloque
        $cond->adresse = $req->adresse;
        if($req->hasFile('image')){
            $name = time().'.'.$req->file('image')->extension();
            $req->file('image')->move(base_path() . '/storage/app/public', $name);
            $cond->image = $name;
        }
        $cond->save();
       return redirect('/listeconducteur') ->with('mesg','conducteur ajout avec sucée');}
       public function ajouterdevis(Request $req){

        $devis= new devis ;




         $devis->save();

         return redirect('/');
     }

public function deleteconducteur($id){

    $cond=conducteur::find($id);
    $cond->delete();
    return redirect('listeconducteur') ->with('mesg','conducteur supp avec sucée');}
    public function getconducteurid($id){
        $cond=conducteur::find($id);
        return view('modifierconducteur',['data'=>$cond]);

    }

    public function updateconducteur(Request $req){
    $cond=conducteur::find($req->id);
        $cond->nomdechauufeur = $req->nomdechauufeur;
        $cond->prenom = $req->prenom;
        $cond->password = $req->password;
        $cond->email = $req->email;
        $cond->tel = $req->tel;
        $cond->adresse = $req->adresse;
        if($req->hasFile('image')){
            $name = time().'.'.$req->file('image')->extension();
            $req->file('image')->move(base_path() . '/storage/app/public', $name);
            $cond->image = $name;
        }
        $cond->save();
       return redirect('/listeconducteur') ->with('mesg','conducteur modif avec sucée');
    }
    public function pdfconducteur(){
        $cond=conducteur::all();
        //select * from client
        return view('imprimconducteur',['donnee'=>$cond]);
    }
       public function search0(Request $request){
        $name = $request->input('name');
        $cond = conducteur::where('nomdechauufeur', 'like', $name.'%')
        ->orWhere('adresse', 'like', $name.'%')
        ->get();
                   if ($cond->count() === 0) {
            return view('listeconducteur', ['donnee' => null]);
        }

           return view('listeconducteur',['donnee'=>$cond]);
        }
        public function search2(Request $request){
            $cond = conducteur::where('adresse', "=", $request->adresse)->get();
            return view('chauffeur',['donnee'=>$cond]);
        }
    }

