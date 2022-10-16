<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class InsertContactsTable extends Migration
{
    public function up()
    {
        DB::table('contacts')->insert([
            [
                'address'         =>  json_encode([
                    'ru' => 'г. Астана, пр. Туран, 6/1a, здание Национального Теннисного Центра (СК «Даулет»)'
                ]),
                'phone_number'    => '+7 (7172) 728 938',
                'whatsapp_number' => '+7 747 772 8938 (WhatsApp)',
                'email'           => 'atlantmed@gmail.com',
                'graphic'         =>  json_encode([
                    'ru' => 'Понедельник - пятница:  08:00 - 20:00\\r\\n Суббота: 10:00 - 16:00\\r\\n Воскресенье: выходной'
                ]),
                'instagram_link'  => ''
            ]
        ]);
    }

}
