<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class YoutubePost extends Model
{
    use HasFactory;
    protected $fillable = [
        'title', 'subtitle', 'date', 'is_active', 'sponsor', 'intention', 'provider', 'youtube_id'
    ];
}
