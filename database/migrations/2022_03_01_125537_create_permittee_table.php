<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePermitteeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('permittee', function (Blueprint $table) {
            $table->integer('id')->nullable()->primary();
            $table->string('responsible_person',254)->nullable();
            $table->date('date_apprehend')->nullable();
            $table->string('time_apprehend',10)->nullable();
            $table->longText('remark')->nullable();
            $table->integer('violation_permit_id')->nullable();
            $table->string('permit_holder',100);
            $table->string('area_location',255);
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
        Schema::dropIfExists('permittee');
    }
}
