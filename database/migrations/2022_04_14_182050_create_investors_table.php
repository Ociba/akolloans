<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInvestorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('investors', function (Blueprint $table) {
            $table->id();
            $table->foreignId('bought_by');
            $table->foreignId('district_id');
            $table->foreignId('package_id');
            $table->string('amount_deposited');
            $table->string('period');
            $table->string('expiry_date');
            $table->string('contact');
            $table->string('photo');
            $table->enum('investor_status',['active','suspended'])->default('active');
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
        Schema::dropIfExists('investors');
    }
}
