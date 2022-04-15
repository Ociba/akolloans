<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->foreignId('package_id')->nullable();
            $table->foreignId('district_id');
            $table->string('phone_number');
            $table->string('nin_number');
            $table->string('tin_number')->nullable();
            $table->string('computer_no')->nullable();
            $table->string('date_of_birth');
            $table->string('employment_status');
            $table->string('employer');
            $table->string('loan_amount');
            $table->string('loan_due_date')->nullable();
            $table->enum('loan_status',['active','paid','overdue'])->default('active');
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
        Schema::dropIfExists('clients');
    }
}
