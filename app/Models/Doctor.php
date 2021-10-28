<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Doctor
 * @package App\Models
 * @version October 28, 2021, 12:41 am UTC
 *
 * @property string $apellidos
 * @property string $nombres
 * @property string $dni
 * @property string $especialidad
 */
class Doctor extends Model
{
    //use SoftDeletes;

    public $table = 'doctor';
    protected $primarykey='iddoctor';
    public $tiemstamps= false;
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'apellidos',
        'nombres',
        'dni',
        'especialidad'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'iddoctor' => 'integer',
        'apellidos' => 'string',
        'nombres' => 'string',
        'dni' => 'string',
        'especialidad' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'apellidos' => 'nullable|string|max:205',
        'nombres' => 'nullable|string|max:205',
        'dni' => 'nullable|string|max:45',
        'especialidad' => 'nullable|string|max:50'
    ];

    
}
