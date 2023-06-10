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
        Schema::table('specialties_assoc', function (Blueprint $table) {
            $table->foreign(['specialists'], 'fk_specialties_assoc_specialists1')->references(['idspecialists'])->on('specialists')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign(['specialty'], 'fk_specialties_assoc_specialties1')->references(['idspecialty'])->on('specialties')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('specialties_assoc', function (Blueprint $table) {
            $table->dropForeign('fk_specialties_assoc_specialists1');
            $table->dropForeign('fk_specialties_assoc_specialties1');
        });
    }
};
