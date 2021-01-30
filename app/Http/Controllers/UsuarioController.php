<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Usuario;
use App\Models\Partida;

class UsuarioController extends Controller
{
    /**
     * UsuarioController constructor.
     *
     * @param Usuario $model
     */
    public function __construct(Usuario $model)
    {
        parent::__construct($model);
    }

    /**
     * Show the profile for a given user.
     *
     * @param  int  $id
     * @return \Illuminate\View\View
     */

    public function pregunta1($acepto)
    {

        $usuarios = $this->model->select(['*'])
                    ->leftJoin('partidas','partidas.idJugador','=','usuarios.id')
                    ->where('Acepto','=',$acepto)
                    ->limit(10);
    }

    public function pregunta2($id)
    {
        $usuariosFecha = $this->model->select(['*'])
                        ->whereBetween('fechaRegistro',[$fecha1,$fecha2])
                        ->where('Nombre','like',$letra.'%')->count();
        $usuariosAll = $this->model->count();
        $porcentaje = $usuariosFecha*100/$usuariosAll;
    }

    public function pregunta3($id)
    {
        $usuarios = $this->model->select(['*']->where('idDisfraz ','=',$idDisfraz))
                            ->orderByRaw('SUM(puntos) DESC')->limit(10)
    }

    public function pregunta4($id)
    {
        $tiempoGlobal = 0;
        $totalpartidas = Partida::count();
        $partida = Partida::select('fechaInicio','fechaFin');
        foreach ($partida as $value) {
            $tiempo = new \Carbon\Carbon($value['fechaInicio']) - new \Carbon\Carbon($value['fechaInicio']);
            $tiempoGlobal = $tiempoGlobal + $tiempo;
        }
        $promedio = $tiempoGlobal/$totalpartidas;
        
    }
}