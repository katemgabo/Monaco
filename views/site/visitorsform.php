<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\Rooms;
use yii\helpers\ArrayHelper;

/** @var yii\web\View $this */
/** @var app\models\VisitorsData $model */
/** @var ActiveForm $form */


$this->title = 'Booking Form'; // Set the title for the page
$this->params['breadcrumbs'][] = $this->title;

// Add CSS styles
$this->registerCss('
body {
    background-image: url("http://localhost/monaco%20kalolo%20project/web/images/bg.jpg");
    background-size: cover;
    background-position: center;
    height: 100%; /* Ensure the background covers the entire page height */
    margin: 0; /* Remove default margin */
    padding: 0; /* Remove default padding */
}

.visitorsform-container {
    max-width: 500px;
    margin: 0 auto;
    padding: 20px;
    background-color: #DEDEDE; /* Add a semi-transparent background to the form container */
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.2); /* Add a shadow effect to the form container */
}
    .visitorsform h2 {
        text-align: center;
        color: #333;
    }
    .form-group {
        margin-top: 20px;
    }
    .form-group label {
        color: white; /* Set label color to white */
    }
    .btn-primary {
        background-color: #007bff;
        border-color: #007bff;
    }
    .btn-primary:hover {
        background-color: #0056b3;
        border-color: #0056b3;
    }
');

?>
<div class="visitorsform">
<h2 style="color: white;">Visitor Information</h2>

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'first_name')->textInput(['maxlength' => true, 'class' => 'form-control']) ?>
    <?= $form->field($model, 'last_name')->textInput(['maxlength' => true, 'class' => 'form-control']) ?>
    <?= $form->field($model, 'phone_number')->textInput(['maxlength' => true, 'class' => 'form-control']) ?>
    <?= $form->field($model, 'email_address')->textInput(['maxlength' => true, 'class' => 'form-control']) ?>
    <?= $form->field($model, 'room_id')->dropDownList(
        ArrayHelper::map(Rooms::find()->all(), 'room_id', 'room_type'),
        ['prompt' => 'Select room', 'class' => 'form-control']
    ) ?>
    <?= $form->field($model, 'number_of_adults')->textInput(['class' => 'form-control']) ?>
    <?= $form->field($model, 'number_of_cjildren')->label('Number of Children')->textInput(['class' => 'form-control']) ?>
    <?= $form->field($model, 'arrival_date')->textInput(['type' => 'date', 'class' => 'form-control']) ?>
    <?= $form->field($model, 'departure_date')->textInput(['type' => 'date', 'class' => 'form-control']) ?>
    <?= $form->field($model, 'special_requests')->label('Special Requests(If Any)')->textarea(['rows' => 4, 'class' => 'form-control']) ?>

    <div class="form-group">
        <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
    </div>
    <?php ActiveForm::end(); ?>

</div><!-- visitorsform -->
