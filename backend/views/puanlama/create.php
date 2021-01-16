<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\puanlamaekle */

$this->title = 'Create puanlama';
$this->params['breadcrumbs'][] = ['label' => 'puanlama', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="puanlama-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
