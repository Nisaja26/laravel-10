<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    /**
     * fillable
     *
     * @var array
     */
    // agar di regenerate ke dalam database
    protected $fillable = [
        'image',
        'title',
        'content',
    ];
}