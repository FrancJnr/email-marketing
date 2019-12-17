<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\EmailTemplates */

$this->title = 'Create Email Templates';
$this->params['breadcrumbs'][] = ['label' => 'Email Templates', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
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
