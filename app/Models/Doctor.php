<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Doctor extends Model
{
    use HasTranslations;

    protected $fillable = [
        'full_name',
        'speciality',
        'graphic',
        'biography',
        'photo',
    ];

    public $translatable = [
        'full_name',
        'speciality',
        'graphic',
        'biography',
    ];

}
