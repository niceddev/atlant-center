<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Contact extends Model
{
    use HasTranslations;

    protected $fillable = [
        'address',
        'phone_number',
        'whatsapp_number',
        'email',
        'graphic',
        'instagram_link'
    ];

    public $translatable = [
        'address',
        'graphic'
    ];

}
