<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Post;
use App\User;
class AdminController extends Controller
{
    public function __construct(Request $request){
        $this->Middleware('auth');
    }

    public function index(){
        $user_id = auth()->user()->id;
        $user = Post::all();
        return view('admin')->with('posts', $user);
    
    }

}
