<?php

namespace App\Model;


class Usuario 
{
 /**
 * Class Usuario
 *
 * @package App\Model
 *
 * @property int     $id
 * @property int     $idDisfraz
 * @property string  $Nombre
 * @property string  $Apellido
 * @property string  $Correo
 * @property string  $DNI
 * @property string  $Celular
 * @property Carbon  $FechaNacimiento
 * @property boolean $Acepto
 * @property int  $idProvincia
 * @property int  $idDepartamento
 * @property Carbon  $fechaRegistro

 */
/***
     * @var string
     */
    protected $primaryKey = 'id';

    /**
     * @var string
     */
    protected $table = 'usuarios';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id',
        'idDisfraz',
        'Nombre',
        'Apellido',
        'Correo',
        'DNI',
        'Celular',
        'FechaNacimiento',
        'Acepto',
        'idProvincia',
        'idDepartamento',
        'fechaRegistro',
    ];

}
