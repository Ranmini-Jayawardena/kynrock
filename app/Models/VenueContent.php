<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VenueContent extends Model
{
    use HasFactory;

    protected $table = 'venue_content';
    public $timestamps = true;

    protected $fillable = [
        'heading',
        'description',
        'image'
    ];
}
