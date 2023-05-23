<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('exams', function (Blueprint $table) {
            $table->id();
            $table->string('qa');
            $table->string('qb');
            $table->string('qc');
            $table->string('qd');
            $table->string('qe');
            $table->string('qf');
            $table->string('qg');
            $table->string('qh');
            $table->string('qi');
            $table->string('qj');
            $table->time('to_time');
            $table->time('end_time');
            $table->string('exam_time');
            
           
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
        Schema::dropIfExists('exams');
    }
}