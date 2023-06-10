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
        Schema::create('client_specialist_assoc', function (Blueprint $table) {
            $table->integer('clients')->index('fk_client_specialist_assoc_clients1_idx');
            $table->integer('specialists')->index('fk_client_specialist_assoc_specialists1_idx');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('client_specialist_assoc');
    }
};
