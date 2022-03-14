<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Illuminate\support\facades\Storage;

class PostControlador extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function perfil()
    {
        $user_id = auth()->user()->id;
        $user = User::find($user_id);
        return view('perfil')->with('posts', $user->posts);
    }

    
        public function store(Request $request)
        {
            $path = $request->file('arquivo')->store('documento' , 'public');
            $post = new Post();
            $post ->mensagem  = $request->input('mensagem');
            $post ->ano  = $request->input('ano');
            $post ->tipo = $request->input('tipo');
            $post ->arquivo  = $path;
            $post ->imagem  = $path;
            $post ->user_id = auth()->user()->id;
            $post -> save();
            return redirect('/perfil');
        }
    


    public function download($id)
    {
        $post = post::find($id);

        if(isset($post)){
            $path = Storage::disk('public') -> getDriver() -> getAdapter() -> applyPathPrefix($post ->arquivo);
            return response() -> download($path);
        }
        return redirect('/perfil');
    }


    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::find($id);
        if (isset($post)){
            $arquivo = $post->arquivo;
            Storage::disk('public') ->delete($arquivo);
            $post->delete();
        }
        return redirect('/perfil');
    }
}
