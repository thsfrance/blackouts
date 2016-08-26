<?php

namespace blackoutsLibManager\Http\Controllers;

use Illuminate\Http\Request;

use blackoutsLibManager\Http\Requests;

class LivroController extends Controller
{
    public function lista(){
        
        return view('livros.lista');
    }
}
