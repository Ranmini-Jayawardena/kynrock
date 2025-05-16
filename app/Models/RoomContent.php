<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RoomContent extends Model
{
    use HasFactory;

    protected $table = 'room_content';
    public $timestamps = true;

    protected $fillable = [
        'heading',
        'description',
    ];
}
