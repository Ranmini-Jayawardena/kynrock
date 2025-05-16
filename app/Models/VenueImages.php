<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VenueImages extends Model
{
    use HasFactory;

    protected $table = 'venue_images';
    public $timestamps = true;

    protected $fillable = ['venue_id', 'image_name', 'order'];

    public function category()
    {
        return $this->belongsTo(Venue::class);
    }
}
