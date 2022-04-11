<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToAppointmentsTable extends Migration
{
    public function up()
    {
        Schema::table('appointments', function (Blueprint $table) {
            $table->unsignedBigInteger('client_name_id')->nullable();
            $table->foreign('client_name_id', 'client_name_fk_6205019')->references('id')->on('clients');
            $table->unsignedBigInteger('course_id')->nullable();
            $table->foreign('course_id', 'course_fk_6205020')->references('id')->on('courses');
            $table->unsignedBigInteger('employee_id')->nullable();
            $table->foreign('employee_id', 'employee_fk_6205021')->references('id')->on('employees');
        });
    }
}
