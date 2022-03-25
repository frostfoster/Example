<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddVolumeColumnToApplicationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('applications', function (Blueprint $table) {
            //
            $table->Integer('volume')->nullable();
            $table->string('location',200)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('applications', function (Blueprint $table) {
            //
        });
    }
}
