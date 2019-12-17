<?php

use yii\helpers\Html;
use yii\grid\GridView;



/* @var $this yii\web\View */
/* @var $searchModel app\models\EmailGroupsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Email Groups';
// $this->params['breadcrumbs'][] = $this->title;
?>
<?php $this->beginContent('@app/views/site/base.php'); ?> 
<?php $this->endContent(); ?>  
<div class="main-panel"> 
    <div class="content">
            <div class="container-fluid">
                    <p>
                        <?= Html::a('Create Email Groups', ['create'], ['class' => 'btn btn-success']) ?>
                    </p>

                    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

                    <?= GridView::widget([
                        'dataProvider' => $dataProvider,
                        // 'filterModel' => $searchModel,
                        'columns' => [
                            ['class' => 'yii\grid\SerialColumn'],

                            'id',
                            'group_name',
                            'is_active:boolean',
                            'details:ntext',

                            ['class' => 'yii\grid\ActionColumn'],
                            
                        ],

                    ]); ?>
                
             </div>
        </div>

</div>

