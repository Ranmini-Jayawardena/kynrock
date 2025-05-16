<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WelcomeContent extends Model
{
    use HasFactory;

    protected $table = 'welcome_content';
    public $timestamps = true;

    protected $fillable = [
        'heading',
        'description',
    ];
}
