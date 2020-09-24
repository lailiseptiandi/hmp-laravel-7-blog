<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Anggota;
use App\Models\Jabatan;
use Faker\Generator as Faker;

$factory->define(Anggota::class, function (Faker $faker) {
    return [
        //
        'nama' => $faker->unique()->name,
        'slug' => $faker->unique()->name,
        'alamat' => $faker->unique()->address,
        'gambar' => $faker->unique()->name,
        'angkatan' => $faker->numberBetween(2018, 2020),
        'jabatan_id' => function () {
            return Jabatan::all()->random();
        }
    ];
});
