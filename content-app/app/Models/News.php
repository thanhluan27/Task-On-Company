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
        'title', 'slug', 'status', 'image', 'excerpt', 'content', 'posted_at', 'feature', 'category_id'
    ];

    // public function categories(){
    //     $this->belongsTo(Categories::class);
    // }
    // public function categories()
    // {
    //     return $this->belongsToMany(Categories::class, 'category_id', 'post_id');
    // }

    public function categories()
    {
        return $this->belongsTo(Categories::class, 'category_id');
    }
}
