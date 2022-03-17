<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function roomcategory()
    {
        return $this->belongsTo(RoomCategory::class, 'category_id');
    }

    public function roomfacility()
    {
        return $this->hasMany(RoomFacility::class, 'room_id');
    }
}