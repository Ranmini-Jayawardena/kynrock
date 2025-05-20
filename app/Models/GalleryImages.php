<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GalleryImages extends Model
{
    use HasFactory;

    protected $table = 'images';
    public $timestamps = true;

    protected $fillable = ['category_id','subcategory_id', 'image_name', 'order'];

    // In GalleryImages.php
    public function category()
    {
        return $this->belongsTo(GalleryCategory::class, 'category_id');
    }

    public function subcategory()
    {
        return $this->belongsTo(GallerySubCategory::class, 'subcategory_id');
    }

    public function subCategories()
    {
        return $this->belongsTo(GallerySubCategory::class, 'subcategory_id');
    }
}
