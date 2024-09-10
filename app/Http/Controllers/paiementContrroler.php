<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\paiement;
class paiementContrroler extends Controller
{
    public function getpaiement(){
        $pay=paiement::all();
        return view('listepaiement',['donnee'=>$pay]);
    
    }
}
