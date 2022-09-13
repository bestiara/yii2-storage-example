<?php

use backend\models\Store;
use yii\bootstrap5\Modal;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var backend\models\SearchStore $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = Yii::t('app', 'Stores');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="store-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Create Store'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?php
      Modal::begin(['id' =>'modal']);
      Modal::end();
    ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            [
                'header' => 'Name',
                'attribute' => 'name',
                'value' => static function($data) {
                    return  Html::a(Yii::t('app', $data->name, [
                        'modelClass' => $data->name,
                    ]), ['store/devices', 'SearchDevice' => ['store_id' => $data->id]], ['class' => 'popupModal']);
                },
                'format' => 'raw'
            ],

            ['attribute' => 'created_at', 'format' => ['date', 'php:d.m.Y H:i:s']],

            [
                'class' => ActionColumn::class,
                'urlCreator' => static function ($action, Store $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 }
            ],
        ],
    ]) ?>

  <?php
    $this->registerJs(
      "$(function() {
         $('.popupModal').click(function(e) {
           e.preventDefault();
           $('#modal').modal('show').find('.modal-content').load($(this).attr('href'));
         });
      });"
    );
  ?>

</div>
