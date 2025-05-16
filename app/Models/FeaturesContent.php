<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FeaturesContent extends Model
{
    use HasFactory;

    protected $table = 'features_content';
    public $timestamps = true;

    protected $fillable = [
        'heading',
        'description',
        'image',
        
        
    ];
}
