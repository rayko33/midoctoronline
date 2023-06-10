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
        Schema::table('specialists', function (Blueprint $table) {
            $table->foreign(['profile'], 'fk_specialists_specialist_profiles1')->references(['idprofile'])->on('specialist_profiles')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign(['password'], 'fk_specialists_passwords')->references(['idpassword'])->on('passwords')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('specialists', function (Blueprint $table) {
            $table->dropForeign('fk_specialists_specialist_profiles1');
            $table->dropForeign('fk_specialists_passwords');
        });
    }
};
