<?php

use backend\models\Store;

return [
    'device1' => [
        'serial' => 'NS1234567890',
        'store_id' => Store::findOne(['name' => 'Северный'])->id,
        'created_at' => (new DateTimeImmutable)->getTimestamp(),
    ],
    'device2' => [
        'serial' => 'SS1234567890',
        'store_id' => Store::findOne(['name' => 'Южный'])->id,
        'created_at' => (new DateTimeImmutable)->getTimestamp(),
    ],
];
