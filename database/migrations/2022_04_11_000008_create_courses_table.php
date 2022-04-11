<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoursesTable extends Migration
{
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('duration');
            $table->decimal('price', 15, 2);
            $table->integer('course_days')->nullable();
            $table->string('course_type')->nullable();
            $table->string('training_type')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
