<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMiningTenementPermitTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mining_tenement_permit', function (Blueprint $table) {
            $table->id();
            $table->string('description',100)->nullable();
            $table->string('denominated',100)->nullable();
            $table->date('granted')->nullable();
            $table->date('expired')->nullable();
            $table->string('sitio',50)->nullable();
            $table->string('barangay',50)->nullable();
            $table->string('municipality',50)->nullable();
            $table->string('province',50)->nullable();
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
        Schema::dropIfExists('mining_tenement_permit');
    }
}
