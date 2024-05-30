<?php

namespace app\migrations;

use Yii;
use yii\db\Migration;

/**
 * Class m240427_163934_insert_admin_users
 */
class m240427_163934_insert extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $currentTime = time();
        
        // Inserting the first admin user
        $this->insert('{{%admins}}', [
            'username' => 'admin1',
            'password' => Yii::$app->security->generatePasswordHash('password1'),
            'auth_key' => Yii::$app->security->generateRandomString(),
            'created_at' => $currentTime,
            'updated_at' => $currentTime,
        ]);
        
        // Inserting the second admin user
        $this->insert('{{%admins}}', [
            'username' => 'admin2',
            'password' => Yii::$app->security->generatePasswordHash('password2'),
            'auth_key' => Yii::$app->security->generateRandomString(),
            'created_at' => $currentTime,
            'updated_at' => $currentTime,
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->delete('{{%admins}}', ['in', 'username', ['admin1', 'admin2']]);
    }
}
