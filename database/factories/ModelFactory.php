<?php
use Faker\Generator as Faker;

$factory->define(
    Modules\FichePersonnelle\Entities\FichePersonnelleModel::class,
    function (Faker $faker) {

        return [
            'titre'       => $faker->title,
            'description' => $faker->text,
            'resume'      => $faker->text,
            'date_du'     => $faker->dateTime,
        ];
    }
);
