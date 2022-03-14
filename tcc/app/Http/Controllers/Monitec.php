<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\http\Requests;
use Auth;
use Image;

class Monitec extends Controller

{
    
    public function index()
    {
        return view('index');
    }

    public function editar()
    {
        return view('editar', array('user' => Auth::user()) );

    }

    public function update_avatar(Request $request){
        if($request->hasfile('avatar')){
            $avatar = $request->file('avatar');
            $filename = time() . '.' . $avatar->getClientOriginalExtension();
            image::make($avatar)->resize(300, 300)->save( public_path('/uploads/avatars/' . $filename));

            $user = Auth::user();
            $user->avatar  = $filename;
            $user->save();
        }
        return view('editar', array('user' => Auth::user()) );
    }

    public function umano()
    {
        return view('umano');
    }
    
      public function doisano()
    {
        return view('doisano');
    }

          public function tresano()
    {
        return view('tresano');
    }
    



    public function pagina()
    {
        return view('pagina');
    }

    public function umanocap1()
    {
        return view('umano/umanocap1');
    }

    public function umanocap2()
    {
        return view('umano/umanocap2');
    }
    
    public function umanocap3()
    {
        return view('umano/umanocap3');
    }

    public function umanocap4()
    {
        return view('umano/umanocap4');
    }

    public function umanocap5()
    {
        return view('umano/umanocap5');
    }

    public function doisnocap1()
    {
        return view('doisano/doisnocap1');
    }

    public function doisnocap2()
    {
        return view('doisano/doisnocap2');
    }

    public function doisnocap3()
    {
        return view('doisano/doisnocap3');
    }
    
    public function doisnocap4()
    {
        return view('doisano/doisnocap4');
    }

    public function doisnocap5()
    {
        return view('doisano/doisnocap5');
    }
    public function doisnocap6()
    {
        return view('doisano/doisnocap6');
    }
    public function doisnocap7()
    {
        return view('doisano/doisnocap7');
    }
    public function doisnocap8()
    {
        return view('doisano/doisnocap8');
    }
    public function tresnocap1()
    {
        return view('tresano/cap1');
    }
    public function tresnocap2()
    {
        return view('tresano/cap2');
    }
    public function tresnocap3()
    {
        return view('tresano/cap3');
    }
    public function tresnocap4()
    {
        return view('tresano/cap4');
    }
    public function tresnocap5()
    {
        return view('tresano/cap5');
    }

}