<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\GroupMail */

$this->title = 'Update Group Mail: ' . $model->group_mail_id;
$this->params['breadcrumbs'][] = ['label' => 'Group Mails', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->group_mail_id, 'url' => ['view', 'id' => $model->group_mail_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<?php $this->beginContent('@app/views/mail-desk/_menu.php'); ?>    
<?php $this->endContent(); ?>   
<div class="main-panel"> 
    <div class="content">

        <?= $this->render('_form', [
            'model' => $model,
        ]) ?>
    </div>
</div>
