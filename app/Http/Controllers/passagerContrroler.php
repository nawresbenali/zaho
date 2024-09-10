<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\passager;

class passagerContrroler extends Controller
{
    public function getpassager(){
        $pass=passager::all();
        return view('listepassager',['donnee'=>$pass]);

    }
    public function ajoutpassager(Request $req){

        $pass = new passager;
        $pass->nom = $req->nom;
        $pass->prenom = $req->prenom;
        $pass->password = $req->password;
        $pass->email = $req->email;
        $pass->tel = $req->tel;
        $pass->adresse = $req->adresse;
        $pass->save();
       return redirect('/listepassager') ->with('mesg','passager ajout avec sucée');}

       public function pdfpassager(){
        $pass=passager::all();
        //select * from client
        return view('imprimepassager',['donnee'=>$pass]);
    }
public function deletepassager($id){

    $pass=passager::find($id);
    $pass->delete();
    return redirect('listepassager') ->with('mesg','passager supp avec sucée');}
    public function getpassagerid($id){
        $pass=passager::find($id);
        return view('modifierpassager',['data'=>$pass]);}
        public function updatepassager(Request $req){
            $pass=passager::find($req->id);
                $pass->nom = $req->nom;
                $pass->prenom = $req->prenom;
                $pass->password = $req->password;
                $pass->email = $req->email;
                $pass->tel = $req->tel;
                $pass->adresse = $req->adresse;
                $pass->save();
               return redirect('/listepassager') ->with('mesg','passager modif avec sucée');
            }
            public function search(Request $request){
                $name = $request->input('name');
                   $pass = passager::where('nom', 'like', $name.'%')
                   ->orWhere('adresse', 'like', $name.'%')
                   ->get();
                   if ($pass->count() === 0) {
                    return view('listepassager', ['donnee' => null]);
                }

                   return view('listepassager',['donnee'=>$pass]);
                }
        }


