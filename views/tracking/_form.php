<?php

use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;
use yii\helpers\ArrayHelper;
use kartik\widgets\Select2;
use kartik\datecontrol\DateControl;
use app\models\Person;
use app\models\Category;
/* @var $this yii\web\View */
/* @var $model app\models\Tracking */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tracking-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'person_id')->widget(Select2::classname(), [
    'data' =>  ArrayHelper::map(Person::find()->all(),'id',function($model) {
        return $model->fullname();
    }),
    'options' => ['placeholder' => 'ชื่อผู้ยื่นขอ'],
    'pluginOptions' => [
        'allowClear' => true,
    ],
]); ?>

    <?= $form->field($model, 'status_id')->widget(Select2::classname(), [
    'data' =>  ArrayHelper::map(Category::find()->all(),'id','name'),
    'options' => ['placeholder' => 'สถานะ'],
    'pluginOptions' => [
        'allowClear' => true,
    ],
]); ?>

    <?= $form->field($model, 'approve')->textInput() ?>

    <?= $form->field($model, 'approve_result_date')->textInput() ?>

    <?= $form->field($model, 'tracking')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
