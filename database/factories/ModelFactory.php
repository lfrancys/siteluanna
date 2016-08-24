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



$factory->define(\App\Entities\Produto::class, function (Faker\Generator $faker) {

    $categorias = \App\Entities\Categoria::all();

    return [
        'idCategoria' => $categorias[random_int(0, (count($categorias)-1))]->id,
        'nomeProduto' => $faker->name,
        'fotoProduto' => $faker->name.'.'.$faker->fileExtension,
        'precoProduto' => $faker->randomFloat(2,0,100),
        'estoqueProduto' => $faker->boolean(),
        'destaqueProduto' => $faker->boolean()
    ];
});
