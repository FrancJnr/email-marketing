<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\GroupMailSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Group Mails';
$this->params['breadcrumbs'][] = $this->title;
?>
<?php $this->beginContent('@app/views/mail-desk/_menu.php'); ?>    
<?php $this->endContent(); ?>       
  
<div class="main-panel"> 
    <div class="content">

            <p>
                <?= Html::a('Create Group Mail', ['create'], ['class' => 'btn btn-success']) ?>
            </p>

            <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

            <?= GridView::widget([
                'dataProvider' => $dataProvider,
                // 'filterModel' => $searchModel,
                'columns' => [
                    ['class' => 'yii\grid\SerialColumn'],
                    ['class' => 'yii\grid\CheckboxColumn'],
                    'mail_title',
                    'mail_subject',
                    // 'mail_body:ntext',
                    'is_send:boolean',
                    //'details:ntext',

                    ['class' => 'yii\grid\ActionColumn',
                    'template'=>'{view} {update} {delete} {test}',

                            'buttons'=>[

                              'test' => function ($url, $model) { 
                                return Html::a('<span class="glyphicon glyphicon-send"></span>', ['test', 'id' => $model->group_id], [
                                    'class' => '',
                                    'title' => Yii::t('yii', 'Send Email'),
                                    'data' => [
                                        'confirm' => "You are about to send an email to Subscribers in your mail list do you want to continue?",
                                        'method' => 'post',
                                    ],
                                ]);  
            

                                    // return Html::a('<span class="glyphicon glyphicon-send"></span>', $url, [

                                    //     'title' => Yii::t('yii', 'Send Email'),

                                    // ]);                                

                                }

                            ],
                
                    ],
                ],
            ]); ?>
                       
        </div>
</div>
