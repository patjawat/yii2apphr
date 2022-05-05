<?php

namespace app\controllers;
use Yii;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\Response;

use app\models\Person;
use app\models\PersonSearch;

class LiffController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $this->layout = 'line';
        $searchModel = new PersonSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

}
