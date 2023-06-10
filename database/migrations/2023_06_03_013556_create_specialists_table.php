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
        Schema::create('specialists', function (Blueprint $table) {
            $table->integer('idspecialists', true);
            $table->string('name', 45);
            $table->string('lastname', 45);
            $table->string('secondlastname', 45)->nullable();
            $table->string('email', 45)->unique('email_UNIQUE');
            $table->integer('password')->index('fk_specialists_passwords_idx');
            $table->integer('profile')->index('fk_specialists_specialist_profiles1_idx');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('specialists');
    }
};
