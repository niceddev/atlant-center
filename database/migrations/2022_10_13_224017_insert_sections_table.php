<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class InsertSectionsTable extends Migration
{
    public function up()
    {
        DB::table('sections')->insert([
            [
                'title' => json_encode([
                    'ru' => 'О нас'
                ]),
                'slug' => 'about'
            ],
            [
                'title' => json_encode([
                    'ru' => 'Направления'
                ]),
                'slug' => 'directions'
            ],
            [
                'title' => json_encode([
                    'ru' => 'Услуги'
                ]),
                'slug' => 'services'
            ],
            [
                'title' => json_encode([
                    'ru' => 'Врачи'
                ]),
                'slug' => 'doctors'
            ],
            [
                'title' => json_encode([
                    'ru' => 'Отзывы'
                ]),
                'slug' => 'reviews'
            ],
            [
                'title' => json_encode([
                    'ru' => 'Галерея'
                ]),
                'slug' => 'gallery'
            ],
            [
                'title' => json_encode([
                    'ru' => 'Контакты'
                ]),
                'slug' => 'contacts'
            ],
        ]);
    }

}
