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
        Schema::create('specialties_assoc', function (Blueprint $table) {
            $table->integer('idspecialties_assoc', true);
            $table->integer('specialists')->index('fk_specialties_assoc_specialists1_idx');
            $table->integer('specialty')->index('fk_specialties_assoc_specialties1_idx');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('specialties_assoc');
    }
};
