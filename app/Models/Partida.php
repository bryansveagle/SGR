<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Partida
 *
 * @property $id
 * @property $producto
 * @property $tipo
 * @property $cantidad
 * @property $cotizacion1
 * @property $cotizacion2
 * @property $cotizacion3
 * @property $created_at
 * @property $updated_at
 *
 * @property Requisicione[] $requisiciones
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Partida extends Model
{
    
    static $rules = [
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['producto','tipo','cantidad','cotizacion1','cotizacion2','cotizacion3'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function requisiciones()
    {
        return $this->hasMany('App\Models\Requisicione', 'partidas_id', 'id','producto');
    }
    

}
