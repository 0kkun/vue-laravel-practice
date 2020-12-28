<?php

use Faker\Generator as Faker;
use App\Models\ActionTemplate;
use Carbon\Carbon;

$factory->define(ActionTemplate::class, function (Faker $faker) {
    $now = Carbon::now();
    return [
        'content' => $faker->realText($maxNbChars = 20, $indexSize = 1),
        'created_at' => $now,
        'updated_at' => $now
    ];
});
