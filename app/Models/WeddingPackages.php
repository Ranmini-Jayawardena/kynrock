<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WeddingPackages extends Model
{
    use HasFactory;

    protected $table = 'wedding_personalized_packages';
    public $timestamps = true;

    protected $fillable = [
        'package_name',
        'description',
        'order',
        'status',
        'is_delete'

        
    ];
}
