<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PerfilController extends Controller
{
    public function bio()
    {
        $bio = "Meu nome é Derick Conceição dos Santos e nasci em 2003. Sou natural de Óbidos, no Pará, onde cresci e desenvolvi minhas primeiras paixões e habilidades. Concluí o curso técnico em Desenvolvimento de Sistemas integrado ao Ensino Médio no Instituto Federal do Pará (IFPA) Campus Óbidos. Atualmente, estou cursando a graduação em Tecnologia em Análise e Desenvolvimento de Sistemas, também no IFPA Óbidos, sempre em busca de novos conhecimentos e desafios na área de tecnologia.\nTenho conhecimentos em Python, PHP e Laravel, o que me permite desenvolver soluções robustas e eficientes. Entre meus projetos, destaco o desenvolvimento de um jogo da memória em inglês para desktop, que auxilia na alfabetização de crianças na língua estrangeira, e uma calculadora de derivadas para celular, que facilita o aprendizado de matemática.\nAlém disso, já defendi artigos em eventos acadêmicos e ministrei minicursos no Fint, um evento acadêmico organizado no IFPA Campus Óbidos. Essas experiências me proporcionaram a oportunidade de compartilhar conhecimento e aprender com outros profissionais e estudantes da área.\nDesde jovem, o basquete tem sido uma grande paixão. O esporte não só me proporciona lazer, mas também me ensina sobre disciplina, trabalho em equipe e perseverança. Além disso, tive a oportunidade de ser Microempreendedor Individual (MEI), gerenciando um mercadinho. Essa experiência foi extremamente enriquecedora, pois me ensinou valiosas lições sobre empreendedorismo e gestão.\nMinha trajetória é marcada pela dedicação e versatilidade. Estou sempre em busca de novas oportunidades para crescer, tanto profissionalmente quanto pessoalmente, e acredito que cada experiência contribui para minha formação como indivíduo e profissional.";
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
