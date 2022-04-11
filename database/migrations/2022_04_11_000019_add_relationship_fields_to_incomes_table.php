<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToIncomesTable extends Migration
{
    public function up()
    {
        Schema::table('incomes', function (Blueprint $table) {
            $table->unsignedBigInteger('income_category_id')->nullable();
            $table->foreign('income_category_id', 'income_category_fk_6071924')->references('id')->on('income_categories');
            $table->unsignedBigInteger('client_name_id')->nullable();
            $table->foreign('client_name_id', 'client_name_fk_6414298')->references('id')->on('clients');
            $table->unsignedBigInteger('client_id')->nullable();
            $table->foreign('client_id', 'client_fk_6322279')->references('id')->on('clients');
        });
    }
}
