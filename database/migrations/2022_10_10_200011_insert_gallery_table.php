<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class InsertGalleryTable extends Migration
{
    public function up()
    {
        DB::table('galleries')->insert([
            [
                'path' => '/img/g1.jpg',
            ],
        ]);
    }
}
