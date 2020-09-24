<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\Models\Jabatan;
use Faker\Generator as Faker;

$factory->define(Jabatan::class, function (Faker $faker) {
    return [
        // 'nama_jabatan' => $faker->unique()->name
        'nama_jabatan' => $faker->unique()->name
    ];
});
