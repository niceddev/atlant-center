<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class InsertDirectionsTable extends Migration
{
    public function up()
    {
        DB::table('directions')->insert([
            [
                'title'       => json_encode([
                    'ru' => 'Ортопедическая реабилитация'
                ]),
                'description' => json_encode([
                    'ru' => 'Реабилитация после ортопедических операций и травм. Лечение заболеваний ОДС.'
                ]),
                'icon_path'   => '/img/icons/u1.svg',
            ],
            [
                'title'       => json_encode([
                    'ru' => 'Ортопедическая диагностика'
                ]),
                'description' => json_encode([
                    'ru' => 'Диагностика заболеваний опорно-двигательной системы. 4D-Диагностика.'
                ]),
                'icon_path'   => '/img/icons/u2.svg',
            ],
            [
                'title'       => json_encode([
                    'ru' => 'Спортивная медицина'
                ]),
                'description' => json_encode([
                    'ru' => 'Реабилитация после спортивных травм. Функциональное восстановление.'
                ]),
                'icon_path'   => '/img/icons/u3.svg',
            ],
            [
                'title'       => json_encode([
                    'ru' => 'Спортивная подготовка'
                ]),
                'description' => json_encode([
                    'ru' => 'Предсезонная спортивная подготовка. Повышение функциональных данных.'
                ]),
                'icon_path'   => '/img/icons/u4.svg',
            ],
            [
                'title'       => json_encode([
                    'ru' => 'Ортопедическая профилактика'
                ]),
                'description' => json_encode([
                    'ru' => 'Профилактика заболеваний опорно-двигательной системы и спортивных травм.'
                ]),
                'icon_path'   => '/img/icons/u5.svg',
            ],
            [
                'title'       => json_encode([
                    'ru' => 'Терапия различных патологий'
                ]),
                'description' => json_encode([
                    'ru' => 'Терапия и профилактика легочных, сосудистых, кожных и других заболеваний.'
                ]),
                'icon_path'   => '/img/icons/u6.svg',
            ],
        ]);
    }

}
