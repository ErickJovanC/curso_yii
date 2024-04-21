<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\searchs\ProductSerarchs $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="product-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'title') ?>

    <?= $form->field($model, 'description') ?>

    <?= $form->field($model, 'category_id') ?>

    <?= $form->field($model, 'price') ?>

    <?php // echo $form->field($model, 'cost') ?>

    <?php // echo $form->field($model, 'stock') ?>

    <?php // echo $form->field($model, 'is_countable') ?>

    <?php // echo $form->field($model, 'bulk') ?>

    <?php // echo $form->field($model, 'sku') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
