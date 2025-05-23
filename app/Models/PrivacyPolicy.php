<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PrivacyPolicy extends Model
{
    use HasFactory;

    protected $table = 'privacy_policy';
    public $timestamps = true;


    protected $fillable = [
        'title',
        'description',
        'order',
        'status',
        'is_delete'
    ];

}
