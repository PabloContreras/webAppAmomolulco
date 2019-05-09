<?php

use Faker\Generator as Faker;

$factory->define(App\constancies::class, function (Faker $faker) {
    return [
        'nombre' => $faker->firstName,
        'ap_p' => $faker->lastName,
        'ap_m' => $faker->lastName,        
        'domicilio' => $faker->streetAddress,
        'tiempo_habitado' => $faker->dateTimeBetween($startDate = '-80 years', $endDate = '-15 years', $timezone = null),
        'clave_ine' => $faker->text($maxNbChars = 200),
        'correo_electronico' => $faker->unique()->safeEmail,
        'telefono' => $faker->phoneNumber,
    ];
});
