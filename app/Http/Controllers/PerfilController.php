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
    public function inicio()
    {
        $inicio = "Texto que vai no inicio";
        return view('perfil.inicio') -> with('inicio', $inicio);
    }
    public function formacao()
    {
        $formacao = "Minha Formação aqui";
        return view('perfil.formacao') -> with('formacao', $formacao);
    }
    public function certificados()
    {
        $certificados = "Meus Certificados";
        return view('perfil.certificados') -> with('certificados', $certificados);
    }
}
