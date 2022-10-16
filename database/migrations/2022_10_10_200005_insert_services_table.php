<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class InsertServicesTable extends Migration
{
    public function up()
    {
        DB::table('services')->insert([
            [
                'title'       => json_encode([
                    'ru' => 'Лечебная физкультура',
                ]),
            ],
            [
                'title'       => json_encode([
                    'ru' => 'Кинезиотейпирование',
                ]),
            ],
            [
                'title'       => json_encode([
                    'ru' => 'Мануальная терапия и массаж',
                ]),
            ],
            [
                'title'       => json_encode([
                    'ru' => 'Ударно-волновая терапия',
                ]),
            ],
            [
                'title'       => json_encode([
                    'ru' => 'Электротерапия',
                ]),
            ],
            [
                'title'       => json_encode([
                    'ru' => 'Магнитотерапия',
                ]),
            ],
            [
                'title'       => json_encode([
                    'ru' => 'Сауна и гидромассажные ванны',
                ]),
            ],
            [
                'title'       => json_encode([
                    'ru' => 'Гипоксическая камера',
                ]),
            ],
            [
                'title'       => json_encode([
                    'ru' => 'PRP - плазмотерапия ',
                ]),
            ],
            [
                'title'       => json_encode([
                    'ru' => 'УВЧ-Терапия',
                ]),
            ],
            [
                'title'       => json_encode([
                    'ru' => 'Текар-терапия INDIBA',
                ]),
            ],
            [
                'title'       => json_encode([
                    'ru' => 'Кислородная терапия',
                ]),
            ],
            [
                'title'       => json_encode([
                    'ru' => 'Термотерапия',
                ]),
            ],
            [
                'title'       => json_encode([
                    'ru' => '4D Диагностика',
                ]),
            ],
            [
                'title'       => json_encode([
                    'ru' => 'Лазерная терапия',
                ]),
            ],
            [
                'title'       => json_encode([
                    'ru' => 'Тракционная терапия',
                ]),
            ],
            [
                'title'       => json_encode([
                    'ru' => 'Термотерапия',
                ]),
            ],
            [
                'title'       => json_encode([
                    'ru' => 'Терапия ультразвуком',
                ]),
            ],
        ]);
    }

}
