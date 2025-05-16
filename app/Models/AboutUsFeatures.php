<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AboutUsFeatures extends Model
{
    use HasFactory;

    protected $table = 'aboutus_features';
    public $timestamps = true;

    protected $fillable = [
        'title',
        'description',
        'image', // New column
       
    ];
}
