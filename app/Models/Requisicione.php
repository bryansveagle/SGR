<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Requisicione
 *
 * @property $id
 * @property $partidas_id
 * @property $users_id
 * @property $concepto
 * @property $urgencia
 * @property $fechaCreacion
 * @property $status
 * @property $fechaRechazo
 * @property $motivoRechazo
 * @property $comentarios
 * @property $created_at
 * @property $updated_at
 *
 * @property Cotizacione[] $cotizaciones
 * @property Partida $partida
 * @property User $user
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Requisicione extends Model
{
    
    static $rules = [
		'partidas_id' => 'required',
		'users_id' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['partidas_id','users_id','concepto','urgencia','fechaCreacion','status','motivoRechazo','fechaRechazo','comentarios'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function cotizaciones()
    {
        return $this->hasMany('App\Models\Cotizacione', 'requisiciones_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function partida()
    {
        return $this->hasOne('App\Models\Partida', 'id', 'partidas_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function user()
    {
        return $this->hasOne('App\Models\User', 'id', 'users_id');
    }
    

}
