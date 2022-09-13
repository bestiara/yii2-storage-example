<?php

declare(strict_types=1);

namespace backend\models;

use yii\behaviors\TimestampBehavior;
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
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'store';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
        ];
    }

    public function getDevices()
    {
        return $this->hasMany(Device::class, ['store_id' => 'id']);
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
