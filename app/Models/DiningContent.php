<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DiningContent extends Model
{
    use HasFactory;

    protected $table = 'dinning_content';
    public $timestamps = true;

    protected $fillable = [
        'heading',
        'description',
        'image1',
        'image2',
        'image3',
        'image4',
        'image5',
        'image6'

    ];
}
