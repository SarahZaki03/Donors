<?php

use App\User;
use App\Address;

use Faker\Generator as Faker;

$factory->define(Model::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'address_id' => function() {
        	return factory('App\Address')->create()->id;
        }, 
        'owner_id' => function() {
        	return factory('App\User')->create()->id;
        },
    ];
});
