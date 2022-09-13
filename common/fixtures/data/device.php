<?php

use backend\models\Store;

$faker = Faker\Factory::create();
$stores = Store::find()->all();
$devices = [];

for ($i = 1; $i <= 100; $i++) {
    $devices['device' . $i] = [
        'serial' => $faker->uuid,
        'store_id' => $faker->randomElement($stores)->id,
        'created_at' => (new DateTimeImmutable)->getTimestamp(),
    ];
}

return $devices;
