<?php
use yii\helpers\Url;

/** @var yii\web\View $this */
$this->title = 'Monaco Hotel Booking Site';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $this->title; ?></title>
    <!-- FontAwesome CSS -->
    <link rel="stylesheet" href="/css/fontawesome.css">
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- jQuery and Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <style>
        /* Background color */
        body {
            background-color: #DEDEDE;
        }

        /* Background image container */
        .background-container {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100vh;
            background-image: url('<?= Url::to('@web/images/front.jpg') ?>');
            background-size: cover;
            background-position: center;
            filter: blur(5px); /* Optional: Add a blur effect to the background */
            z-index: -1;
            opacity: 1; /* Initial opacity */
            transition: opacity 0.5s ease; /* Smooth transition */
        }

        /* Welcome words container */
        .welcome-container {
            position: relative;
            z-index: 1;
            text-align: center;
            color: white;
            padding-top: 30vh; /* Adjust based on your design */
        }

        .carousel-container {
            display: flex;
            justify-content: center; /* Horizontally center */
        }

        .carousel-inner {
            height: 500px; /* Specify your desired width */
        } 
    </style>

</head>
<body>
 
<div class="site-index">
    <div class="background-container"></div>

    <div class="welcome-container">
        <div class="jumbotron text-center bg-transparent mt-5 mb-5">
            <h1 class="display-4">Welcome To Monaco's Official Reservation Site</h1>
            <p class="lead">Book for yourself a never before hotel experience.</p>
        </div>
    </div>

    <div class="body-content">
        <h1>Why choose us?</h1><br>
        <div class="container">
            <div class="row">
                <div class="col-lg-4 mb-3">
                    <h2>Plenty of options</h2>
                    <p>There is a wide range of accommodation options available from honeymoon suites, cozy boutique rooms to luxury penthouse suites. All are of high quality, top-class cleanliness, and with the ultimate comfort for our customers.</p>
                    <div id="carouselExampleIndicators1" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img class="d-block w-100" src="<?= Url::to('@web/images/img_14.jpg') ?>" alt="First slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="<?= Url::to('@web/images/img_15.jpg') ?>" alt="Second slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="<?= Url::to('@web/images/img_13.jpg') ?>" alt="Third slide">
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleIndicators1" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleIndicators1" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>

                <div class="col-lg-4 mb-3">
                    <h2>Personalized Service</h2>
                    <p>We are committed to offering personalized service to our guests when needed to ensure satisfaction. Whether it's special requests, dietary preferences, or assistance with planning activities, our visitors' needs will be catered to with care.</p>
                    <div id="carouselExampleIndicators2" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img class="d-block w-100" src="<?= Url::to('@web/images/img_16.jpg') ?>" alt="First slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="<?= Url::to('@web/images/img_17.jpg') ?>" alt="Second slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="<?= Url::to('@web/images/img_18.jpg') ?>" alt="Third slide">
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleIndicators2" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleIndicators2" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>

                <div class="col-lg-4 mb-2">
                    <h2>24/7 Customer Support</h2>
                    <p>Help is always available for our visitors with round-the-clock customer support. Whether it's assistance with booking inquiries or resolving issues during their stay, visitors can count on our support team.</p>
                    <div id="carouselExampleIndicators3" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img class="d-block w-100" src="<?= Url::to('@web/images/img_18.jpg') ?>" alt="First slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="<?= Url::to('@web/images/serv1.jpg') ?>" alt="Second slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="<?= Url::to('@web/images/serv2.jpg') ?>" alt="Third slide">
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleIndicators3" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleIndicators3" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>
            <!-- Third Row -->
        <h1>Other services offered:</h1><br>      
    <div class="row">
        <div class="col-lg-4 mb-3">
            <h2>Bar</h2>
            <p>Unwind and indulge in the sophisticated ambiance of our hotel bar, where handcrafted cocktails, premium spirits, and fine wines await. Whether you're celebrating a successful day of business or simply relaxing with friends, our skilled bartenders will craft the perfect libation to complement your evening.</p>
            <img src="<?= Url::to('@web/images/bar.jpg') ?>" alt="Image 1">
        </div>
        <div class="col-lg-4 mb-3">
            <h2>Restaruant</h2>
            <p>Savor a culinary journey at our exquisite restaurant, where every dish is a masterpiece of flavor and presentation. Our talented chefs use locally-sourced ingredients to create a menu that celebrates both traditional favorites and innovative creations. Immerse yourself in the inviting atmosphere and treat your palate to an unforgettable dining experience.</p>
            <img src="<?= Url::to('@web/images/rest.jpg') ?>" alt="Image 2">
        </div>
        <div class="col-lg-4 mb-3">
            <h2>Coffee shop & Lounge</h2>
            <p>Start your day with a freshly brewed cup of coffee or unwind with a signature cocktail in our stylish coffee bar & lounge. Whether you're catching up on work or catching up with friends, our cozy lounge provides the perfect setting to relax and recharge. Indulge in a tempting selection of pastries, light bites, and specialty drinks as you soak in the vibrant atmosphere.</p>
            <img src="<?= Url::to('@web/images/coff2.jpg') ?>" alt="Image 3">
        </div>
    </div>

        </div>
    </div>
</div>



<!-- JavaScript for handling scroll event -->
<script>
    $(document).ready(function () {
        $(window).scroll(function () {
            var scroll = $(window).scrollTop();
            var opacity = 1 - (scroll / 500); // Adjust the divisor to control the speed of fading

            // Limit the opacity value between 0 and 1
            opacity = opacity < 0 ? 0 : opacity > 1 ? 1 : opacity;

            // Apply the opacity to the background container
            $('.background-container').css('opacity', opacity);
        });
    });
</script>

<!-- JavaScript for Bootstrap Carousel -->
<script>
    $(document).ready(function(){
        // Activate the carousel
        $('.carousel').carousel();
    });
</script>

</body>
</html>
