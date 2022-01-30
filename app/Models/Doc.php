<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Doc extends Model
{
    use HasFactory;
    use SoftDeletes;

    /**
     * Возвращает краткое название документа
     * @return string
     */
    public function getNameDoc()
    {
        $name = '';
        $name .= $this->preamble_name ?? '';
        if (!empty($this->date_sign)) {
            Carbon::setLocale('ru');
            $Carbone = Carbon::now()->locale('ru_RU');
            $name .= ' от '.$Carbone->createFromFormat('Y-m-d', $this->date_sign)->isoFormat('D MMMM YYYY',
                            'Do MMMM').' г.';
        }
        $name .= $this->short_name ?' &laquo;'.$this->short_name.'&raquo;': '';
        return $name;
    }


    /**
     * Атрибуты, которые должны быть преобразованы в дату
     *
     * @var array
     */
    protected $dates = [
            'deleted_at',
    ];

    public function texts()
    {
        return $this->hasMany(Text::class);
    }
    /**
     * Полиморфная  связь  с таблицей Tags
     */
    public function tags()
    {
        return $this->morphToMany(Tag::class, 'taggable');
    }
}
