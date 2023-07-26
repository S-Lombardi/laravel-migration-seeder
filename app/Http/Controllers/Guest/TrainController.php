<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Train;

class TrainController extends Controller{       
    //Con funzione all() vado a prendere tutti i dati dal db
    public function index(){

        $trains = Train::all();

        dd($trains);

        return view('home', compact ('trains'));
        
    }
    
}
