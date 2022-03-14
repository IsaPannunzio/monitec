<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class inicio extends Controller
{

    public function __construct(Request $request){
        $this->Middleware('auth');
    }
    
    public function inicio()
    {
        return view('inicio');
    }


}
