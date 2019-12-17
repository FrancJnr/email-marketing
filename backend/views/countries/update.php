<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Countries */

$this->title = 'Update Countries: ' . $model->country_id;
$this->params['breadcrumbs'][] = ['label' => 'Countries', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->country_id, 'url' => ['view', 'id' => $model->country_id]];
$this->params['breadcrumbs'][] = 'index';
?>
<?php $this->beginContent('@app/views/settings/_menu.php'); ?> 
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
