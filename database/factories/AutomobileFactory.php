<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model\Automobile;
use App\Model\Category;
use App\Model\Company;
use Faker\Generator as Faker;

$factory->define(Automobile::class, function (Faker $faker) {

    $faker->addProvider(new \Faker\Provider\Fakecar($faker));
    $v = $faker->vehicleArray();

    return [
        'cat_id' => factory(Category::class),
        'company_id' => factory(Company::class),
        'name' => $faker->vehicle,
        'year' => $faker->biasedNumberBetween(1998,2017, 'sqrt'),
        'model' => $v['model'],
        'color' => $faker->colorName,
        'chassis_number' => $faker->randomAscii
    ];
});
