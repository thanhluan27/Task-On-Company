<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;
    protected $table = 'news';

    protected $primaryKey = 'post_id';

    protected $fillable = [
        // 'name', 'detail', 'image'
        'title', 'slug', 'status', 'image', 'excerpt', 'content', 'posted_at', 'feature'
    ];
}
