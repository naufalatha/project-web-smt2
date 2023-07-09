<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BorrowRoom extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'room_id',
        'borrow_at',
        'until_at',
        'admin_approval_status',
        'processed_at',
        'returned_at',
        'notes',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function room()
    {
        return $this->belongsTo(Room::class);
    }
}
