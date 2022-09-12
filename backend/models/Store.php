<?php

declare(strict_types=1);

namespace backend\models;

use yii\db\ActiveRecord;

/**
 * Склад
 *
 * @author Dmitry Nikolsky
 *
 * @property integer $id
 * @property string $name
 * @property integer $created_at
 */
class Store extends ActiveRecord
{
}
