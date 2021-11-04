<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
    use HasFactory;
    protected $fillable=[
        'Nombre_Largo',
        'Nombre_Corto',
        'Correo_electronico',
        'Telefono',
        'NIT',
        'Solvencia',
        'Constitucion',
        'Plan_Pago',
        'Carta',
        'Socio_1',
        'Socio_2',
        'Socio_3',
        'Socio_4',
        'Socio_5',
];
}
