<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\puanlamaekle */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="arizalar-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'puanlama_name')->textInput() ?>

    <?= $form->field($model, 'puanlama_surname')->textInput() ?>

    <?= $form->field($model, 'puanlama_puanlama_durum')->textInput() ?>

    <?= $form->field($model, 'puanlama_puanlama_tip')->textInput() ?>

    <?= $form->field($model, 'puanlama_puanlama_yeri')->textInput() ?>

    <?= $form->field($model, 'puanlama_tel')->textInput() ?>

    <?= $form->field($model, 'puanlama_email')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
