<?php

use yii\helpers\Html;
use yii\helpers\Url;


$this->title = 'Our Rooms';

// Add CSS styles
$this->registerCss('
    .card {
        background-color: #D3D3D3; 
        border: none; 
        border-radius: 10px; 
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); 
        margin-bottom: 50px;
    }
    .card-title {
        color: #333; /* Set card title color to dark gray */
    }
    .card-text {
        color: #555; /* Set card text color to gray */
    }
    .text-muted {
        color: #777; /* Set muted text color to light gray */
    }
');

?>

<h2><?= Html::encode($this->title) ?></h2>

<div class="row">
    <?php foreach ($rooms as $room): ?>
        <div class="col-12"> 
            <div class="card mb-4 box-shadow">
                <img class="card-img-top" src="<?= Url::to('@web/images/' . $room->image_filename) ?>" alt="<?= $room->room_id ?>">
                <div class="card-body">
                    <h5 class="card-title"><?= $room->room_type ?></h5>
                    <p class="card-text"><?= $room->description ?></p> <!-- Display description -->
                    <p class="card-text">Amenities: <?= $room->amenities ?></p> <!-- Display amenities -->
                    <div class="d-flex justify-content-between align-items-center">
                        <span class="text-muted"><?= Yii::$app->formatter->asCurrency($room->room_price) ?> per night</span>
                    </div>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</div>
