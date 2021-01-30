<?php

namespace App\Model;


class Partida 
{
 /**
 * Class Partida
 *
 * @package App\Model
 *
 * @property int     $idJuego
 * @property int     $idJugador
 * @property int  $idTicket
 * @property int  $idTemporada
 * @property int  $idcodigo
 * @property string  $JuegoToken
 * @property string  $estado
 * @property int  $puntos
 * @property Carbon  $fechaInicio
 * @property Carbon  $fechaFin
 * @property Carbon  $created_at
 * @property Carbon  $updated_at

 */
/***
     * @var string
     */
    protected $primaryKey = 'idJuego';

    /**
     * @var string
     */
    protected $table = 'partidas';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'idJuego',
        'idJugador',
        'idTicket',
        'idTemporada',
        'idcodigo',
        'JuegoToken',
        'estado',
        'puntos',
        'fechaInicio',
        'fechaFin',
    ];
/**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'created_at',
        'updated_at',
    ];
}
