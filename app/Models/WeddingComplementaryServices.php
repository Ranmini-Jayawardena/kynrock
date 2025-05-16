<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WeddingComplementaryServices extends Model
{
    use HasFactory;

    protected $table = 'wedding_complementary_services';
    public $timestamps = true;

    protected $fillable = [
        'service_name',
        'description',
        'order',
        'status',
        'is_delete'

        
    ];
}
