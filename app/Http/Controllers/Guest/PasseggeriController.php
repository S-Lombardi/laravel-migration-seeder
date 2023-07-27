<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Passeggeri;

class PasseggeriController extends Controller
{   
    //Con funzione all() vado a prendere tutti i dati dal db    
    public function index(){
        $passengers = Passeggeri::all();
        //dd($trains);
        return view('home', compact ('passengers'));
    }  
}
