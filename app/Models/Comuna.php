<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comuna extends Model
{
    use HasFactory;
    // Definir la tabla asociada si es diferente al nombre plural del modelo
    protected $table = 'comunas';

    // Definir los campos que se pueden asignar de manera masiva
    protected $fillable = ['id','nombre','id_region' ];

    /**
     * Relación con la tabla regiones.
     * Una comuna pertenece a una región.
     */
    public function region()
    {
        return $this->belongsTo(Region::class, 'id_region');
    }
}
