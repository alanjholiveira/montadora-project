<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model\Category;
use Faker\Generator as Faker;

$factory->define(Category::class, function (Faker $faker) {

    return [
        'name'=>$faker->randomElement(['Entrada','Hatch Pequeno','Hatch Médio','Sedã Médio','Sedã Grande','SUV','Pick-Ups']),
    ];
});
