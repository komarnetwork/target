<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSalaryOtherPaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('salary_other_payments', function (Blueprint $table) {
            $table->bigIncrements('id');
			$table->unsignedBigInteger('employee_id');
			$table->string('other_payment_title');
			$table->string('other_payment_amount');

			$table->foreign('employee_id')->references('id')->on('employees')->onDelete('cascade');

			$table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('salary_other_payments');
    }
}
