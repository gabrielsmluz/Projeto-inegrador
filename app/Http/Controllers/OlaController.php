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
      return view('login');
    }
    public function cardapio()
    {
      return view('cardapio');
    }

}
