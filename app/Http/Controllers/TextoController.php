<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Input;

use App\Texto;

class TextoController extends Controller
{
    //
    public function index(){
        return view('textos.videos');
    }

    public function detalhe($nome){

        $texto = Texto::where('nome', $nome)->get();


        return view('textos.detalhe', compact('texto'));

    }

    public function videos(){
        return view('textos.videos');
    }

    public function expediente(){
        return view('textos.expediente');
    }

    public function busca(){
    //crédito: http://justlaravel.com/search-functionality-laravel/

        $busca = Input::get('busca');

        $resultado = Texto::where('nome','like','%'.$busca.'%')->orWhere('texto',
            'like','%'.$busca.'%')->get();

        if(count($resultado)>0)
            return view('textos.busca',compact("resultado"));
        else
            return view('textos.busca');
    }
}
