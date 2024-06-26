<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGradesTable extends Migration
{
    public function up()
    {
        Schema::create('grades', function (Blueprint $table) {
            $table->id();
            $table->string('name')->index();
            $table->timestamps();
            $table->unsignedBigInteger('student_id')->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('grades');
    }
}
