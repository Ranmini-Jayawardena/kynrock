<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RoomAmenities extends Model
{
    use HasFactory;

    protected $table = 'room_amenties';
    public $timestamps = true;

    protected $fillable = [
        'amenties_name',
        'icon',
        'order',
        'status',
        'is_delete'

        
    ];
}
