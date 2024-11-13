<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'body',
        'user_id',
        'published_at',
        'summary',
        'slug',
        'status',
        'reading_time'
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}

