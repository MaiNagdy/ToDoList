<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeesTable extends Migration
{
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('email')->nullable();
            $table->integer('phone');
            $table->string('working_name');
            $table->boolean('working_days')->default(0)->nullable();
            $table->time('from')->nullable();
            $table->time('to')->nullable();
            $table->boolean('working_days_1')->default(0)->nullable();
            $table->time('from_1')->nullable();
            $table->time('to_1')->nullable();
            $table->boolean('working_days_2')->default(0)->nullable();
            $table->time('from_2')->nullable();
            $table->time('to_3')->nullable();
            $table->boolean('working_day_3')->default(0)->nullable();
            $table->time('from_3')->nullable();
            $table->time('to_4')->nullable();
            $table->boolean('working_days_4')->default(0)->nullable();
            $table->time('from_4')->nullable();
            $table->time('to_5')->nullable();
            $table->boolean('working_days_5')->default(0)->nullable();
            $table->time('from_5')->nullable();
            $table->time('to_6')->nullable();
            $table->decimal('salary', 15, 2);
            $table->float('contract_percentage', 15, 2);
            $table->decimal('commission', 15, 2);
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
