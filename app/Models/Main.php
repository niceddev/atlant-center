<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Main extends Model
{
    use HasTranslations;

    protected $fillable = [
        'title',
        'description',
        'button_title',
        'video_link',
    ];

    public $translatable = [
        'title',
        'description',
        'button_title',
    ];

}
