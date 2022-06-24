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
                        10
                        <small>%</small>
                    </span>
                </div>

            </div>

        </div>

        <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
                <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-thumbs-up"></i></span>
                <div class="info-box-content">
                    <span class="info-box-text">สภามหาวิทยาลัยอนุมัติ</span>
                    <span class="info-box-number">41,410</span>
                </div>

            </div>

        </div>


        <div class="clearfix hidden-md-up"></div>
        <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
                <span class="info-box-icon bg-success elevation-1"><i class="fas fa-shopping-cart"></i></span>
                <div class="info-box-content">
                    <span class="info-box-text">ส่ง อว. ตรวจสอบ</span>
                    <span class="info-box-number">760</span>
                </div>

            </div>

        </div>

        <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
                <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-users"></i></span>
                <div class="info-box-content">
                    <span class="info-box-text">อว.ตรวจสอบผ่าน</span>
                    <span class="info-box-number">2,000</span>
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
                <span class="float-right"><b>160</b>/200</span>
                <div class="progress progress-sm">
                    <div class="progress-bar bg-primary" style="width: 80%"></div>
                </div>
            </div>

            <div class="progress-group">
                สภามหาวิทยาลัยอนุมัติ
                <span class="float-right"><b>310</b>/400</span>
                <div class="progress progress-sm">
                    <div class="progress-bar bg-danger" style="width: 75%"></div>
                </div>
            </div>

            <div class="progress-group">
                <span class="progress-text">ส่ง อว. ตรวจสอบ</span>
                <span class="float-right"><b>480</b>/800</span>
                <div class="progress progress-sm">
                    <div class="progress-bar bg-success" style="width: 60%"></div>
                </div>
            </div>

            <div class="progress-group">
                อว.ตรวจสอบผ่าน
                <span class="float-right"><b>250</b>/500</span>
                <div class="progress progress-sm">
                    <div class="progress-bar bg-warning" style="width: 50%"></div>
                </div>
            </div>

        </div>
    </div>
</div>


<div class="row mt-3">
    <div class="col-12">



        <div class="card">
            <div class="card-header border-transparent">
                <h3 class="card-title">รายชื่อล่าสุด</h3>
                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                        <i class="fas fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-tool" data-card-widget="remove">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
            </div>

            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table m-0">
                        <thead>
                            <tr>
                                <th>Order ID</th>
                                <th>Item</th>
                                <th>Status</th>
                                <th>Popularity</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><a href="pages/examples/invoice.html">OR9842</a></td>
                                <td>Call of Duty IV</td>
                                <td><span class="badge badge-success">Shipped</span></td>
                                <td>
                                    <div class="sparkbar" data-color="#00a65a" data-height="20">90,80,90,-70,61,-83,63
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td><a href="pages/examples/invoice.html">OR1848</a></td>
                                <td>Samsung Smart TV</td>
                                <td><span class="badge badge-warning">Pending</span></td>
                                <td>
                                    <div class="sparkbar" data-color="#f39c12" data-height="20">90,80,-90,70,61,-83,68
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td><a href="pages/examples/invoice.html">OR7429</a></td>
                                <td>iPhone 6 Plus</td>
                                <td><span class="badge badge-danger">Delivered</span></td>
                                <td>
                                    <div class="sparkbar" data-color="#f56954" data-height="20">90,-80,90,70,-61,83,63
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td><a href="pages/examples/invoice.html">OR7429</a></td>
                                <td>Samsung Smart TV</td>
                                <td><span class="badge badge-info">Processing</span></td>
                                <td>
                                    <div class="sparkbar" data-color="#00c0ef" data-height="20">90,80,-90,70,-61,83,63
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td><a href="pages/examples/invoice.html">OR1848</a></td>
                                <td>Samsung Smart TV</td>
                                <td><span class="badge badge-warning">Pending</span></td>
                                <td>
                                    <div class="sparkbar" data-color="#f39c12" data-height="20">90,80,-90,70,61,-83,68
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td><a href="pages/examples/invoice.html">OR7429</a></td>
                                <td>iPhone 6 Plus</td>
                                <td><span class="badge badge-danger">Delivered</span></td>
                                <td>
                                    <div class="sparkbar" data-color="#f56954" data-height="20">90,-80,90,70,-61,83,63
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td><a href="pages/examples/invoice.html">OR9842</a></td>
                                <td>Call of Duty IV</td>
                                <td><span class="badge badge-success">Shipped</span></td>
                                <td>
                                    <div class="sparkbar" data-color="#00a65a" data-height="20">90,80,90,-70,61,-83,63
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

            </div>

            <div class="card-footer clearfix">
            <?= Html::a(
            '<i class="fas fa-user-plus"></i> เพิ่มใหม่',
            ['/person/create'],
            ['class' => 'btn btn-sm btn-info float-left show']
        ) ?>
                    <?= Html::a(
            'View All',
            ['/person'],
            ['class' => 'btn btn-sm btn-secondary float-right']
        ) ?>

            </div>

        </div>

    </div>
</div>