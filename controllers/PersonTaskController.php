<?php

namespace app\controllers;

use Yii;
use yii\web\Response;
use app\models\PersonTask;
use app\models\PersonTaskSearch;
use app\models\Person;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * PersonTaskController implements the CRUD actions for PersonTask model.
 */
class PersonTaskController extends Controller
{
    /**
     * @inheritDoc
     */
    public function behaviors()
    {
        return array_merge(
            parent::behaviors(),
            [
                'verbs' => [
                    'class' => VerbFilter::className(),
                    'actions' => [
                        'delete' => ['POST'],
                    ],
                ],
            ]
        );
    }

    /**
     * Lists all PersonTask models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new PersonTaskSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    public function actionList()
    {
        $id = $this->request->get('id');
        Yii::$app->response->format = Response::FORMAT_JSON;
        $searchModel = new PersonTaskSearch([
            'person_id' => $id
        ]);
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->renderAjax('list', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single PersonTask model.
     * @param int $id ID
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new PersonTask model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $person = Person::findOne($this->request->get('id'));
        $model = new PersonTask([
            'person_id' => $person->id
        ]);

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save(false)) {
                if (Yii::$app->request->isAjax) {
                    Yii::$app->response->format = Response::FORMAT_JSON;
                    return [
                        'status' => 'succes',
                    ];
                }else {
                return $this->redirect(['/person/view', 'id' => $person->id]);
            }
            }
        } else {
            $model->loadDefaultValues();
        }

        if (Yii::$app->request->isAjax) {
            Yii::$app->response->format = Response::FORMAT_JSON;
            return [
                'title' => '<i class="fas fa-plus"></i> สร้างใหม่',
                'content' => $this->renderAjax('create', [
                'model' => $model,
                'person' => $person
                ]),
                'footer' =>''
            ];
            }else{

                return $this->render('create', [
                    'model' => $model,
                    'person' => $person
                ]);
            }  
    }

    /**
     * Updates an existing PersonTask model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $id ID
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        if (Yii::$app->request->isAjax) {
            Yii::$app->response->format = Response::FORMAT_JSON;
            return [
                'title' => '<i class="fas fa-plus"></i> แก้ไข',
                'content' => $this->renderAjax('update', [
                'model' => $model,
                ]),
                'footer' =>''
            ];
            }else{

                return $this->render('update', [
                    'model' => $model,
                ]);
            }  
    }

    /**
     * Deletes an existing PersonTask model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $id ID
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the PersonTask model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id ID
     * @return PersonTask the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = PersonTask::findOne(['id' => $id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
