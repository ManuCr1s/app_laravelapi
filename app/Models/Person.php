<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    use HasFactory;
    protected $primaryKey = 'dni';
    protected $table = 'persons';
    public $incrementing = false;
    protected $keyType = 'string';
    protected $fillable = [
        'dni',
        'apellido_paterno',
        'apellido_materno',
        'nombres',
        'telefono',
        'email',
        'id_region',
        'id_province',
        'id_districts',
    ];
}
