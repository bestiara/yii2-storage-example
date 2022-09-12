<?php

declare(strict_types=1);

namespace backend\models;

use yii\db\ActiveRecord;

/**
 * Устройство
 *
 * @author Dmitry Nikolsky
 *
 * @property integer $id
 * @property string $serial
 * @property integer $store_id
 * @property integer $created_at
 */
class Device extends ActiveRecord
{
}
