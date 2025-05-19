<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LocationContent extends Model
{
    use HasFactory;

    protected $table = 'location_content';
    public $timestamps = true;

    protected $fillable = [
        'heading',
        'description',

        
    ];
}
