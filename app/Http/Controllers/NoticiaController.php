<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Noticia;

class NoticiaController extends Controller
{
    //
    public function index()
    {
        $noticias = Noticia::all();

        return view('noticias.index', [
            'noticias' => $noticias
        ]);
    }

    public function create()
    {
        return view('noticias.create');
    }

    public function store()
    {

    }

    public function edit()
    {

    }

    public function update()
    {

    }

    public function destroy()
    {
        
    }
    
}

