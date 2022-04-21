<?php
$this->title = 'Starter Page';
use miloschuman\highcharts\Highcharts;
$this->params['breadcrumbs'] = [['label' => $this->title]];
?>
<div class="container-fluid">


<div class="row">
        <div class="col-lg-4 col-md-6 col-sm-6 col-12">
            <?= \hail812\adminlte\widgets\SmallBox::widget([
                'title' => '150',
                'text' => 'New Orders',
                'icon' => 'fas fa-shopping-cart',
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
        <div class="col-lg-4 col-md-6 col-sm-6 col-12">
            <?= \hail812\adminlte\widgets\SmallBox::widget([
                'title' => '44',
                'text' => 'User Registrations',
                'icon' => 'fas fa-user-plus',
                'theme' => 'gradient-success',
                'loadingStyle' => true
            ]) ?>
        </div>
    </div>
   
    <div class="row">
<div class="col-lg-8 col-md-8 col-sm-8">
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
    </div>
</div>