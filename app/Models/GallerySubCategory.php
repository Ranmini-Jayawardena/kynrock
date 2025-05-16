<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GallerySubCategory extends Model
{
    use HasFactory;

    protected $table = 'sub_categories';
    public $timestamps = true;

    protected $fillable = ['category_id','sub_category_name'];

    public function category()
    {
        return $this->belongsTo(GalleryCategory::class, 'category_id');
    }
}
