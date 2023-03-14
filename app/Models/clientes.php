<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class clientes extends Model
{
    use HasFactory;


    protected $fillable=["cedula", "nombre", "apellido", "celular","correo", "password","departamento",'municipio'];

}
