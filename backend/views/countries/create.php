<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Countries */

$this->title = 'Create Countries';
$this->params['breadcrumbs'][] = ['label' => 'Countries', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
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
