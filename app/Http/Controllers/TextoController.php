<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Texto;

class TextoController extends Controller
{
    //
    public function index(){
        return view('textos.index');
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
        return view('textos.expediente');
    }
}
