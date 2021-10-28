<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Cita;
use Faker\Generator as Faker;

$factory->define(Cita::class, function (Faker $faker) {

    return [
        'id_paciente' => $faker->word,
        'fecha_cita' => $faker->word,
        'id_doctor' => $faker->word
    ];
});
