<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\contact;


class contactContrroler extends Controller
{
    public function getcontact(){
        $cont=contact::all();

        return view('listecontact',['donnee'=>$cont]);
}
public function getmessage(Request $req){
    $cont=contact::where('id','=',$req->id)->first();
    $user = App\Models\User::find($cont->id_sender);
    $cont->role = '';

    if($user){
        $cont->role = $user->role;
    }
    return view('detailsMessage',['cont'=>$cont]);
}
    public function ajoutcontact(Request $req){
        $cont= new contact;
        $cont->name= $req->name;
        $cont->email = $req->email;
        $cont->tel = $req->tel;
        $cont->message = $req->message;
        $cont->id_sender = auth()->user()->id;

        $cont->save();
        return back()->with('success','contact avec succées');
        return redirect('listecontact');}
        public function deletecontact($id){

            $cont=contact::find($id);
            $cont->delete();

            return redirect('listecontact') ->with('mesg','contact supprime avec sucée');}


            public function detailMessage($id){
        $cont = Contact::find($id);

        $cont->show1 = 1;

        $cont->save();

       // $cont=contact::where('id','=',$id)->first();
        $user = \App\Models\User::find($cont->id_sender);
        $cont->role = '';

        if($user){
            $cont->role = $user->role;
        }
        return view('detailsMessage',['cont'=>$cont]);
       }
       public function pdfcontact(){
        $cont=contact::all();
        //select * from client
        return view('imprimcontact',['donnee'=>$cont]);
    }
    public function searchcontact(Request $request){
        $name = $request->input('name');
        $cont = contact::where('name', 'like', $name.'%')
        ->orWhere('email', 'like', $name.'%')
        ->get();
                   if ($cont->count() === 0) {
            return view('listecontact', ['donnee' => null]);
        }

           return view('listecontact',['donnee'=>$cont]);
        }
}
