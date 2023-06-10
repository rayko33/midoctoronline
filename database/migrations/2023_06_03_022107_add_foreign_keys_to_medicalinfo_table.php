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
        Schema::table('medicalinfo', function (Blueprint $table) {
            $table->foreign(['specialist'], 'fk_medicalinfo_specialists1')->references(['idspecialists'])->on('specialists')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign(['client'], 'fk_medicalinfo_clients1')->references(['idclient'])->on('clients')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('medicalinfo', function (Blueprint $table) {
            $table->dropForeign('fk_medicalinfo_specialists1');
            $table->dropForeign('fk_medicalinfo_clients1');
        });
    }
};
