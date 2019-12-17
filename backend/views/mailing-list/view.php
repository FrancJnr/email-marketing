<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\MailingList */

$this->title = $model->mailing_list_id;
$this->params['breadcrumbs'][] = ['label' => 'Mailing Lists', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<?php $this->beginContent('@app/views/site/base.php'); ?> 
<?php $this->endContent(); ?>  
<div class="main-panel"> 
    <div class="content">
            <div class="container-fluid">
                <p>
                    <?= Html::a('Update', ['update', 'id' => $model->mailing_list_id], ['class' => 'btn btn-primary']) ?>
                    <?= Html::a('Delete', ['delete', 'id' => $model->mailing_list_id], [
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
                        'mailing_list_id',
                        'mailing_group_id',
                        'first_name',
                        'surname',
                        'other_names',
                        'title_id',
                        'is_active',
                        'country_id',
                        'gender',
                        'details:ntext',
                        'email:email',
                    ],
                ]) ?>
        </div>
    </div>
</div>
