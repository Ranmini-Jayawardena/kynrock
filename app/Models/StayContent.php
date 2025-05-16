<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StayContent extends Model
{
    use HasFactory;

    protected $table = 'stay_content';
    public $timestamps = true;


    protected $fillable = [
        'heading_en',
        'description_en',
        'heading2',
        'description2',
    ];

}
