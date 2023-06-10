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
        Schema::table('client_specialist_assoc', function (Blueprint $table) {
            $table->foreign(['specialists'], 'fk_client_specialist_assoc_specialists1')->references(['idspecialists'])->on('specialists')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign(['clients'], 'fk_client_specialist_assoc_clients1')->references(['idclient'])->on('clients')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('client_specialist_assoc', function (Blueprint $table) {
            $table->dropForeign('fk_client_specialist_assoc_specialists1');
            $table->dropForeign('fk_client_specialist_assoc_clients1');
        });
    }
};
