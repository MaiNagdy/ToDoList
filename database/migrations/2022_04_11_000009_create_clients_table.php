<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientsTable extends Migration
{
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->datetime('written_at');
            $table->string('name');
            $table->integer('telephone');
            $table->longText('address')->nullable();
            $table->string('course_required')->nullable();
            $table->string('required_training')->nullable();
            $table->integer('number_of_days')->nullable();
            $table->decimal('amount_paid', 15, 2);
            $table->decimal('remainig_amount', 15, 2);
            $table->decimal('amount_total', 15, 2);
            $table->string('learn_before')->nullable();
            $table->string('where')->nullable();
            $table->string('how_you_know_us')->nullable();
            $table->integer('contract');
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
