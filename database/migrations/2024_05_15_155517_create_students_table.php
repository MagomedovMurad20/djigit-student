<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->unsignedBigInteger('grade_id')->nullable();
            $table->timestamps();

            $table->foreign('grade_id')->references('id')->on('grades')->onDelete('set null');
        });
    }



    public function down()
    {
        Schema::dropIfExists('students');
    }
}
