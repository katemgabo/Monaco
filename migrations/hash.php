<?php

// Define the path to Yii's bootstrap file
$yiiBootstrapFile = 'C:/xampp/htdocs/project kalolo/vendor/yiisoft/yii2/Yii.php';

// Check if the bootstrap file exists
if (!file_exists($yiiBootstrapFile)) {
    echo "Yii bootstrap file not found. Make sure Yii is installed.";
    exit(1); // Exit with an error code
}

// Include Yii's bootstrap file
require $yiiBootstrapFile;

// Use Yii's Security class
use yii\base\Security;

// Create a security component instance
$security = new Security();

// Generate a password hash
$password1 = 'password1'; // Replace 'password1' with the actual password
$password2 = 'password2'; // Replace 'password2' with the actual password
$hashedPassword1 = $security->generatePasswordHash($password1);
$hashedPassword2 = $security->generatePasswordHash($password2);

// Generate random auth keys
$authKey1 = $security->generateRandomString();
$authKey2 = $security->generateRandomString();

echo "Hashed password 1: $hashedPassword1\n";
echo "Hashed password 2: $hashedPassword2\n";
echo "Auth Key 1: $authKey1\n";
echo "Auth Key 2: $authKey2\n";
 