<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ChangeOpisToOpisPredmetaInPredmetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('predmets', function (Blueprint $table) {
            $table->renameColumn('Opis','OpisPredmeta');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('predmets', function (Blueprint $table) {
            $table->renameColumn('Opis','OpisPredmeta');
        });
    }
}