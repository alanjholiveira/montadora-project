<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(Model\Company::class, function (Faker $faker) {

    $faker->addProvider(new \Faker\Provider\pt_BR\Address($faker));
    $faker->addProvider(new \Faker\Provider\pt_BR\Company($faker));
    $faker->addProvider(new \Faker\Provider\pt_BR\PhoneNumber($faker));

    return [
        'matrix' => false,
        'name' => $faker->company,
        'fantasy' => $faker->name,
        'cnpj' => $faker->cnpj(false),
        'ie' => $faker->randomNumber(),
        'address' => $faker->address,
        'zip_code' => $faker->randomNumber(),
        'city' => $faker->city,
        'state' => $faker->state,
        'country' => $faker->country,
        'phone' => $faker->phoneNumber,
        'email' => $faker->unique()->companyEmail,
        'responsible' => $faker->name
    ];
});
