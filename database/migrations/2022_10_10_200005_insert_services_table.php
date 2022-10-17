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
                'content'       => json_encode([
                    'ru' => '<p>Лечебная физкультура - ведущий метод в медицинской реабилитации. Занятия ускоряют процесс восстановления после травм, переломов и операций.
          </p>
          <p>Основа лечебной физкультуры - это физические упражнения под четким руководством специалиста. Во время занятий учитываются особенности и физические возможности каждого пациента.</p>
          <p>ЛФК - это четко дозированная тренировка, которая обеспечивает полное восстановление двигательных функций организма и оказывает профилактическое действие болезням опорно-двигательного аппарата.
          </p><p>ЛФК делится на общую тренировку (общее оздоровление и укрепление организма) и специальную тренировку (устранение нарушений в функциях определенных органов).</p>',
                ]),
                'banner' => '/img/u1.jpg',
            ],
            [
                'title'       => json_encode([
                    'ru' => 'Кинезиотейпирование',
                ]),
                'content'       => json_encode([
                    'ru' => null,
                ]),
                'banner' => null,
            ],
            [
                'title'       => json_encode([
                    'ru' => 'Мануальная терапия и массаж',
                ]),
                'content'       => json_encode([
                    'ru' => null,
                ]),
                'banner' => null,
            ],
            [
                'title'       => json_encode([
                    'ru' => 'Ударно-волновая терапия',
                ]),
                'content'       => json_encode([
                    'ru' => null,
                ]),
                'banner' => null,
            ],
            [
                'title'       => json_encode([
                    'ru' => 'Электротерапия',
                ]),
                'content'       => json_encode([
                    'ru' => null,
                ]),
                'banner' => null,
            ],
            [
                'title'       => json_encode([
                    'ru' => 'Магнитотерапия',
                ]),
                'content'       => json_encode([
                    'ru' => null,
                ]),
                'banner' => null,
            ],
            [
                'title'       => json_encode([
                    'ru' => 'Сауна и гидромассажные ванны',
                ]),
                'content'       => json_encode([
                    'ru' => null,
                ]),
                'banner' => null,
            ],
            [
                'title'       => json_encode([
                    'ru' => 'Гипоксическая камера',
                ]),
                'content'       => json_encode([
                    'ru' => null,
                ]),
                'banner' => null,
            ],
            [
                'title'       => json_encode([
                    'ru' => 'PRP - плазмотерапия ',
                ]),
                'content'       => json_encode([
                    'ru' => null,
                ]),
                'banner' => null,
            ],
            [
                'title'       => json_encode([
                    'ru' => 'УВЧ-Терапия',
                ]),
                'content'       => json_encode([
                    'ru' => null,
                ]),
                'banner' => null,
            ],
            [
                'title'       => json_encode([
                    'ru' => 'Текар-терапия INDIBA',
                ]),
                'content'       => json_encode([
                    'ru' => null,
                ]),
                'banner' => null,
            ],
            [
                'title'       => json_encode([
                    'ru' => 'Кислородная терапия',
                ]),
                'content'       => json_encode([
                    'ru' => null,
                ]),
                'banner' => null,
            ],
            [
                'title'       => json_encode([
                    'ru' => 'Термотерапия',
                ]),
                'content'       => json_encode([
                    'ru' => null,
                ]),
                'banner' => null,
            ],
            [
                'title'       => json_encode([
                    'ru' => '4D Диагностика',
                ]),
                'content'       => json_encode([
                    'ru' => null,
                ]),
                'banner' => null,
            ],
            [
                'title'       => json_encode([
                    'ru' => 'Лазерная терапия',
                ]),
                'content'       => json_encode([
                    'ru' => null,
                ]),
                'banner' => null,
            ],
            [
                'title'       => json_encode([
                    'ru' => 'Тракционная терапия',
                ]),
                'content'       => json_encode([
                    'ru' => null,
                ]),
                'banner' => null,
            ],
            [
                'title'       => json_encode([
                    'ru' => 'Термотерапия',
                ]),
                'content'       => json_encode([
                    'ru' => null,
                ]),
                'banner' => null,
            ],
            [
                'title'       => json_encode([
                    'ru' => 'Терапия ультразвуком',
                ]),
                'content'       => json_encode([
                    'ru' => null,
                ]),
                'banner' => null,
            ],
        ]);
    }

}
