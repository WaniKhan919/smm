<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlogPost extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'blog_category_id',
        'img',
    ];

    public function blog_category()
    {
        return $this->hasOne(BlogCategory::class, 'id');
    }
}
