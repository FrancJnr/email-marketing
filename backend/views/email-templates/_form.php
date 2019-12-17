<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\ActiveForm;
use vova07\imperavi\Widget;

/* @var $this yii\web\View */
/* @var $model app\models\EmailTemplates */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="email-templates-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'teplate_key')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'template_body')->widget(Widget::className(), [
   
    'settings' => [
        'lang' => 'en',
        'minHeight' => 200,
        'fileUpload' => Url::to(['/default/file-upload']),
        'plugins' => [
            'clips',
            'fullscreen',
            'filemanager',
        ],
        'clips' => [
            ['Lorem ipsum...', 'Lorem...'],
            ['red', '<span class="label-red">red</span>'],
            ['green', '<span class="label-green">green</span>'],
            ['blue', '<span class="label-blue">blue</span>'],
        ],
    ],
]);
?>
    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
