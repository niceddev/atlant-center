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
                    'ru' => '<p>ПН-ПТ - 10:00-18:00</p><p>СБ - 10:00-16:00</p>',
                ]),
                'biography' =>  json_encode([
                    'ru' => '<p>Образование:</p>
            <ul>
              <li>ЗКГМА им. М.Оспанова, лечебный факультет 2005г.</li>
              <li>Интернатура травматология и ортопедии 2006г.</li>
              <li>Специализация по реабилитологии 2014г.</li>
            </ul>
            <p>Навыки:</p>
            <ul>
              <li>Ортопедическая диагностика, диагностика мышечного диссбалансов, постуральных нарушений.</li>
              <li>Подбор индивидуальных упражнений для лечения мышечно-скелетных болей.</li>
              <li>Мобилизация суставов c движением (Mulligan Concept).</li>
              <li>Мануальная терапия по концепции Мэйтланда (Basic course), когнитивная терапия при хронических болевых синдромах.</li>
            </ul>',
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
                    'ru' => '<p>ПН,СР,ПТ 9:00-17:00 </p><p>ВТ,ЧТ 12:00-20:00 </p><p>СБ 10:00-16:00</p>',
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
                    'ru' => '<p>ПН-ПТ 10:00-18:00</p><p>СБ 10:00-16:00</p>',
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
                    'ru' => '<p>ПН-ПТ 17:00-20:00</p><p>СБ 10:00-16:00</p>',
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
                    'ru' => '<p>ПН-ПТ 10:00-18:00</p><p>СБ 10:00-16:00</p>',
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
