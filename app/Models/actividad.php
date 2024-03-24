<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Actividad
 *
 * @property $id
 * @property $tema
 * @property $actividad
 * @property $calificacion
 * @property $fecha
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Actividad extends Model
{
    

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['tema', 'actividad', 'calificacion', 'fecha'];



}
