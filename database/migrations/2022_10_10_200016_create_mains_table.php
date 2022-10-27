<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMainsTable extends Migration
{
    public function up()
    {
        Schema::create('mains', function (Blueprint $table) {
            $table->id();
            $table->jsonb('title');
            $table->jsonb('description');
            $table->string('image_path');
            $table->jsonb('button_title');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('mains');
    }
}
