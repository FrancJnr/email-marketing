<?php

namespace backend\controllers;

use Yii;
use app\models\GroupMail;
use app\models\EmailTemplates;
use app\models\MailingList;
use app\models\GroupMailSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * GroupMailController implements the CRUD actions for GroupMail model.
 */
class GroupMailController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public $listCount;
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all GroupMail models.
     * @return mixed
     */
  
    public function actionIndex()
    {
        $searchModel = new GroupMailSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single GroupMail model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new GroupMail model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new GroupMail();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->group_mail_id]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing GroupMail model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->group_mail_id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing GroupMail model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the GroupMail model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return GroupMail the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     * 
     * 
     */
    public function actionTest($id){
        
        $groupMail = GroupMail::findOne($id);        
           $listCount = MailingList::find()
            ->where(['mailing_group_id' => $groupMail->group_id])
            ->count();

        $mailingList = MailingList::find(['mailing_group_id' => $groupMail->group_id])
            ->all();

            if(!empty($mailingList)){
                foreach($mailingList as $list){
                    if($groupMail->is_send == true){
                        \Yii::$app->mailer->getView()->params['userName'] ='Francis';
                        $email = $list->email;
                        Yii::$app->mailer->compose([
                            'html' => 'layouts/main-html',
                        ], ['paramExample' => '123'])
                        ->setFrom('fchege22@gmail.com')
                        ->setTo(array($email))
                        ->setSubject('Testing Email')
                        ->send();
                        \Yii::$app->mailer->getView()->params['userName'] = null;
                    }
                    
            }
      
        }
        return $this->redirect(['index']);
    }
    protected function findModel($id)
    {
        if (($model = GroupMail::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }

}
