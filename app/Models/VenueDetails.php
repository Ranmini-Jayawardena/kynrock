<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\VenueImages; // Add this line to import the GalleryImages model

class VenueDetails extends Model
{
    use HasFactory;

    protected $table = 'venue_details';
    public $timestamps = true;

    protected $fillable = ['venue_name', 'description', 'is_delete', 'status'];

    public function images()
    {
        return $this->hasMany(VenueImages::class); // Reference the correct model
    }
}
