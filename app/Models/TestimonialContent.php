<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TestimonialContent extends Model
{
    use HasFactory;

    protected $table = 'testimonials';
    public $timestamps = true;

    protected $fillable = [
        'name',
        'testimonial',
        'order',
        'status',
        'is_delete'
    ];
}
