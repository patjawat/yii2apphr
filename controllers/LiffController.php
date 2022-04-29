<?php

namespace app\controllers;

class LiffController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $this->layout = 'line';
        return $this->render('index');
    }

}
