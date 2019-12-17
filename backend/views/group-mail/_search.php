<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\GroupMailSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="group-mail-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'group_mail_id') ?>

    <?= $form->field($model, 'mail_title') ?>

    <?= $form->field($model, 'mail_subject') ?>

    <?= $form->field($model, 'mail_body') ?>

    <?= $form->field($model, 'is_send') ?>

    <?php // echo $form->field($model, 'details') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
