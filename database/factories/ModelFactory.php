<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

$factory->define(\App\Entities\Pessoa::class, function (Faker\Generator $faker) {

    return [
        'nomePessoa' => $faker->name,
        'emailPessoa' => $faker->safeEmail,
        'senhaPessoa' => bcrypt(str_random(10)),
        'statusPessoa' => $faker->boolean()
    ];
});
