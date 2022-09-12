<?php
    return [
        'user' => [
            'username' => 'admin',
            'email' => 'admin@admin.com',
            'status' => 10,
            'auth_key' => Yii::$app->getSecurity()->generateRandomString(),
            'password_hash' => Yii::$app->getSecurity()->generatePasswordHash('admin'),
            'created_at' => (new DateTimeImmutable)->getTimestamp(),
            'updated_at' => (new DateTimeImmutable)->getTimestamp(),
        ],
    ];
