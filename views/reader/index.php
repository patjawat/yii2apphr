<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use yii\widgets\Pjax;
use app\models\Reader;
/* @var $this yii\web\View */
/* @var $searchModel app\models\ReaderSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Reader';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="reader-index">

    <p>
        <?= Html::a('สร้างใหม่', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'prefix',
            'fullname',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Reader $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 }
            ],
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>
