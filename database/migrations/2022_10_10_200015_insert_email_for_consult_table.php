<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class InsertEmailForConsultTable extends Migration
{
    public function up()
    {
        DB::table('email_for_consultations')->insert([
            [
                'email' => 'noreply@smarty.kz'
            ]
        ]);
    }

}
