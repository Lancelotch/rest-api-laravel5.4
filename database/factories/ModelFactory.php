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

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});

// $factory->define(App\Model\User::class, function (Faker $faker) {
//     return [
//         'name' => $faker->word,
//         'detail' => $faker->paragraph,
//         'price' => $faker->numberBetween(100,1000),
//         'stock' => $faker->randomDigit,
//         'discount'=>$faker->numberBetween(2,30)
//     ];
// });
//
// $factory->define(App\Model\User::class, function (Faker $faker) {
//     return [
//         'product_id' => function(){
//           return Product::all()->random();
//         },
//         'cusomer' => $faker->name,
//         'review' => $faker->paragraph,
//         'star' => $faker->numberBetween(0,5)
//     ];
// });
