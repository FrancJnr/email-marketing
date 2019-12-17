<?php

use yii\helpers\Html;
use yii\widgets\DetailView;


/* @var $this yii\web\View */
// /* @var $model app\models\EmailTemplates */

$this->title = $model->template_id;
$this->params['breadcrumbs'][] = ['label' => 'Email Templates', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<?php $this->beginContent('@app/views/mail-desk/_menu.php'); ?>    
<?php $this->endContent(); ?>       
  
<div class="main-panel"> 
    <div class="content">

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->template_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->template_id], [
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
            'template_id',
            'teplate_key',
            'template_body:ntext',
        ],
    ]) ?>
</div>
</div>
