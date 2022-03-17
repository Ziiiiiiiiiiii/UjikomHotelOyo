<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RoomCategory extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function room(){
        return $this->hasMany(Room::class, 'category_id');
    }

}