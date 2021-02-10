<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterRKD01PeribadiTableAddNoStaf extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('RKD01_Peribadi', function(Blueprint $table){
            $table->string('NoStaf')->nullable()->after('RKD01_Nomatrik');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('RKD01_Peribadi', function(Blueprint $table){
            $table->dropColumn('NoStaf');

        });
    }
}
