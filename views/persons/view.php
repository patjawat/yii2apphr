<?php

use yii\helpers\Html;
use yii\helpers\Url;
use kartik\detail\DetailView;
use app\models\Category;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model app\models\Persons */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Persons', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);

$attributes = [
    [
        'group' => true,
        'label' => 'SECTION 1: Identification Information',
        'rowOptions' => ['class' => 'table-info'],
    ],
    [
        'columns' => [
            [
                'attribute' => 'id',
                'label' => 'Book #',
                'displayOnly' => false,
                'valueColOptions' => ['style' => 'width:30%'],
            ],
        ],
        'columns' => [
            [
                'attribute' => 'position',
                'format' => 'raw',
                'value' => Html::a('John Steinbeck', '#', [
                    'class' => 'kv-author-link',
                ]),
                'type' => DetailView::INPUT_SELECT2,
                'widgetOptions' => [
                    'data' => ArrayHelper::map(
                        Category::find()
                            ->orderBy('name')
                            ->asArray()
                            ->all(),
                        'id',
                        'name'
                    ),
                    'options' => ['placeholder' => 'Select ...'],
                    'pluginOptions' => ['allowClear' => true],
                ],
                'inputWidth' => '40%',
            ],
        ],
    ],
];
?>
<div class="persons-view">

    <p>
        <?= Html::a(
            'Update',
            ['update', 'id' => $model->id],
            ['class' => 'btn btn-primary']
        ) ?>
        <?= Html::a(
            'Delete',
            ['delete', 'id' => $model->id],
            [
                'class' => 'btn btn-danger',
                'data' => [
                    'confirm' => 'Are you sure you want to delete this item?',
                    'method' => 'post',
                ],
            ]
        ) ?>
    </p>

    <?php echo DetailView::widget([
        'model' => $model,
        'attributes' => $attributes,
        // 'mode' => 'view',
        'mode' => 'edit',
        'enableEditMode' => true,
        'bordered' => true,
        'striped' => true,
        'condensed' => true,
        'responsive' => true,
        'hover' => true,
        'hAlign' => true,
        'vAlign' => true,
        'fadeDelay' => true,
        'panel' => [
            'type' => 'primary',
            'heading' => 'Contratto' . ' : ' . $model->id . ' ' . $model->fname,
        ],
        // 'panel' => [
        //     'type' => $panelType,
        //     'heading' => $panelHeading,
        //     'footer' => '<div class="text-center text-muted">This is a sample footer message for the detail view.</div>'
        // ],
        'deleteOptions' => [
            // your ajax delete parameters
            'params' => ['id' => 1000, 'kvdelete' => true],
        ],
        'container' => ['id' => 'kv-demo'],
        'formOptions' => ['action' => Url::current(['#' => 'kv-demo'])], // your action to delete
    ]);
//  DetailView::widget([
//     'model' => $model,
//     'attributes' => [
//         'fname',
//         'lname',
//         'organization',
//         'position',
//         'study',
//     ],
// ])
?>


<div class="card card-primary card-outline card-outline-tabs">
<div class="card-header p-0 border-bottom-0">
<ul class="nav nav-tabs" id="custom-tabs-four-tab" role="tablist">
<li class="nav-item">
<a class="nav-link active" id="custom-tabs-four-home-tab" data-toggle="pill" href="#custom-tabs-four-home" role="tab" aria-controls="custom-tabs-four-home" aria-selected="true">กระบวนการ</a>
</li>
<li class="nav-item">
<a class="nav-link" id="custom-tabs-four-profile-tab" data-toggle="pill" href="#custom-tabs-four-profile" role="tab" aria-controls="custom-tabs-four-profile" aria-selected="false">Profile</a>
</li>
</ul>
</div>
<div class="card-body">
<div class="tab-content" id="custom-tabs-four-tabContent">
<div class="tab-pane fade active show" id="custom-tabs-four-home" role="tabpanel" aria-labelledby="custom-tabs-four-home-tab">
xx
</div>
<div class="tab-pane fade" id="custom-tabs-four-profile" role="tabpanel" aria-labelledby="custom-tabs-four-profile-tab">
Mauris tincidunt mi at erat gravida, eget tristique urna bibendum. Mauris pharetra purus ut ligula tempor, et vulputate metus facilisis. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Maecenas sollicitudin, nisi a luctus interdum, nisl ligula placerat mi, quis posuere purus ligula eu lectus. Donec nunc tellus, elementum sit amet ultricies at, posuere nec nunc. Nunc euismod pellentesque diam.
</div>

</div>
</div>

</div>

</div>
