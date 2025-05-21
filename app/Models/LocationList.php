<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\LocationImages; // Add this line to import the GalleryImages model

class LocationList extends Model
{
    use HasFactory;

    protected $table = 'location';
    public $timestamps = true;

    protected $fillable = ['location_name', 'description','home_image','order' ,'is_delete', 'status'];

    public function images()
    {
        return $this->hasMany(LocationImages::class,'location_id'); // Reference the correct model
    }
}
    