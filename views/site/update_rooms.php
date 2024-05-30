<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

$this->title = 'Update Rooms';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="site-update-rooms">
    <h1><?= Html::encode($this->title) ?></h1>

    <?php if (Yii::$app->session->hasFlash('success')): ?>
        <div class="alert alert-success">
            <?= Yii::$app->session->getFlash('success') ?>
        </div>
    <?php endif; ?>

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'room_id')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'room_type')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'room_price')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'description')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'amenities')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Update Rooms', ['class' => 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>
</div>
