<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WeddingVenues extends Model
{
    use HasFactory;

    protected $table = 'wedding_venues';
    public $timestamps = true;

    protected $fillable = [
        'sub_category_id',
        'category_id',
        'venue_name',
        'description',
        'icon',
        'order',
        'status',
        'is_delete'

        
    ];

    public function subCategory()
{
    return $this->belongsTo(GallerySubCategory::class,'sub_category_id');
}

}
