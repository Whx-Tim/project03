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

$factory->define(App\User::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->safeEmail,
        'password' => bcrypt(str_random(10)),
        'remember_token' => str_random(10),
    ];
});
$factory->define(App\Information::class, function (Faker\Generator $faker){
   return [
       'title' => $faker->title,
       'content' => $faker->paragraph,
       'U_id' => 2,
   ];
});
$factory->define(App\Product::class, function (Faker\Generator $faker){
   return [
       'title' => $faker->sentence,
       'U_id' => $faker->randomDigitNotNull,
       'contacts' => $faker->name,
       'telephone' => $faker->randomDigitNotNull,
       'phone' => $faker->randomDigitNotNull,
       'email' => $faker->safeEmail,
       'QQnum' => $faker->randomNumber(9),
       'market_time' => $faker->dateTime,
       'address' => $faker->address,
       'type' => 1,
       'price' => $faker->randomDigitNotNull,
       'detail' => $faker->paragraph,
       'relationship' => 2,
   ];
});
$factory->define(App\Price::class, function(Faker\Generator $faker){
   return [
       'type' => 2,
       'name' => $faker->name,
       'price' => $faker->randomDigitNotNull,
       'unit' => '元/公斤',
       'p_id' => 3,
   ];
});
