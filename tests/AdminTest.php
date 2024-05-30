<?php
use app\models\Admins;

class AdminsTest extends \PHPUnit\Framework\TestCase
{
    public function testValidatePassword()
    {
        // Arrange
        $admin = new Admins();
        $admin->password = Yii::$app->security->generatePasswordHash('password123');
        
        // Act
        $isValidPassword = $admin->validatePassword('password123');
        
        // Assert
        $this->assertTrue($isValidPassword);
    }
}
?>