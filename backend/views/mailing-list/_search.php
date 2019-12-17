<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\MailingListSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="mailing-list-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'mailing_list_id') ?>

    <?= $form->field($model, 'mailing_group_id') ?>

    <?= $form->field($model, 'first_name') ?>

    <?= $form->field($model, 'surname') ?>

    <?= $form->field($model, 'other_names') ?>

    <?php // echo $form->field($model, 'title_id') ?>

    <?php // echo $form->field($model, 'is_active') ?>

    <?php // echo $form->field($model, 'country_id') ?>

    <?php // echo $form->field($model, 'gender') ?>

    <?php // echo $form->field($model, 'details') ?>

    <?php // echo $form->field($model, 'email') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
