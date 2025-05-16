<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LocationImages extends Model
{
    use HasFactory;

    protected $table = 'location_images';
    public $timestamps = true;

    protected $fillable = ['location_id', 'image_name', 'order'];

    public function category()
    {
        return $this->belongsTo(LocationList::class);
    }
}
