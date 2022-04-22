<?php
$this->title = 'Starter Page';
use miloschuman\highcharts\Highcharts;
$this->params['breadcrumbs'] = [['label' => $this->title]];
?>
<style>
    .small-box {
    border-radius: 1.2rem;
    box-shadow: 0 0 1px rgb(0 0 0 / 13%), 0 1px 3px rgb(0 0 0 / 20%);
    display: block;
    margin-bottom: 20px;
    position: relative;
}
</style>
<div class="container-fluid">


    <div class="row">
        <div class="col-lg-4 col-md-6 col-sm-6 col-12">
            <?= \hail812\adminlte\widgets\SmallBox::widget([
                'title' => '150',
                'text' => 'ยื่นขอทั้งหมด',
                'icon' => 'fas fa-shopping-cart',
            ]) ?>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-6 col-12">
            <?= \hail812\adminlte\widgets\SmallBox::widget([
                'title' => '150',
                'text' => 'ขอทบทวน',
                'icon' => 'fas fa-shopping-cart',
                'theme' =>'warning'
            ]) ?>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-6 col-12">
            <?php $smallBox = \hail812\adminlte\widgets\SmallBox::begin([
                'title' => '150',
                'text' => 'New Orders',
                'icon' => 'fas fa-shopping-cart',
                'theme' => 'success'
            ]) ?>
            <?= \hail812\adminlte\widgets\Ribbon::widget([
                'id' => $smallBox->id.'-ribbon',
                'text' => 'Ribbon',
                'theme' => 'warning',
                'size' => 'lg',
                'textSize' => 'lg'
            ]) ?>
            <?php \hail812\adminlte\widgets\SmallBox::end() ?>
        </div>

    </div>

    <div class="row">
        <div class="col-8">
            <?php
echo Highcharts::widget([
    'options' => [
        'chart'=>[
            'type'=>'column'
         ],
       'title' => ['text' => 'Fruit Consumption'],
       'xAxis' => [
          'categories' => ['ขั้นที่ 1', 'ขั้นที่ 2', 'ขั้นที่ 3','ขั้นที่ 4','ขั้นที่ 5','ขั้นที่ 6','ขั้นที่ 7','ขั้นที่ 8'],
       ],
       'yAxis' => [
          'title' => ['text' => 'Fruit eaten']
       ],
       'series' => [
          ['name' => 'John', 'data' => [5, 17, 3,5,10,4,4,2]]
       ]
    ]
 ]);
?>
        </div>
        <div class="col-4">
        <?= \hail812\adminlte\widgets\InfoBox::widget([
                'text' => 'เอกฉันท์',
                'number' => '410',
                 'theme' => 'success',
                'icon' => 'far fa-flag',
            ]) ?>
            <?= \hail812\adminlte\widgets\InfoBox::widget([
                'text' => 'เอกฉันท์',
                'number' => '410',
                 'theme' => 'success',
                'icon' => 'far fa-flag',
            ]) ?>
        </div>
    </div>
</div>