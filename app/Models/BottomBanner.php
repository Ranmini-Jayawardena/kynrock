<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BottomBanner extends Model
{
    use HasFactory;

    protected $table = 'bottom_banner';
    public $timestamps = true;

    protected $fillable = [
        'page_name',
        'heading',
        'banner_image',
        'order',
        'status'
    ];
}
