<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\EmailGroups */

$this->title = 'Update Email Groups: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Email Groups', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<?php $this->beginContent('@app/views/site/base.php'); ?> 
<?php $this->endContent(); ?>
<div class="main-panel"> 
    <div class="email-groups-update content">
        <?= $this->render('_form', [
            'model' => $model,
        ]) ?>

    </div>
</div>
