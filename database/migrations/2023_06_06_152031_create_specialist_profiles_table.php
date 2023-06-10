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
        Schema::create('specialist_profiles', function (Blueprint $table) {
            $table->integer('idprofile', true);
            $table->string('bio', 45)->nullable();
            $table->integer('yearsexperience')->nullable();
            $table->string('profile_picture', 100)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('specialist_profiles');
    }
};
