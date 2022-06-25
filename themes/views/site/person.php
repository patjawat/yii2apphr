
<?php 
use yii\helpers\Html;
use app\models\Person;
?>
<div class="row mt-3">
    <div class="col-12">
        <div class="card">
            <div class="card-header border-transparent">
                <h3 class="card-title"><i class="fas fa-list"></i> รายชื่อล่าสุด</h3>
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
                                <th>ชื่อ-สกุล</th>
                                <th>สถานะ</th>
                                <th>คณะ</th>
                                <th>ดำเนินการ</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach (Person::find()->limit(5)->all() as $model): ?>
                            <tr>
                                <td><?=$model->Fullname()?></td>
                                <td><?=$this->render('@app/views/person/progress',['model' => $model])?></td>
                                <td><?=$model->org->name;?></td>
                                <td>
                                 <?=Html::a('<i class="fas fa-eye"></i> เพิ่มเติม..',['/person/view','id' => $model->id],['class' => 'btn btn-sm btn-warning']);?>
                                </td>
                            </tr>
                            <?php endforeach; ?>
                           
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
            'แสดงทั้งหมด',
            ['/person'],
            ['class' => 'btn btn-sm btn-secondary float-right']
        ) ?>

            </div>

        </div>

    </div>
</div>