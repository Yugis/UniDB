<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCoursesTable extends Migration
{
    /**
    * Run the migrations.
    *
    * @return void
    */
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->increments('id')->index();
            $table->string('name')->unique();
            $table->string('slug')->unique();
            $table->text('description')->nullable();
            $table->string('room_id')->nullable();
            $table->string('finals_mark')->nullable();
            $table->string('total_grades')->nullable();
            $table->integer('max_attendance')->default(0)->unsigned();
            $table->timestamps();
            $table->integer('faculty_id')->unsigned();
            $table->integer('year_id')->unsigned();
            $table->unique(['name', 'faculty_id']);
        });
    }

    /**
    * Reverse the migrations.
    *
    * @return void
    */
    public function down()
    {
        Schema::dropIfExists('courses');
    }
}
