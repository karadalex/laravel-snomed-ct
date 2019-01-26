<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSctConceptFTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sct_concept_f', function (Blueprint $table) {
            $table->string('id', 18);
            $table->char('effectivetime', 8);
            $table->char('active', 1);
            $table->string('moduleid', 18);
            $table->string('definitionstatusid', 18);

            $table->index('id');
            $table->index('effectivetime');
            $table->index('active');
            $table->index('moduleid');
            $table->index('definitionstatusid');

            $table->charset = 'utf8';
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sct_concept_f');
    }
}
