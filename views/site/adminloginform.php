<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

$this->title = 'Login';
$this->params['breadcrumbs'][] = $this->title;
?>

<style>
    body {
        background-image: url("http://localhost/monaco%20kalolo%20project/web/images/admin.jpg"); /* Replace 'path_to_your_image.jpg' with the actual path to your image */
        background-size: cover;
        background-position: center;
        height: 100vh; /* Ensure the background covers the entire viewport height */
        margin: 0;
        padding: 0;
    }

    .site-login {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh; /* Ensure the login form is centered vertically */
    }

    .card {
        width: 500px; /* Adjust width as needed */
        padding: 40px; /* Adjust padding as needed */
        background-color: #f7f7f7; /* Light grey background */
        border: 1px solid #ccc;
        border-radius: 10px;
        box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
    }

    .card-title {
        text-align: center;
    }

    .card-text {
        text-align: center;
    }
</style>

<div class="site-login">
    <div class="card">
        <div class="card-body">
            <h1 class="card-title"><?= Html::encode($this->title) ?></h1>
            <p class="card-text">Please fill out the following fields to login:</p>

            <?php $form = ActiveForm::begin(['id' => 'login-form']); ?>

                <?= $form->field($model, 'username')->textInput(['autofocus' => true])->label('Username') ?>

                <?= $form->field($model, 'password')->passwordInput()->label('Password') ?>

                <div class="form-group">
                    <?= Html::submitButton('Login', ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
                </div>

            <?php ActiveForm::end(); ?>
        </div>
    </div>
</div>
