<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApplicationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('application', function (Blueprint $table) {
            $table->id();
            $table->tinyInteger('otp');
            $table->tinyInteger('moep');
            $table->string('control_no',45)->nullable();
            $table->date('date_applied')->nullable();
            $table->string('applicant_name',100)->nullabe();
            $table->string('applicant_mailing_address',200)->nullable();
            $table->string('unit',20)->nullable();
            $table->integer('to_be_disposed')->nullable();
            $table->double('estimated_value',11,2)->nullable();
            $table->string('permittee_name',100)->nullable();
            $table->string('cosigned_to',100)->nullable();
            $table->string('mailing_address',200)->nullable();
            $table->integer('no_of_vehicle')->nullable();
            $table->date('date_of_travel')->nullable();
            $table->string('destination',200)->nullable();
            $table->double('bir_tax_amount',11,2)->nullable();
            $table->string('receipt_no',45)->nullable();
            $table->string('place',200)->nullable();
            $table->integer('mineral_id');
            $table->integer('transport_id');
            $table->string('specification',35)->nullable();
            $table->double('certification_fee',11,2)->nullable();
            $table->string('certification_or',25)->nullable();
            $table->date('cerfication_date')->nullable();
            $table->integer('permit_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('application');
    }
}
