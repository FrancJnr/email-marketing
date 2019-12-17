<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\GroupMail */

$this->title = $model->group_mail_id;
$this->params['breadcrumbs'][] = ['label' => 'Group Mails', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<?php $this->beginContent('@app/views/mail-desk/_menu.php'); ?>    
<?php $this->endContent(); ?>   
<div class="main-panel"> 
    <div class="content">
        <p>
            <?= Html::a('Update', ['update', 'id' => $model->group_mail_id], ['class' => 'btn btn-primary']) ?>
            <?= Html::a('Delete', ['delete', 'id' => $model->group_mail_id], [
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
                'group_mail_id',
                'mail_title',
                'mail_subject',
                'mail_body:html',
                // 'is_send',
                // 'details:ntext',
            ],
        ]) ?>
    </div>
</div>
