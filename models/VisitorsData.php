<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "visitors_data".
 *
 * @property string $first_name
 * @property string $last_name
 * @property int $phone_number
 * @property string $email_address
 * @property int $room_id
 * @property int $number_of_adults
 * @property int $number_of_cjildren
 * @property string $arrival_date
 * @property string $departure_date
 * @property int $id
 * @property string $special_requests
 *
 * @property Rooms $room
 */
class VisitorsData extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'visitors_data';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['first_name', 'last_name', 'phone_number', 'email_address', 'room_id', 'number_of_adults', 'number_of_cjildren', 'arrival_date', 'departure_date', ], 'required'],
            [['phone_number', 'room_id', 'number_of_adults', 'number_of_cjildren'], 'integer'],
            [['arrival_date', 'departure_date'], 'safe'],
            [['special_requests'], 'string'],
            [['first_name', 'last_name', 'email_address'], 'string', 'max' => 90],
            [['room_id'], 'exist', 'skipOnError' => true, 'targetClass' => Rooms::class, 'targetAttribute' => ['room_id' => 'room_id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'first_name' => 'First Name',
            'last_name' => 'Last Name',
            'phone_number' => 'Phone Number',
            'email_address' => 'Email Address',
            'room_id' => 'Room ID',
            'number_of_adults' => 'Number Of Adults',
            'number_of_cjildren' => 'Number Of Cjildren',
            'arrival_date' => 'Arrival Date',
            'departure_date' => 'Departure Date',
            'id' => 'ID',
            'special_requests' => 'Special Requests',
        ];
    }

    /**
     * Gets query for [[Room]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getRoom()
    {
        return $this->hasOne(Rooms::class, ['room_id' => 'room_id']);
    }
}
