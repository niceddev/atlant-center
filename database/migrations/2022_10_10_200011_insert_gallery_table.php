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
            [
                'path' => '/img/g2.jpg',
            ],
            [
                'path' => '/img/g3.jpg',
            ],
            [
                'path' => '/img/g2.jpg',
            ],
            [
                'path' => '/img/g5.jpg',
            ],
            [
                'path' => '/img/g6.jpg',
            ],
            [
                'path' => '/img/g7.jpg',
            ],
            [
                'path' => '/img/g5.jpg',
            ],
        ]);
    }
}
