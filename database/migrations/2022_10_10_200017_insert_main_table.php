<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class InsertMainTable extends Migration
{
    public function up()
    {
        DB::table('mains')->insert([
            [
                'title'        => json_encode([
                    'ru' => 'Центр ортопедической и спортивной реабилитации «Атлант»',
                ]),
                'description'  => json_encode([
                    'ru' => '<p>Первый в Казахстане специализированный центр, оказывающий высококвалифицированную медицинскую помощь в области функционального восстановления и ортопедической реабилитации, соответствующей мировым стандартам.</p>',
                ]),
                'image_path'   => '/img/bgmain.png',
                'button_title' => json_encode([
                    'ru' => 'Записаться на консультацию',
                ]),
            ]
        ]);
    }
}
