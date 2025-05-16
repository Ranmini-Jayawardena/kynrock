<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RoomFeaturesData extends Model
{
    protected $table = 'room_features_data';

    protected $fillable = [
        'room_id',
        'feature_id',
    ];

    // Define the relationship with the Rooms model
    public function room()
    {
        return $this->belongsTo(RoomTypes::class, 'room_id'); // Update to Rooms
    }

    public function feature()
    {
        return $this->belongsTo(RoomFeatures::class, 'feature_id');
    }
}
