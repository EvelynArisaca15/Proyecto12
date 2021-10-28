<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Cita_detalle
 * @package App\Models
 * @version October 28, 2021, 12:40 am UTC
 *
 * @property string $id_cita
 */
class Cita_detalle extends Model
{
    //use SoftDeletes;

    public $table = 'cita_detalle';
    protected $primarykey='idcita_detalle';
    public $tiemstamps= false;
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'id_cita'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'idcita_detalle' => 'integer',
        'id_cita' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'id_cita' => 'nullable|string|max:45'
    ];

    
}
