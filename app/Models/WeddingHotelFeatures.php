<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WeddingHotelFeatures extends Model
{
    use HasFactory;

    protected $table = 'wedding_hotel_features';
    public $timestamps = true;

    protected $fillable = [
        'feature_name',
        'description',
        'icon',
        'order',
        'status',
        'is_delete'

        
    ];
}
