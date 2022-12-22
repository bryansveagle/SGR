<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Proveedore
 *
 * @property $id
 * @property $proveedor
 * @property $razonSocial
 * @property $condicionesPago
 * @property $moneda
 * @property $fechaAlta
 * @property $fechaBaja
 * @property $created_at
 * @property $updated_at
 *
 * @property Cotizacione[] $cotizaciones
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Proveedore extends Model
{
    
    static $rules = [
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['proveedor','razonSocial','condicionesPago','moneda','fechaAlta','fechaBaja'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function cotizaciones()
    {
        return $this->hasMany('App\Models\Cotizacione', 'proveedores_id', 'id');
    }
    

}
