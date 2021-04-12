<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Redirect;
use App\Pecas;


class pecasController extends Controller
{
   
   public function index(){
       $pecas = Pecas::get();
       return view('pecas.list', compact('pecas'));
   }

    public function new(){
        return view('pecas.form');
    }
    public function add( Request $request ){
        $peca = new Pecas;
        $peca = $peca->create( $request->all() );
        return Redirect::to('/pecas');
    }

    public function edit( $id ){
        $peca = Pecas::findOrFail( $id );
        return view('pecas.form', ['peca' => $peca]);
    }

    public function update( $id, Request $request ){
        $peca = Pecas::findOrFail( $id );
        $peca->update( $request->all() );
        #Session::flash('msg_update','Atualizado com sucesso')
        return Redirect::to('/pecas');
    }

    public function delete( $id ){
        $peca = Pecas::findOrFail( $id );
        $peca->delete();
        return Redirect::to('/pecas');
    }

   
}
