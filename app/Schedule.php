<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    protected $fillable = [
        'fecha',
        'hora_entrada',
        'hora_salida',
        'empleado_id'
    ];
}
