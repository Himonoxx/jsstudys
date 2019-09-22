<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WordsController extends Controller
{
    public function index(){
        
        $words = Word::all();
        return view('jsstudys.typing',['words'=>$words]);
        
    }
}
