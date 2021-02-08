<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    /**
     *
     * Обратная связь  с таблицкй пользователи
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Получить теги для поста
     */
    public function tags()
    {
        return $this->morphToMany(Tag::class, 'taggable');
    }
}
