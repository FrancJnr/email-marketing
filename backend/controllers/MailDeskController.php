<?php
namespace backend\controllers;

use Yii;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\LoginForm;

/**
 * Site controller
 */
class MailDeskController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'rules' => [
                    [
                        'actions' => ['login', 'error'],
                        'allow' => true,
                    ],
                    [
                        'actions' => ['logout', 'index'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
             ],
            // 'file-upload' => [
            //     'class' => 'vova07\imperavi\actions\UploadFileAction',
            //     // 'url' => 'http://localhost/yii2-app/backend/repository/files', // Directory URL address, where files are stored.
            //     'path' => '@repository/files/', // Or absolute path to directory where files are stored.
            //     'uploadOnlyImage' => false, // For any kind of files uploading.
            // ],
            
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('mail_desk');
    }

    /**
     * Login action.
     *
     * @return string
     */
    
}
