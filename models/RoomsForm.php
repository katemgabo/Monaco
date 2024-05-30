<?php

namespace app\models;

use Yii;
use yii\base\Model;

class RoomsForm extends Model
{
    public $room_id;
    public $room_type;
    public $room_price;
    public $image_filename;
    public $description;
    public $amenities;

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['room_id'], 'required'],
            [['room_type', 'description', 'amenities'], 'safe'], // These fields are optional
            [['room_price'], 'integer'], // Assuming room_price is an integer
        ];
    }
    

    /**
     * Updates the rooms in the database.
     *
     * @return bool Whether the update was successful
     */
    public function updateRooms()
    {
        if ($this->validate()) {
            $room = Rooms::findOne($this->room_id);
            if ($room !== null) {
                $room->room_type = $this->room_type;
                $room->room_price = $this->room_price;
                $room->image_filename = $this->image_filename;
                $room->description = $this->description;
                $room->amenities = $this->amenities;

                return $room->save();
            }
        }
        return false;
    }
}
