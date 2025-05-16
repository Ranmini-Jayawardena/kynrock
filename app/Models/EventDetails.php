<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\EventImages;

class EventDetails extends Model
{
    protected $table = 'event_details';
    public $timestamps = true;

    protected $fillable = ['event_name', 'description', 'status'];

    public function images()
    {
        return $this->hasMany(EventImages::class);
    }
}

