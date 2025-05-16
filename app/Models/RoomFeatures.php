<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RoomFeatures extends Model
{
    use HasFactory;

    protected $table = 'room_features';
    public $timestamps = true;

    protected $fillable = [
        'feature_name',
        'icon',
        'order',
        'status',
        'is_delete',
    ];
}
