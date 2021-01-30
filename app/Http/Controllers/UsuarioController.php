<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Usuario;
use App\Model\Partida;

class UsuarioController extends Controller
{
    // private $model;
    // /**
    //  * UsuarioController constructor.
    //  *
    //  * @param Usuario $model
    //  */
    // public function __construct(Usuario $model)
    // {
    //     $this->$model = $model;
    // }

    // /**
    //  * Show the profile for a given user.
    //  *
    //  * @param  int  $id
    //  * @return \Illuminate\View\View
    //  */

    public function pregunta1(Request $request)
    {
        $acepto = $request;
        $usuarios = Usuario::select(['*'])
                    ->leftJoin('partidas','partidas.idJugador','=','usuarios.id')
                    ->where('Acepto','=',$acepto)
                    ->limit(10);
        echo $usuarios;
    }

    public function pregunta2(Request $request)
    {
        $fecha1 = $request;
        $fecha1 =  $request;
        $letra = $request;
        $usuariosFecha = Usuario::select(['*'])
                        ->whereBetween('fechaRegistro',[$fecha1,$fecha2])
                        ->where('Nombre','like',$letra.'%')->count();
        $usuariosAll = Usuario::count();
        $porcentaje = $usuariosFecha*100/$usuariosAll;
        echo $porcentaje;
    }

    public function pregunta3(Request $request)
    {
        $idDisfraz = $request;
        $usuarios = Usuario::select(['*']->where('idDisfraz ','=',$idDisfraz))
                            ->orderByRaw('SUM(puntos) DESC')->limit(10);
        echo $usuarios;
    }

    public function pregunta4(Request $request)
    {

        $tiempoGlobal = 0;
        $totalpartidas = Partida::select('*')->count();
        $partida = Partida::select('fechaInicio','fechaFin');
        foreach ($partida as $value) {
            $tiempo = new \Carbon\Carbon($value['fechaInicio']) - new \Carbon\Carbon($value['fechaInicio']);
            $tiempoGlobal = $tiempoGlobal + $tiempo;
        }
        $promedio = $tiempoGlobal/$totalpartidas;
        echo $promedio;
    }
}