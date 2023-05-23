<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApplyFormsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('apply_forms', function (Blueprint $table) {
            $table->id();
            $table->foreignId('apply_id');
            $table->string('tittle');
            $table->string('name');
            $table->string('fname');
            $table->string('mname');
            $table->string('date');
            $table->string('email');
            $table->string('phone');
            $table->string('photo');
            $table->string('cv');
            $table->string('address');
            $table->string('status');
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
        Schema::dropIfExists('apply_forms');
    }
}