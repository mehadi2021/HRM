<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateResultsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('results', function (Blueprint $table) {
            $table->id();
             $table->string('ra');
            $table->string('rb');
            $table->string('rc');
            $table->string('rd');
            $table->string('re');
            $table->string('rf');
            $table->string('rg');
            $table->string('rh');
            $table->string('ri');
            $table->string('rj');
            $table->string('user_name');
            $table->string('result');
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
        Schema::dropIfExists('results');
    }
}