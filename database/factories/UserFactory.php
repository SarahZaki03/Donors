<?php

use App\User;
use App\Cases;
use App\Status;
use App\Address;


use Illuminate\Support\Str;
use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(User::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'email_verified_at' => now(),
        'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        'remember_token' => Str::random(10),
    ];
});

$factory->define(Cases::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'description' => $faker->paragraph,
        'status_id' => function() {
        	return factory('App\Status')->create()->id;
        },
        'address_id' => function() {
        	return factory('App\Address')->create()->id;
        }, 
        'user_id' => function() {
        	return factory('App\User')->create()->id;
        },
        'done' => false,
    ];
});

 
$factory->define(Status::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
    ];
});


$factory->define(Address::class, function (Faker $faker) {
    return [
        'state' => $faker->state,
        'region' => $faker->cityPrefix,
        'street' => $faker->streetSuffix,
        'building' => '122',
    ];
});
