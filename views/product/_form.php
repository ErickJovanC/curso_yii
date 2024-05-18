<?php

use yii\helpers\Html;
use app\models\Category;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\product $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="product-form row">
    <div class="col-md-6">
    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'title')
        ->textInput([
            'maxlength' => true,
            'class' => 'mb-3 form-control',
            'placeholder' => 'Name of Product',
        ]) ?>

    <?= $form->field($model, 'description')
        ->textarea(['maxlength' => true, 'class' => 'form-control y mb-3']) ?>

    <?= $form->field($model, 'category_id')
        ->dropDownList(
            Category::find()->select(['title', 'id'])->indexBy('id')->column(),
            ['class' => 'form-control mb-3',
                'prompt' => ['text' => 'Select Category', 'options' => ['hidden' => true]]]
        ) ?>

    <?= $form->field($model, 'price')
        ->textInput([
            'type' => 'number',
            'step' => '0.5',
            'class' => 'form-control mb-3'
        ]) ?>

    <?= $form->field($model, 'cost')
        ->textInput([
            'type' => 'number',
            'step' => '0.5',
            'class' => 'form-control mb-3'
        ]) ?>

    <?= $form->field($model, 'stock')
        ->textInput([
            'type' => 'number',
            'class' => 'form-control mb-3'
        ]) ?>

    <?= $form->field($model, 'is_countable')
        ->radioList(
            [1 => 'Si', 0 => 'No'],
            ['class' => 'form-check mb-3',
                'separator' => ' / ',
                'itemOptions' => ['class' => 'form-check-input mx-1']]
        ) ?>

    <?= $form->field($model, 'bulk')
        ->checkbox(['class' => 'form-check-input mb-3']) ?>

    <?= $form->field($model, 'sku')
        ->textInput([
            'maxlength' => true,
            'type' => 'number',
            'class' => 'form-control mb-3'
        ]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>
    </div>
</div>
