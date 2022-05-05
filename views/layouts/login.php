<?php

/**
 * Theme login
 */
use app\assets\AppAsset;

use yii\helpers\Html;
AppAsset::register($this);
// $this->registerCssFile('https://fonts.googleapis.com/css2?family=Prompt:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">

    <head>
        <meta charset="<?= Yii::$app->charset ?>">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" href="./img/medico.ico" type="image/x-icon" />
        <link rel="shortcut icon" href="./img/medico.ico" type="image/x-icon" />
        <!-- <link href="https://fonts.googleapis.com/css?family=Kanit" rel="stylesheet"> -->
        <?= Html::csrfMetaTags() ?>
        <title><?= Html::encode($this->title) ?>:TCDS</title>
        <?php $this->head() ?>
    </head>

    <body class="login-page" style="min-height: 512.391px;">
        <?php $this->beginBody() ?>




        <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth px-0">
          <?= $content ?>
      </div>
      <!-- content-wrapper ends -->
    </div>



        <?php $this->endBody() ?>
    </body>
</html>
<?php $this->endPage() ?>