<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Anexo extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_caserio_anexo';
    protected $table = 'caserios_anexos';
    public $incrementing = false;
    protected $keyType = 'string';
    protected $fillable = [
        'id_caserio_anexo',
        'nombre',
        'id_centro_poblado',
    ];
}
