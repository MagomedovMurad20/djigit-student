<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('name');
            $table->string('email');
            $table->integer('lesson_id')->nullable()->constrained()->onDelete('set null');
            $table->integer('grade_id')->nullable()->constrained()->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('students');
        Schema::table('students', function (Blueprint $table) {
            $table->dropColumn('grade_id');
        });
        Schema::table('students', function (Blueprint $table) {
            $table->dropColumn('lesson_id');
        });
    }
};
