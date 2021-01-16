<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\puanlamaekleSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="puanlama-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'id') ?>
    
    <?= $form->field($model, 'puanlama_name') ?>

    <?= $form->field($model, 'puanlama_surname') ?>

    <?= $form->field($model, 'puanlama_puanlama_durum') ?>

    <?= $form->field($model, 'puanlama_puanlama_tip') ?>

    <?= $form->field($model, 'puanlama_puanlama_yeri') ?>

    <?= $form->field($model, 'puanlama_tel') ?>

    <?= $form->field($model, 'puanlama_email') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
