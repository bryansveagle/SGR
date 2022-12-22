<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Cotizacione
 *
 * @property $id
 * @property $proveedores_id
 * @property $requisiciones_id
 * @property $producto
 * @property $urgencia
 * @property $fechaCreacion
 * @property $status
 * @property $motivoRechazo
 * @property $fechaRechazo
 * @property $comentarios
 * @property $created_at
 * @property $updated_at
 *
 * @property Proveedore $proveedore
 * @property Requisicione $requisicione
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Cotizacione extends Model
{
    
    static $rules = [
		'proveedores_id' => 'required',
		'requisiciones_id' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['proveedores_id','requisiciones_id','producto','urgencia','fechaCreacion','status','motivoRechazo','fechaRechazo','comentarios'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function proveedore()
    {
        return $this->hasOne('App\Models\Proveedore', 'id', 'proveedores_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function requisicione()
    {
        return $this->hasOne('App\Models\Requisicione', 'id', 'requisiciones_id');
    }
    

}
