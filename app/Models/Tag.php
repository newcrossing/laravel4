<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;

    /**
     * Получение постов по тегу
     */
    public function posts()
    {
        return $this->morphedByMany(Post::class, 'taggable');
    }
}
