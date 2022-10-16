<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class InsertSectionsTable extends Migration
{
    public function up()
    {
        DB::table('sections')->insert([
            [
                'title' => json_encode([
                    'ru' => 'О нас',
                ]),
                'description' => json_encode([
                    'ru' => null,
                ]),
                'slug' => 'about',
            ],
            [
                'title' => json_encode([
                    'ru' => 'Направления',
                ]),
                'description' => json_encode([
                    'ru' => null,
                ]),
                'slug' => 'directions',
            ],
            [
                'title' => json_encode([
                    'ru' => 'Услуги',
                ]),
                'description' => json_encode([
                    'ru' => 'Последние достижения спортивной медицины доступны теперь не только профессиональным спортсменам, но и каждому казахстанцу!',
                ]),
                'slug' => 'services',
            ],
            [
                'title' => json_encode([
                    'ru' => 'Врачи',
                ]),
                'description' => json_encode([
                    'ru' => 'Наши специалисты в кратчайшие сроки помогут Вам восстановиться после ортопедической операции или травмы и вернуться к своему привычному образу жизни.',
                ]),
                'slug' => 'doctors',
            ],
            [
                'title' => json_encode([
                    'ru' => 'Отзывы',
                ]),
                'description' => json_encode([
                    'ru' => null,
                ]),
                'slug' => 'reviews',
            ],
            [
                'title' => json_encode([
                    'ru' => 'Галерея',
                ]),
                'description' => json_encode([
                    'ru' => null,
                ]),
                'slug' => 'gallery',
            ],
            [
                'title' => json_encode([
                    'ru' => 'Контакты',
                ]),
                'description' => json_encode([
                    'ru' => null,
                ]),
                'slug' => 'contacts',
            ],
        ]);
    }

}
