<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel backend\models\puanlamaekleSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'puanlama';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="puanlama-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create puanlama', ['create'], ['class' => 'btn btn-primary']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            
            'id',
            'puanlama_name',
            'puanlama_surname',
            'puanlama_tel',
            'puanlama_email',
            'puanlama_puanlama_tip',
            'puanlama_puanlama_durum',
            'puanlama_puanlama_yeri',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
    <?php Pjax::end(); ?>
</div>
