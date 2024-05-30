<?php

/* @var $this yii\web\View */


$this->title = 'Admin Dashboard';
?>

<div class="site-afterlog">
    <h1>Welcome, Admin!</h1>
    <p>These are the bookings made.</p>
    <!-- Add more content as needed -->
    <p><a href="<?= Yii::$app->urlManager->createUrl(['site/update-rooms']) ?>">Update Rooms</a></p>
</div>

<?php foreach ($visitorsData as $visitor): ?>
    <div class="row mb-4">
        <div class="col-md-12">
            <div class="card" style="background-color:#899499">
                <div class="card-body">
                    <h5 class="card-title"><?= $visitor->first_name ?> <?= $visitor->last_name ?></h5>
                    <p class="card-text">Phone: <?= $visitor->phone_number ?></p>
                    <p class="card-text">Email: <?= $visitor->email_address ?></p>
                    <p class="card-text">Room ID: <?= $visitor->room_id ?></p>
                    <p class="card-text">No of Children: <?= $visitor->number_of_cjildren ?></p>
                    <p class="card-text">No of Adults: <?= $visitor->number_of_adults ?></p>
                    <p class="card-text">Arrival Date: <?= $visitor->arrival_date ?></p>
                    <p class="card-text">Departure Date: <?= $visitor->departure_date ?></p>
                    <p class="card-text">Special Requests: <?= $visitor->special_requests ?></p>
                    <!-- Display additional fields as needed -->
                </div>
            </div>
        </div>
    </div>
<?php endforeach; ?>
