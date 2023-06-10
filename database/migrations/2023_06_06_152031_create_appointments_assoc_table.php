<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('appointments_assoc', function (Blueprint $table) {
            $table->integer('Idappointment_assoc', true);
            $table->integer('appointment')->index('fk_appointments_assoc_appointments1_idx');
            $table->integer('specialist')->index('fk_appointments_assoc_specialists1_idx');
            $table->integer('client')->index('fk_appointments_assoc_clients1_idx');
            $table->integer('appointmentrecords')->index('fk_appointments_assoc_appointment_records1_idx');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('appointments_assoc');
    }
};
