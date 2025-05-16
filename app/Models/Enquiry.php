<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Enquiry extends Model
{
    use HasFactory;

    protected $table = 'enquiries';
    public $timestamps = true;


    protected $fillable = [
        'full_name',
        'tel',
        'email',
        'subject',
        'message'
    ];

}
