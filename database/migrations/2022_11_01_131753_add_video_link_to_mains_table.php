<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddVideoLinkToMainsTable extends Migration
{
    public function up()
    {
        Schema::table('mains', function (Blueprint $table) {
            $table->string('video_link')->nullable();
        });
    }

    public function down()
    {
        Schema::table('mains', function (Blueprint $table) {
            $table->dropColumn('video_link');
        });
    }
}
