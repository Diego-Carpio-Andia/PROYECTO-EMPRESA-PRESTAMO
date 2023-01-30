<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    public function config(Request $request) {
        //carpeta user archivo config en las wies
         return view('profile.edit', [
            'user' => $request->user(),
        ]);
    }

    public function __construct() {
        //tambien se puede aplicar el middelware de esta manera
        //a todos los metodos
        $this->middleware('auth');
    }

}
