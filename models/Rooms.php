<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "rooms".
 *
 * @property int $room_id
 * @property string $room_type
 * @property int $room_price
 * @property string $image_filename
 * @property string $description
 * @property string $amenities
 *
 * @property VisitorsData[] $visitorsDatas
 */
class Rooms extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'rooms';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['room_id', 'room_type', 'room_price', 'image_filename', 'description', 'amenities'], 'required'],
            [['room_id', 'room_price'], 'integer'],
            [['room_type', 'description', 'amenities'], 'string'],
            [['image_filename'], 'string', 'max' => 100],
            [['room_id'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'room_id' => 'Room ID',
            'room_type' => 'Room Type',
            'room_price' => 'Room Price',
            'image_filename' => 'Image Filename',
            'description' => 'Description',
            'amenities' => 'Amenities',
        ];
    }

    /**
     * Gets query for [[VisitorsDatas]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getVisitorsDatas()
    {
        return $this->hasMany(VisitorsData::class, ['room_id' => 'room_id']);
    }
}
