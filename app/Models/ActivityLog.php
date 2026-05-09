<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ActivityLog extends Model
{
    protected $fillable = [
        'user_id',
        'action',
        'description',
        'ip_address',
    ];

    // ✅ العلاقة مع الـ User
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}