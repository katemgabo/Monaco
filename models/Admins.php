<?php

namespace app\models;

use Yii;
use yii\db\ActiveRecord;
use yii\web\IdentityInterface;
/**
 * This is the model class for table "admins".
 *
 * @property int $id
 * @property string $username
 * @property string $password
 * @property string|null $auth_key
 * @property int|null $created_at
 * @property int|null $updated_at
 */
class Admins extends \yii\db\ActiveRecord implements IdentityInterface
{
    public $is_admin;
    /**
     * {@inheritdoc}
     */

     public function isAdmin()
     {
         return $this->is_admin == 1;
     }

    public static function tableName()
    {
        return 'admins';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['username', 'password'], 'required'],
            [['created_at', 'updated_at'], 'integer'],
            [['username', 'password'], 'string', 'max' => 255],
            [['auth_key'], 'string', 'max' => 32],
            [['username'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'username' => 'Username',
            'password' => 'Password',
            'auth_key' => 'Auth Key',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }

    public static function findIdentity($id)
    {
        return static::findOne($id);
    }

    public static function findIdentityByAccessToken($token, $type = null)
    {
        // This method is not needed for now
        throw new \yii\base\NotSupportedException();
    }

    public function getId()
    {
        return $this->id;
    }

    public function getAuthKey()
    {
        return $this->auth_key;
    }

    public function validateAuthKey($authKey)
    {
        return $this->auth_key === $authKey;
    }

    public static function findByUsername($username)
    {
        return static::findOne(['username' => $username]);
    }

    public function validatePassword($password)
    {
        return Yii::$app->security->validatePassword($password, $this->password);
    }
}
