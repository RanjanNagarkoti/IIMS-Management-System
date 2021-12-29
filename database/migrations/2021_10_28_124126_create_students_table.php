<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
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
            $table->string('name');
            $table->string('id_card_num')->unique()->nullable();
            $table->string('date_of_birth');
            $table->string('email')->unique();
            $table->enum('gender', ['male', 'female', 'others']);
            $table->string('primary_contact')->unique();
            $table->string('secondary_contact')->unique()->nullable();
            $table->string('photo');
            $table->string('nationality');
            $table->longText('permanent_address');
            $table->longText('temporary_address');
            $table->string('guardian_name');
            $table->string('guardian_contact')->unique();
            $table->string('guardian_relation');

            $table->unsignedBigInteger('class_id');
            $table->foreign('class_id')->references('id')->on('classes');

            $table->unsignedBigInteger('section_id');
            $table->foreign('section_id')->references('id')->on('sections');

            $table->unsignedBigInteger('faculty_id');
            $table->foreign('faculty_id')->references('id')->on('faculties');

            $table->boolean('status')->default(1);
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
        Schema::dropIfExists('students');
    }
}
