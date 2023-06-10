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
        Schema::table('appointments_assoc', function (Blueprint $table) {
            $table->foreign(['client'], 'fk_appointments_assoc_clients1')->references(['idclient'])->on('clients')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign(['appointment'], 'fk_appointments_assoc_appointments1')->references(['idappointments'])->on('appointments')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign(['specialist'], 'fk_appointments_assoc_specialists1')->references(['idspecialists'])->on('specialists')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign(['appointmentrecords'], 'fk_appointments_assoc_appointment_records1')->references(['idappointmentrecord'])->on('appointment_records')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('appointments_assoc', function (Blueprint $table) {
            $table->dropForeign('fk_appointments_assoc_clients1');
            $table->dropForeign('fk_appointments_assoc_appointments1');
            $table->dropForeign('fk_appointments_assoc_specialists1');
            $table->dropForeign('fk_appointments_assoc_appointment_records1');
        });
    }
};
