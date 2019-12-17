<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\MailingListSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Mailing Lists';
$this->params['breadcrumbs'][] = $this->title;
?>
<?php $this->beginContent('@app/views/site/base.php'); ?> 
<?php $this->endContent(); ?>  
<div class="main-panel"> 
    <div class="content">
            <div class="container-fluid">

                <p>
                    <?= Html::a('Create Mailing List', ['create'], ['class' => 'btn btn-success']) ?>
                </p>

                <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

                <?= GridView::widget([
                    'dataProvider' => $dataProvider,
                    // 'filterModel' => $searchModel,
                    'columns' => [
                        ['class' => 'yii\grid\SerialColumn'],

                        'mailing_list_id',
                        'mailing_group_id',
                        'first_name',
                        'surname',
                        'other_names',
                        //'title_id',
                        //'is_active',
                        //'country_id',
                        'gender',
                        //'details:ntext',
                        'email:email',

                        ['class' => 'yii\grid\ActionColumn'],
                    ],
                ]); ?>
    </div>
    </div>

</div>
