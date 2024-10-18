<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PerfilController extends Controller
{
    public function bio()
    {
        $bio = "Breve Biografia minha";
        return view('perfil.bio')-> with('bio', $bio);
    }
}
