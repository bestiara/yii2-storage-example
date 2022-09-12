<?php

declare(strict_types=1);

namespace common\fixtures;

use yii\test\ActiveFixture;

/**
 * @author Dmitry Nikolsky
 */
class DeviceFixture extends ActiveFixture
{
    public $modelClass = 'backend\models\Device';
    public $depends = ['common\fixtures\StoreFixture'];
}
