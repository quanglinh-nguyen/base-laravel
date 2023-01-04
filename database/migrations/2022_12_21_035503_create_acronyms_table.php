<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAcronymsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('acronyms', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('acronym');
            $table->integer('acronym_column');
            $table->string('full_name');
            $table->unique(['acronym', 'acronym_column']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('acronyms');
    }
}
