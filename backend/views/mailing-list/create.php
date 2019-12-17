<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\MailingList */

$this->title = 'Create Mailing List';
$this->params['breadcrumbs'][] = ['label' => 'Mailing Lists', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<?php $this->beginContent('@app/views/site/base.php'); ?> 
<?php $this->endContent(); ?>  
<div class="main-panel"> 
    <div class="content">
            <div class="container-fluid">
                <?= $this->render('_form', [
                    'model' => $model,
                ]) ?>
            </div>
    </div>
</div>
