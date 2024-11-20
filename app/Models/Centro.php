<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Centro extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_centro_poblado';
    protected $table = 'centros_poblados';
    public $incrementing = false;
    protected $keyType = 'string';
    protected $fillable = [
        'id_centro_poblado',
        'nombre',
        'id_district',
    ];
}
