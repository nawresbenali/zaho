<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\etoile;


class etoileContrroler extends Controller
{
    public function getetoile(){
        $etoil=etoile::all();
        return view('listeetoile',['donnee'=>$etoil]);
}
}
