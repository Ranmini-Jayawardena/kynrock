<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WeddingVenues extends Model
{
    use HasFactory;

    protected $table = 'wedding_venues';
    public $timestamps = true;

    protected $fillable = [
        'venue_name',
        'description',
        'icon',
        'order',
        'status',
        'is_delete'

        
    ];
}
