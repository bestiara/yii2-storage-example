<?php

$faker = Faker\Factory::create();

$stores = [];

for ($i = 1; $i <= 10; $i++) {
    $stores['store' . $i] = [
        'name' => $faker->name,
        'created_at' => (new DateTimeImmutable)->getTimestamp(),
    ];
}

return $stores;
