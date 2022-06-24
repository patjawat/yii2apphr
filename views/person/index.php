<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use yii\widgets\Pjax;
use app\models\Person;
/* @var $this yii\web\View */
/* @var $searchModel app\models\PersonSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'รายชื่อผู้ยื่นขอ';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="person-index">

    <p>
        <?= Html::a('<i class="fas fa-user-plus"></i> เพิ่มใหม่', ['create'], ['class' => 'btn btn-success show']) ?>

    </p>

    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            [
                'attribute' => 'fullname',
                'header' => 'ชื่อ-นามสกุล',
                'value' => function ($model){
                    return $model->fullname();
                }
            ],
            [
                'header' => 'Project Progress',
                'format' => 'raw',
                'value' => function ($model){
                    return $this->render('progress',['model' => $model]);
                }
            ],
            [
                'attribute' => 'status',
                'format' => 'raw',
                'value' => function ($model){
                    return '<span class="badge badge-success">Success</span>';
                }
            ],
            'organization',

            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Person $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 }
            ],
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>


