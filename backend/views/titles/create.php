<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Titles */

$this->title = 'Create Titles';
$this->params['breadcrumbs'][] = ['label' => 'Titles', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>

<?php $this->beginContent('@app/views/settings/_menu.php'); ?>    
<?php $this->endContent(); ?>       
  
<div class="main-panel"> 

        <div class="titles-create content" style="height:20%">
            <?= $this->render('_form', [
                'model' => $model,
            ]) ?>

        </div>
</div>
