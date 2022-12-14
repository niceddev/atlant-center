<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Direction extends Model
{
    use HasTranslations;

    protected $fillable = [
        'title',
        'description',
        'icon_path',
    ];

    public $translatable = [
        'title',
        'description',
    ];

}
