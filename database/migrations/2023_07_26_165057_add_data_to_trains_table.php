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
        Schema::table('trains', function (Blueprint $table) {
            //Definisco la data di partenza - null
            $table->date('data_partenza')->nullable();
            //Definisco la data odierna - null
            $table->date('data_odierna')->default(date('Y-m-d'));

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('trains', function (Blueprint $table) {
            $table->dropColumn('data_partenza');
            $table->dropColumn('data_odierna');
        });
    }
};
