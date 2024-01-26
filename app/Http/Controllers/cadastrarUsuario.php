<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\cadastrarUsuarioModel;//importar a classe que qeuro utilizar

class cadastrarUsuario extends Controller
{
    // index coleta os dados 
    public function index()
    {
        $dados = cadastrarUsuarioModel::all();

        return view('paginas.cadastrar')->With('dados', $dados);
    } //fim do método index 

    public function store(Request $request){// store envia pro banco de dados
        $nomeUsuario = $request->input('nome');// coletando dados do formulário
        $telefoneUsuario = $request->input('telefone');

        $model = new cadastrarUsuarioModel();
        $model-> nome = $nomeUsuario;
        $model-> telefone = $telefoneUsuario;
        $model->save(); //armazenar os dados no bd

        return redirect('/cadastrar');
    }// fim do metodo
} //fim da classe
