<?php

use backend\models\Device;
use backend\models\Store;
use kartik\select2\Select2;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use kartik\grid\GridView;

/** @var yii\web\View $this */
/** @var backend\models\SearchDevice $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = Yii::t('app', 'Devices');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="device-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Create Device'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'serial',
            [
                'attribute' => 'store_id',
                'label' => 'Store',
                'format' => 'text',
                'value' => static function($model) {
                    return $model->store->name;
                },
                'filter' =>  Select2::widget([
                    'model' => $searchModel,
                    'attribute' => 'store_id',
                    'data' => ArrayHelper::map(Store::find()->asArray()->all(), 'id', 'name'),
                    'value' => 'store.name',
                    'options' => [
                        'class' => 'form-control',
                        'placeholder' => 'Choose store'
                    ],
                    'pluginOptions' => [
                        'allowClear' => true,
                        'selectOnClose' => true,
                    ]
                ])
            ],
            [
              'attribute' => 'created_at',
              'format' => ['date', 'php:d.m.Y H:i:s']
            ],

            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Device $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 }
            ],
        ],
    ]); ?>


</div>
