<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class About extends Model
{
    use HasTranslations;

    protected $fillable = [
        'description',
        'list_title',
        'list'
    ];

    public $translatable = [
        'description',
        'list_title',
        'list',
    ];

}
