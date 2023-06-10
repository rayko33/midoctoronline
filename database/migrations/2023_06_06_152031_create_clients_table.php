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
        Schema::create('clients', function (Blueprint $table) {
            $table->integer('idclient', true);
            $table->string('name', 45);
            $table->string('lastname', 45);
            $table->string('secondlastname', 45)->nullable();
            $table->string('email', 45)->unique('email_UNIQUE');
            $table->string('celphonenumber', 45)->nullable();
            $table->longText('password');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clients');
    }
};
