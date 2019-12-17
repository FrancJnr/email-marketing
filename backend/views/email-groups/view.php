<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\EmailGroups */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Email Groups', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<?php $this->beginContent('@app/views/site/base.php'); ?> 
<?php $this->endContent(); ?>
<div class="main-panel"> 
    <div class="email-groups-view content">
        <p>
            <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
            <?= Html::a('Delete', ['delete', 'id' => $model->id], [
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
                'id',
                'group_name',
                'is_active:boolean',
                'details:ntext',
            ],
        ]) ?>

    </div>
</div>