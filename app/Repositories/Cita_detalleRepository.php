<?php

namespace App\Repositories;

use App\Models\Cita_detalle;
use App\Repositories\BaseRepository;

/**
 * Class Cita_detalleRepository
 * @package App\Repositories
 * @version October 28, 2021, 12:40 am UTC
*/

class Cita_detalleRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id_cita'
    ];

    /**
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Cita_detalle::class;
    }
}
