<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\MailingList */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="mailing-list-form">
    <div class="row">
            <?php $form = ActiveForm::begin(); ?>
            <?= $form->field($model, 'mailing_group_id')->textInput() ?>
        
            <?= $form->field($model, 'first_name')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'surname')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'other_names')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'title_id')->textInput() ?>

            <?= $form->field($model, 'is_active')->textInput() ?>

            <?= $form->field($model, 'country_id')->textInput() ?>

            <?= $form->field($model, 'gender')->textInput() ?>

            <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>
            <?= $form->field($model, 'details')->textarea(['rows' => 3]) ?>
            <div class="form-group">
                <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
            </div>

            <?php ActiveForm::end(); ?>
     </div>
</div>
