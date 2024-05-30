<?php

use yii\helpers\Url;
use yii\helpers\Html as YiiHtml; // Alias yii\helpers\Html as YiiHtml
use yii\web\View;
use app\models\Admin;

/** @var yii\web\View $this */
/** @var string $content */

use app\assets\AppAsset;
use app\widgets\Alert;
use yii\bootstrap5\Html;
use yii\bootstrap5\Nav;
use yii\bootstrap5\NavBar;

AppAsset::register($this);

$this->registerCsrfMetaTags();
$this->registerMetaTag(['charset' => Yii::$app->charset], 'charset');
$this->registerMetaTag(['name' => 'viewport', 'content' => 'width=device-width, initial-scale=1, shrink-to-fit=no']);
$this->registerMetaTag(['name' => 'description', 'content' => $this->params['meta_description'] ?? '']);
$this->registerMetaTag(['name' => 'keywords', 'content' => $this->params['meta_keywords'] ?? '']);
//$this->registerLinkTag(['rel' => 'icon', 'type' => 'image/x-icon', 'href' => Yii::getAlias('@web/favicon.ico')]);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" class="h-100">
<head>
    <title><?= YiiHtml::encode($this->title) ?></title> <!-- Use YiiHtml instead of Html -->
    <?php $this->head() ?>
    <link rel="icon" href="<?= Yii::getAlias('@web/images/icon.ico') ?>" type="image/x-icon">
    <link rel="shortcut icon" href="<?= Yii::getAlias('@web/images/icon.ico') ?>" type="image/x-icon">
    <link rel="stylesheet" href="/css/fontawesome-free-6.5.2-web/css/all.min.css">
</head>
<style>
    #footer a {
    color: black;
}
</style>
<body class="d-flex flex-column h-100">
<?php $this->beginBody() ?>

<header id="header">
    <?php
    NavBar::begin([
        'brandLabel' => '<span class="navbar-brand-text">MONACO HOTEL</span>',
        'brandUrl' => false,
        'options' => ['class' => 'navbar-expand-md navbar-dark bg-secondary fixed-top']
    ]);

    // Define the login link
    $loginLink = [
        'label' => 'Login (Admins only)',
        'url' => ['/site/login'],
        'visible' => Yii::$app->user->isGuest,
        'linkOptions' => ['class' => 'nav-link'] // Added class for styling
    ];

    // Display the login link at the far right end
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav ms-auto'], // Changed to ms-auto for right alignment
        'items' => [
            ['label' => 'Home', 'url' => ['/site/index']],
            ['label' => 'Rooms', 'url' => ['/site/roomslisting']],
            ['label' => 'Booking Form', 'url' => ['/site/visitorsform']],
            ['label' => 'Logout (' . (!Yii::$app->user->isGuest ? Yii::$app->user->identity->username : '') . ')', 'url' => ['/site/logout'], 'visible' => !Yii::$app->user->isGuest, 'linkOptions' => ['data-method' => 'post']],
            $loginLink, // Display the login link here
        ],
    ]);
    NavBar::end();
    ?>
</header>



<main id="main" class="flex-shrink-0" role="main">
    <div class="container">
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
</main>

<?php if (Yii::$app->controller->id === 'site' && Yii::$app->controller->action->id === 'index') : ?>
<footer id="footer" class="bg-secondary" style="color: white;">

            <div class="one_quarter">
                <h6 class="heading">Contact us in Pakufikirika</h6>
                <ul class="nospace btmspace-30 linklist contact">
                    <li><i class="fa fa-map-marker"></i>
                        <address>
                            Nowhere RD - P.O.Box 0000,Pakufikirika<br>

                            Wapi,Near Mjengo Apartments
                        </address>
                    </li>
                    <li><i class="fa fa-phone"></i> +255 262-963-064</li>
                    <li><i class="fa fa-phone"></i> +255 714-008-503</li>
                    <li><i class="fa fa-phone"></i> +255 743-400-303</li>
                </ul>
                
            </div>
            <div class="one_quarter">
                <h6 class="heading">Contact us in Mysteryland</h6>
                <ul class="nospace btmspace-30 linklist contact">
                    <li><i class="fa fa-map-marker"></i>
                        <address>
                            Barabara RD - P.O.Box 0001,Mysteryland<br>

                            Blank Area
                        </address>
                    </li>
                    <li><i class="fa fa-phone"></i> +255 742 411 111</li>

              
            </div>
            <div class="one_quarter">
                <h6 class="heading">Quick links</h6>
                <ul class="nospace linklist">
                <li><a href="<?= Url::to(['site/visitorsform']) ?>">Book Now</a></li>
                <li><a href="<?= Url::to(['site/roomslisting']) ?>">Our Rooms</a></li>

                </ul>
            </div>
           
</footer>
<?php endif; ?>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
