<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAppointmentsTable extends Migration
{
    public function up()
    {
        Schema::create('appointments', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->time('start_time');
            $table->time('end_time');
            $table->integer('session_number');
            $table->string('session_type');
            $table->date('session_date');
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
