<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLeavesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('leaves', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->string('title');
            $table->string('status')->default('pending');
            $table->dateTime('from_date');
            $table->dateTime('to_date');
            $table->string('emergency_contact');
            $table->string('leave_type');
            $table->timestamps();
        });
    }

    /**
     * Reverse the <migrations class="/6/66//">
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('leaves');
    }
}
