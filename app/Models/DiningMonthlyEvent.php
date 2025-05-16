<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DiningMonthlyEvent extends Model
{
    use HasFactory;

    protected $table = 'monthly_events';
    public $timestamps = true;

    protected $fillable = [
        'monthlyevent_name',
        'description',
        'image_1', // New column
        'image_2', // New column
        'image_3', // New column
        'image_4', // New column
    ];
}
