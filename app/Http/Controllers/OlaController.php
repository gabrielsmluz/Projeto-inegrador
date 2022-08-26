<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OlaController extends Controller
{
    public function cadastro()
    {
      return view('cadastro');
    }
    public function login()
    {
      return view('teste_background');
    }
    public function cardapio()
    {
      return view('cardapio');
    }
    public function funcionarios()
    {
      return view('funcionarios');
    }
    public function pedidos()
    {
      return view('pedidos');
    }
    public function verpedidos()
    {
      return view('verpedidos');
    }
    public function editarcardapio()
    {
      return view('editarcardapio');
    }
    public function produtos()
    {
      return view('produtos');
    }
    public function teste_background()
    {
      return view('teste_background');
    }
    public function telagerente()
    {
      return view('telagerente');
    }
    public function login2()
    {
      return view('login2');
    }

}
