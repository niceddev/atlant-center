<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Orchid\Screen\AsSource;
use Spatie\Translatable\HasTranslations;

class Section extends Model
{
    use HasTranslations;
    use AsSource;

    protected $fillable = [
        'title',
        'description',
        'slug',
    ];

    public $translatable = [
        'title',
        'description',
        'slug',
    ];

}
