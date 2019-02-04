<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MeuControlador extends Controller
{
    public function getNome()
    {
        return "MURILO";
    }

    public function getIdade()
    {
        return "21 anos";
    }

    public function Multi($n1, $n2)
    {
        return $n1 * $n2;
    }

    public function nomeId($nom)
    {
        $v = ["MURILO", "MARCIO", "LUCAS", "JOAO"];
        if ($nom >= 0 && $nom < count($v))
            return $v[$nom];
        return "Nada Encontrado";
    }
}
