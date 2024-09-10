<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\reclamation;
use App\Models\conducteur;
use Illuminate\Support\Facades\DB;


class reclamationContrroler extends Controller
{
    public function getreclamation(){
        $recl=reclamation::all();
        return view('listereclamation',['donnee'=>$recl]);


    }
    public function getreclamationfront(Request $req){

        $recl=reclamation::all();
        $conducteur=conducteur::where('status','!=',0)->get();
               //dd($recl);
        return view('reclamation',['donnee'=>$conducteur,'recl'=>$recl]);

    }

    public function ajoutreclamation(Request $req){

        $validated = $req->validate([
            'email' => 'required|unique:reclamations|max:255',
            'name' => 'required',
        ]);

//dd($req);
        $recl= new reclamation;
        $recl->name= $req->name;
        $recl->email = $req->email;
        $recl->tel = $req->tel;
        $recl->message = $req->message;
        $recl->nomdechauufeur= $req->nomdechauufeur;
        $recl->iddechauufeur= $req->nomdechauufeur;

        $recl->save();


        $reclamation=DB::table('reclamations')
                 ->select('nomdechauufeur', DB::raw('count(*) as total'))
                 ->groupBy('nomdechauufeur')
                 ->get();


        foreach($reclamation as $user){

            if($user->total >= 4){


                $resv=conducteur::find($user->nomdechauufeur);
                //dd($resv);
                if($resv){
                    $resv->status = 2;
                $resv->save();
                }

            }
        }
        return back()->with('success','reclamation avec succées');
        return redirect('listereclamation');
    }

        public function deletereclamation($id){

            $recl=reclamation::find($id);
            $recl->delete();
            return redirect('listereclamation') ->with('mesg','conducteur supp avec sucée');
        }
        public function pdfreclamation(){
            $recl=reclamation::all();
            //select * from client
            return view('imprimreclamation',['donnee'=>$recl]);
        }
        public function searchreclamation(Request $request){
            $name = $request->input('name');
            $recl = reclamation::where('name', 'like', $name.'%')
            ->orWhere('email', 'like', $name.'%')
            ->get();
                       if ($recl->count() === 0) {
                return view('listereclamation', ['donnee' => null]);
            }

               return view('listereclamation',['donnee'=>$recl]);
            }
}
