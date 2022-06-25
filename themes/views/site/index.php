<?php
use yii\helpers\Html;
$this->title = '<i class="fas fa-tachometer-alt"></i> Dashboard';
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
        <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box">
                <span class="info-box-icon bg-info elevation-1"><i class="fas fa-cog"></i></span>
                <div class="info-box-content">
                    <span class="info-box-text">ผู้ขอกำหนดตำแหน่ง(ยื่นขอ)</span>
                    <span class="info-box-number">
                        75
                    </span>
                </div>

            </div>

        </div>

        <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
                <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-thumbs-up"></i></span>
                <div class="info-box-content">
                    <span class="info-box-text">สภามหาวิทยาลัยอนุมัติ</span>
                    <span class="info-box-number">75</span>
                </div>

            </div>

        </div>


        <div class="clearfix hidden-md-up"></div>
        <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
                <span class="info-box-icon bg-success elevation-1"><i class="fas fa-shopping-cart"></i></span>
                <div class="info-box-content">
                    <span class="info-box-text">ส่ง อว. ตรวจสอบ</span>
                    <span class="info-box-number">7</span>
                </div>

            </div>

        </div>

        <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
                <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-users"></i></span>
                <div class="info-box-content">
                    <span class="info-box-text">อว.ตรวจสอบผ่าน</span>
                    <span class="info-box-number">20</span>
                </div>

            </div>

        </div>

    </div>


    <div class="row">
        <div class="col-8">
            <?php echo Highcharts::widget([
                'options' => [
                    'chart' => [
                        'type' => 'column',
                    ],
                    'title' => ['text' => 'สถิติแบ่งตามคณะ'],
                    'xAxis' => [
                        'categories' => [
                            'คณะแพทยศาสตร์',
                            'คณะมนุษยศาสตร์และสังคมศาสตร์',
                            'คณะวิศวกรรมศาสตร์',
                            'คณะศิลปกรรมศาสตร์',
                            'คณะวิทยาศาสตร์',
                            'คณะเทคโนโลยี',
                            'คณะเภสัชศาสตร์',
                            'คณะเกษตรศาสตร์',
                        ],
                    ],
                    'yAxis' => [
                        'title' => ['text' => 'Fruit eaten'],
                    ],
                    'series' => [
                        ['name' => 'คน', 'data' => [5, 17, 3, 5, 10, 4, 4, 2]],
                    ],
                ],
            ]); ?>
        </div>
        <div class="col-md-4">
            <p class="text-center">
                <strong>สถานะการขอยื่น</strong>
            </p>
            <div class="progress-group">
                ผู้ขอกำหนดตำแหน่ง(ยื่นขอ)
                <span class="float-right"><b>75</b>/75</span>
                <div class="progress progress-sm">
                    <div class="progress-bar bg-primary" style="width: 80%"></div>
                </div>
            </div>

            <div class="progress-group">
                สภามหาวิทยาลัยอนุมัติ
                <span class="float-right"><b>75</b>/75</span>
                <div class="progress progress-sm">
                    <div class="progress-bar bg-danger" style="width: 75%"></div>
                </div>
            </div>

            <div class="progress-group">
                <span class="progress-text">ส่ง อว. ตรวจสอบ</span>
                <span class="float-right"><b>33</b>/75</span>
                <div class="progress progress-sm">
                    <div class="progress-bar bg-success" style="width: 60%"></div>
                </div>
            </div>

            <div class="progress-group">
                อว.ตรวจสอบผ่าน
                <span class="float-right"><b>42</b>/75</span>
                <div class="progress progress-sm">
                    <div class="progress-bar bg-warning" style="width: 50%"></div>
                </div>
            </div>

        </div>
    </div>
</div>

<?=$this->render('person');?>