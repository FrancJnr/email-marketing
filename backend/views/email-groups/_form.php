<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\EmailGroups */
/* @var $form yii\widgets\ActiveForm */
?>
    <div class="email-group-form content">

        <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'group_name')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'is_active')->textInput() ?>

        <?= $form->field($model, 'details')->textarea(['rows' => 3]) ?>

        <div class="form-group">
            <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
        </div>

        <?php ActiveForm::end(); ?>

    </div>
