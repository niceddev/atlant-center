<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmailForConsultationsTable extends Migration
{
    public function up()
    {
        Schema::create('email_for_consultations', function (Blueprint $table) {
            $table->id();
            $table->string('email')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('email_for_consultations');
    }
}
