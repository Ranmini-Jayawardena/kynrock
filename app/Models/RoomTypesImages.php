<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RoomTypesImages extends Model
{
    use HasFactory;

    protected $table = 'roomtypes_images';
    public $timestamps = true;

    protected $fillable = ['roomtypes_id', 'image_name', 'order'];

    public function roomtypes()
    {
        return $this->belongsTo(RoomTypes::class, 'roomtypes_id');
    }
}
