<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WeddingContent extends Model
{
    use HasFactory;

    protected $table = 'wedding_content';
    public $timestamps = true;

    protected $fillable = [
        'title1',
        'description1',
        'title2',
        'image',
        'wedding_venue_title',
        'wedding_venue_description1',
        'wedding_venue_description2',
        'wedding_package_title',
        'wedding_package_description',
        'wedding_package_image',
        'cultinary_title',
        'cultinary_description',
        'services_title',
        'services_description',
        'services_image',
        'plan_wedding_title',
        'plan_wedding_description',


    ];
}
