<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'max_people',
        'description',
        'status',
        'room_type_id',
    ];

    public function roomType()
    {
        return $this->belongsTo(RoomType::class);
    }
}
