<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AboutUsWeddingContent extends Model
{
    use HasFactory;

    protected $table = 'aboutus_wedding_content';
    public $timestamps = true;

    protected $fillable = [
        'title1',
        'title2',
        'description'
       
    ];
}
