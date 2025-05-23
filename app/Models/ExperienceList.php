<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\ExperienceImages; // Add this line to import the GalleryImages model

class ExperienceList extends Model
{
    use HasFactory;

    protected $table = 'experience';
    public $timestamps = true;

    protected $fillable = ['experience_name', 'description', 'description2','is_delete', 'status'];

    public function images()
    {
        return $this->hasMany(ExperienceImages::class,'experience_id'); // Reference the correct model
    }
}
