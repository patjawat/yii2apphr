<?php
/* @var $this yii\web\View */
?>

<?php foreach($dataProvider->getModels() as $model):?>

<div class="card card-widget collapsed-card shadow-lg">
    <div class="card-header">
        <div class="user-block">
            <img class="img-circle" src="https://adminlte.io/themes/v3/dist/img/user1-128x128.jpg" alt="User Image">
            <span class="username"><a href="#">Jonathan Burke Jr.</a></span>
            <span class="description">Shared publicly - 7:30 PM Today</span>
        </div>

        <div class="card-tools">
            <button type="button" class="btn btn-tool" title="Mark as read">
                <i class="far fa-circle"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="collapse">
                <i class="fas fa-plus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove">
                <i class="fas fa-times"></i>
            </button>
        </div>

    </div>

    <div class="card-body" style="display: none;">


    </div>

    <div class="card-footer card-comments" style="display: none;">
        

    </div>

    <div class="card-footer" style="display: none;">

    </div>

</div>
<?php endforeach; ?>
