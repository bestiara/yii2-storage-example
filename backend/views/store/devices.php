<?php
/** @var yii\web\View $this */
/** @var backend\models\SearchStore $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

use kartik\grid\GridView;
use yii\helpers\Html;

?>

<?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            [
                'header' => 'Serial',
                'attribute' => 'serial',
                'value' => static function($data) {
                    return  Html::a(Yii::t('app', $data->serial, [
                        'modelClass' => $data->serial,
                    ]), ['device/index', 'SearchDevice' => ['serial' => $data->serial]], ['target' => '_blank']);
                },
                'format' => 'raw'
            ],
        ],
    ]) ?>
