<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\contactconducteur;
use App\Models\conducteur;
use App\Models\User;
use Auth;

class contactconducteurContrroler extends Controller
{
    public function getcontactconducteur(){
        $contcon=contactconducteur::all();
        return view('listecontactconducteur',['donnee'=>$contcon]);
    }
    public function ajoutcontactconducteur(Request $req, $id){
        $contcon= new contactconducteur;
        $contcon->nom= $req->nomconducteur;
        $contcon->email= $req->emailconducteur;
        $contcon->message = $req->message;
        $contcon->id_acceptmessage = $id;
        $contcon->id_sendmessage = auth()->user()->id;

        $contcon->save();
        return back()->with('success','contact avec succées');
        return redirect('listecontactconducteur');
    }
    public function deletemessage($id){

        $contcon=contactconducteur::find($id);
        $contcon->delete();
        return redirect('listecontactconducteur') ->with('mesg','message supp avec sucée');
    }
        public function getmessagee(Request $req){
            $contcon=contactconducteur::where('id','=',$req->id)->first();
            $passager = User::find($contcon->id_sendmessage);
            $contcon->namesender = $passager->name;
            return view('listMessage',['contcon'=>$contcon]);
        }

        public function listmessage($id){
            $message = contactconducteur::find($id);

            $message->show1 = 1;


            $message->save();

            $contcon=contactconducteur::where('id','=',$id)->first();


            return view('listeMessage',['data'=>$message,'contcon'=>$contcon]);
           }
           public function search5(Request $request){
            $name = $request->input('name');
               $contcon = contactconducteur::where('nom', 'like', $name.'%')
               ->orWhere('email', 'like', $name.'%')
               ->get();
               if ($contcon->count() === 0) {
                return view('listecontactconducteur', ['donnee' => null]);
            }

               return view('listecontactconducteur',['donnee'=>$contcon]);
            }
    }
