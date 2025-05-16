<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HomeFeatures extends Model
{
    use HasFactory;

    protected $table = 'home_features';
    public $timestamps = true;

    protected $fillable = [
        'heading',
        'image_name',
        'order',
        'status',
        'is_delete'
    ];
}
