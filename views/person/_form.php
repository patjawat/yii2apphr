<?php

use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;
use yii\helpers\ArrayHelper;
use kartik\widgets\Select2;
use kartik\datecontrol\DateControl;
use app\models\Category;
use app\models\Prefix;
$optiondate = ['type' => DateControl::FORMAT_DATE,'language' => 'th',];

/* @var $this yii\web\View */
/* @var $model app\models\Person */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="person-form">

    <?php $form = ActiveForm::begin(); ?>

    <?=
$form->field($model, 'prefix')->widget(Select2::classname(), [
    'data' =>  ArrayHelper::map(Prefix::find()->all(),'id','name'),
    'options' => ['placeholder' => 'คำนำหน้า'],
    'pluginOptions' => [
        'allowClear' => true,
    ],
]);
?>

    <?= $form->field($model, 'fname')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'lname')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'meetting_date')->widget(DateControl::classname(), $optiondate)->label(true)?>


    <?=
$form->field($model, 'organization')->widget(Select2::classname(), [
    'data' =>  ArrayHelper::map(Category::find()->where(['category_type' => 1])->all(),'id','name'),
    'options' => ['placeholder' => 'ท่าวัดความดันโลหิต'],
    'pluginOptions' => [
        'allowClear' => true,
    ],

]);
?>

<?=
$form->field($model, 'req_position')->widget(Select2::classname(), [
    'data' =>  ArrayHelper::map(Category::find()->where(['category_type' => 2])->all(),'id','name'),
    'options' => ['placeholder' => 'ท่าวัดความดันโลหิต'],
    'pluginOptions' => [
        'allowClear' => true,
    ],

]);
?>
<?=
$form->field($model, 'study')->widget(Select2::classname(), [
    'data' =>  ArrayHelper::map(Category::find()->where(['category_type' => 3])->all(),'id','name'),
    'options' => ['placeholder' => 'ท่าวัดความดันโลหิต'],
    'pluginOptions' => [
        'allowClear' => true,
    ],

]);
?>

    <?= $form->field($model, 'author')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'step')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
