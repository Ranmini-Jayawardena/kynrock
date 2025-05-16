<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AboutUsContent extends Model
{
    use HasFactory;

    protected $table = 'aboutus_content';
    public $timestamps = true;

    protected $fillable = [
        'title1',
        'content1',
        'title2',
        'content2',
        'image1', 
        'feature_icon1',
        'feature_name1',
        'feature_description1',
        'feature_icon2',
        'feature_name2',
        'feature_description2',
        'feature_icon3',
        'feature_name3',
        'feature_description3',
        'feature_icon4',
        'feature_name4',
        'feature_description4',
        'feature_icon5',
        'feature_name5',
        'feature_description5',
       

       
    ];
}
