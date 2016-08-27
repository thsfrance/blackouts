<?php

namespace blackoutsLibManager\Http\Controllers;

use Illuminate\Http\Request;

use blackoutsLibManager\Http\Requests;

use blackoutsLibManager\Providers\GoogleBooksServiceProvider;

class LivroController extends Controller
{
    public function lista(){
        
        return view('livros.lista');
    }
    
    public function novo(){
        return view('livros.formulario');
    }
    
    public function api(GoogleBooksServiceProvider $book){
        return $book->get();
    }
}
