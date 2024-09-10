<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\calcul;
use App\Models\passager;




class calculContrroler extends Controller
{   public function getcalcul(){
  //dd($calcul);
  return view ('calculator');
}

public function calculateTripPrice(Request $request)
{
    $request->validate([
        'adrdep' => 'required',
        'adrarv' => 'required',
        'kil' => 'required',
        'nom' => 'required'

    ]);

    $constant = 900;
    $calc = calcul::create([
        'adrdep' => $request->input('adrdep'),
        'adrarv' => $request->input('adrarv'),
        'kil' => $request->input('kil'),
        'nom' => $request->input('nom'),
        'price'=>$request->input('kil') * $constant,
    ]);

    $calc->save();

    return redirect()->route('facturemodel');
}

public function getmodel ()
{
    $calc = calcul::latest()->first();
    return view('facture',compact('calc'));


}

}
