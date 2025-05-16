<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AboutUsBelowContent extends Model
{
    use HasFactory;

    protected $table = 'aboutus_below_section_content';
    public $timestamps = true;

    protected $fillable = [
        'location_title',
        'location_description',
        'location_image', // New column
        'booknow_title',
        'booknow_description',
        'booknow_image', // New column
       
    ];
}
