<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WeddingDiningFeatures extends Model
{
    use HasFactory;

    protected $table = 'wedding_dining_features';
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
