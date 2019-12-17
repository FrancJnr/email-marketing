<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\TitlesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Titles';
$this->params['breadcrumbs'][] = $this->title;
?>

<?php $this->beginContent('@app/views/settings/_menu.php'); ?>    
<?php $this->endContent(); ?>       
  
<div class="main-panel"> 
    <div class="content">
            <!-- <p><?= Html::encode($this->title) ?></p> -->

            <p>
                <?= Html::a('Create Titles', ['create'], ['class' => 'btn btn-success']) ?>
            </p>

            <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

            <?= GridView::widget([
                'dataProvider' => $dataProvider,
                // 'filterModel' => $searchModel,
                'columns' => [
                    ['class' => 'yii\grid\SerialColumn'],

                    'title_id',
                    'title',
                    'details:ntext',

                    ['class' => 'yii\grid\ActionColumn'],
                ],
            ]); ?>

        </div>
</div>       