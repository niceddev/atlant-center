<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class InsertDoctorsTable extends Migration
{
    public function up()
    {
        DB::table('doctors')->insert([
            [
                'full_name' => json_encode([
                    'ru' => 'Тимур Утивленов',
                ]),
                'speciality' => json_encode([
                    'ru' => 'Врач ортопед-травматолог, реабилитолог',
                ]),
                'graphic' =>  json_encode([
                    'ru' => 'ПН-ПТ - 10:00-18:00
СБ - 10:00-16:00',
                ]),
                'biography' =>  json_encode([
                    'ru' => 'Образование:
ЗКГМА им. М.Оспанова, лечебный факультет 2005г.
Интернатура травматология и ортопедии 2006г.
Специализация по реабилитологии 2014г.
Навыки:
Ортопедическая диагностика, диагностика мышечного диссбалансов, постуральных нарушений.
Подбор индивидуальных упражнений для лечения мышечно-скелетных болей.
Мобилизация суставов c движением (Mulligan Concept).
Мануальная терапия по концепции Мэйтланда (Basic course), когнитивная терапия при хронических болевых синдромах.
​Опыт работы:
Медицинский центр «Евразия» 2007-2010г.
Травматологический пункт БСМП г.Актобе 2011-2012г.
Реабилитационный центр «Дару» г. Актобе 2013-2014г.
Спортивно-реабилитационный центр "Атлант" 2016г.​',
                ]),
                'photo' => '/img/p1.jpg',
            ],
            [
                'full_name' => json_encode([
                    'ru' => 'Татьяна Приходько',
                ]),
                'speciality' => json_encode([
                    'ru' => 'Врач-реабилитолог',
                ]),
                'graphic' =>  json_encode([
                    'ru' => 'ПН,СР,ПТ 9:00-17:00
ВТ,ЧТ 12:00-20:00
СБ 10:00-16:00',
                ]),
                'biography' =>  json_encode([
                    'ru' => null,
                ]),
                'photo' => '/img/p2.jpg',
            ],
            [
                'full_name' => json_encode([
                    'ru' => 'Азамат Естаев',
                ]),
                'speciality' => json_encode([
                    'ru' => 'Врач-травматолог, реабилитолог',
                ]),
                'graphic' =>  json_encode([
                    'ru' => 'ПН-ПТ 10:00-18:00
СБ 10:00-16:00',
                ]),
                'biography' =>  json_encode([
                    'ru' => null,
                ]),
                'photo' => '/img/p3.jpg',
            ],
            [
                'full_name' => json_encode([
                    'ru' => 'Жанат Жандаев',
                ]),
                'speciality' => json_encode([
                    'ru' => 'Врач-реабилитолог',
                ]),
                'graphic' =>  json_encode([
                    'ru' => 'ПН-ПТ 17:00-20:00
СБ 10:00-16:00',
                ]),
                'biography' =>  json_encode([
                    'ru' => null,
                ]),
                'photo' => '/img/p4.jpg',
            ],
            [
                'full_name' => json_encode([
                    'ru' => 'Александр Мирончик',
                ]),
                'speciality' => json_encode([
                    'ru' => 'Инструктор ЛФК',
                ]),
                'graphic' =>  json_encode([
                    'ru' => null,
                ]),
                'biography' =>  json_encode([
                    'ru' => null,
                ]),
                'photo' => '/img/p5.jpg',
            ],
            [
                'full_name' => json_encode([
                    'ru' => 'Ильхом Медаев',
                ]),
                'speciality' => json_encode([
                    'ru' => 'Массажист',
                ]),
                'graphic' =>  json_encode([
                    'ru' => 'ПН-ПТ 10:00-18:00
СБ 10:00-16:00',
                ]),
                'biography' =>  json_encode([
                    'ru' => null,
                ]),
                'photo' => '/img/p6.jpg',
            ],
            [
                'full_name' => json_encode([
                    'ru' => 'Асылбек Дабылов',
                ]),
                'speciality' => json_encode([
                    'ru' => 'Массажист',
                ]),
                'graphic' =>  json_encode([
                    'ru' => null,
                ]),
                'biography' =>  json_encode([
                    'ru' => null,
                ]),
                'photo' => '/img/p7.jpg',
            ],
        ]);
    }

}
