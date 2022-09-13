<?php

declare(strict_types=1);

namespace backend\models;

use yii\behaviors\TimestampBehavior;
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
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'device';
    }

    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            [
                'class' => TimestampBehavior::class,
                'createdAtAttribute' => 'created_at',
                'updatedAtAttribute' => false,
            ]
        ];
    }
}
