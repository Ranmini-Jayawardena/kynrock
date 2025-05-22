<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\RoomTypesImages; // Add this line to import the GalleryImages model

class RoomTypes extends Model
{
    use HasFactory;

    protected $table = 'room_types';
    public $timestamps = true;

    protected $fillable = [
        'room_name', 
        'meta_title',
        'thumbnail', 
        'description_en',
        'title',
        'home_title',
        'home_content1',
        'home_content2',
        'home_image',
        'checkbox',
        'is_delete', 
        'status'];

    public function images()
    {
        return $this->hasMany(RoomTypesImages::class, 'roomtypes_id');// Reference the correct model
    }
    public function roomAmenities()
{
    return $this->hasMany(RoomAmentiesData::class, 'room_id');
}
public function roomFeatures()
{
    return $this->hasMany(RoomFeaturesData::class, 'room_id');
}

}
