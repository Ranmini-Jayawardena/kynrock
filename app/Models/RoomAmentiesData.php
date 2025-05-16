<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RoomAmentiesData extends Model
{
    protected $table = 'room_amenties_data';

    protected $fillable = [
        'room_id',
        'amenities_id',
    ];

    // Define the relationship with the Rooms model
    public function room()
    {
        return $this->belongsTo(RoomTypes::class, 'room_id'); // Update to Rooms
    }

    public function feature()
    {
        return $this->belongsTo(RoomAmenities::class, 'amenities_id');
    }
}
