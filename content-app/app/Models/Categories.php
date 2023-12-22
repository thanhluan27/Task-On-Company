<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    use HasFactory;
    protected $table = 'categories';

    protected $primaryKey = 'category_id';

    protected $fillable = [
        // 'name', 'detail', 'image'
        'category_name', 'slug', 'status', 'user_id'
    ];

    public function news()
    {
        return $this->hasMany(News::class, 'category_id','post_id');
    }
    // public function news()
    // {
    //     return $this->belongsToMany(News::class, 'category_id');
    // }
}
