<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\EventImages;

class EventImages extends Model
{
    use HasFactory;

    protected $table = 'event_images';
    public $timestamps = true;

    protected $fillable = ['event_id', 'image_name','order'];

    public function event()
    {
        return $this->belongsTo(EventDetails::class);
    }
}
