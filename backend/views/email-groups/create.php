<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\EmailGroups */

$this->title = 'Create Email Groups';
$this->params['breadcrumbs'][] = ['label' => 'Email Groups', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<?php $this->beginContent('@app/views/site/base.php'); ?> 
<?php $this->endContent(); ?>  
<?php $this->beginContent('@app/views/mail-desk/_menu.php'); ?>    
<?php $this->endContent(); ?>       
  
<div class="main-panel"> 
    <div class="content"> 
        <?= $this->render('_form', [
            'model' => $model,
        ]) ?>

    </div>
</div>
