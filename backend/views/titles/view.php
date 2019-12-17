<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Titles */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Titles', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<?php $this->beginContent('@app/views/settings/_menu.php'); ?>    
<?php $this->endContent(); ?>       
  
<div class="main-panel"> 
    <div class="titles-view content">
        <p>
            <?= Html::a('Update', ['update', 'id' => $model->title_id], ['class' => 'btn btn-primary']) ?>
            <?= Html::a('Delete', ['delete', 'id' => $model->title_id], [
                'class' => 'btn btn-danger',
                'data' => [
                    'confirm' => 'Are you sure you want to delete this item?',
                    'method' => 'post',
                ],
            ]) ?>
        </p>

        <?= DetailView::widget([
            'model' => $model,
            'attributes' => [
                'title_id',
                'title',
                'details:ntext',
            ],
        ]) ?>

    </div>
</div>