<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Titles */

$this->title = 'Update Titles: ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Titles', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->title_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<?php $this->beginContent('@app/views/settings/_menu.php'); ?>    
<?php $this->endContent(); ?>       
  
<div class="main-panel"> 
    <div class="titles-update content">
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

    </div>
</div>
