<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeachersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teachers', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('designation');
            $table->string('photo');
            $table->longText('note')->nullable();
            $table->string('qualification');
            $table->string('primary_contact')->unique();
            $table->string('secondary_contact')->unique()->nullable();
            $table->date('date_of_birth');
            $table->enum('gender', ['male', 'female', 'others']);
            $table->string('religion');
            $table->longText('permanent_address');
            $table->longText('temporary_address');
            $table->string('id_card')->unique()->nullable();
            $table->date('joining_date');
            $table->date('leaving_date')->nullable();
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
        Schema::dropIfExists('teachers');
    }
}
