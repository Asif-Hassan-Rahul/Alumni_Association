<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;
    protected $fillable = [
        'detail',
    ];

    function blog_category()
    {
        return $this->belongsTo(BlogCategory::class);
    }
}
