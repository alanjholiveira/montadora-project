<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\Model\Company;
use App\Model\Employee;
use Faker\Generator as Faker;

$factory->define(Employee::class, function (Faker $faker) {

    $faker->addProvider(new \Faker\Provider\pt_BR\Address($faker));
    $faker->addProvider(new \Faker\Provider\pt_BR\Person($faker));
    $faker->addProvider(new \Faker\Provider\pt_BR\PhoneNumber($faker));

    return [
        'company_id' => factory(Company::class),
        'name' => $faker->name,
        'date_birth' => $faker->date(),
        'gender' => $faker->randomElement(['M','F']),
        'cpf' => $faker->cpf(false),
        'occupation' => $faker->jobTitle,
        'salary' => $faker->randomFloat(5, 0, 20),
        'address' => $faker->address,
        'zip_code' => $faker->randomNumber(8),
        'city' => $faker->city,
        'state' => $faker->state,
        'country' => $faker->country,
        'phone' => $faker->phoneNumber,
        'email' => $faker->email,
        'password' => '123456789'
    ];
});
