<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AboutUsDiningContent extends Model
{
    use HasFactory;

    protected $table = 'aboutus_dining_content';
    public $timestamps = true;

    protected $fillable = [
        'title',
        'description',
        'image1', 
        'image2', 
        'image3', 
        'image4', 
        'image5',
        'image6' // New column
       
    ];
}
