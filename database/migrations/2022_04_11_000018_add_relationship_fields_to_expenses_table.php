<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToExpensesTable extends Migration
{
    public function up()
    {
        Schema::table('expenses', function (Blueprint $table) {
            $table->unsignedBigInteger('expense_category_id')->nullable();
            $table->foreign('expense_category_id', 'expense_category_fk_6071916')->references('id')->on('expense_categories');
            $table->unsignedBigInteger('employee_name_id')->nullable();
            $table->foreign('employee_name_id', 'employee_name_fk_6414281')->references('id')->on('employees');
            $table->unsignedBigInteger('salary_id')->nullable();
            $table->foreign('salary_id', 'salary_fk_6414271')->references('id')->on('employees');
            $table->unsignedBigInteger('salary_commission_id')->nullable();
            $table->foreign('salary_commission_id', 'salary_commission_fk_6414280')->references('id')->on('employees');
        });
    }
}
