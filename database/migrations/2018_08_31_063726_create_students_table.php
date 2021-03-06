<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id');
            $table->string('company');
            $table->string('name');
            $table->string('lastname');
            $table->string('identification');
            $table->string('age');
            $table->string('gender');
            $table->string('nationality');
            $table->string('phone');
            $table->string('celular');
            $table->string('address');
            $table->string('city');
            $table->string('state');
            $table->string('country');
            $table->string('zipcode');
            $table->string('email');
            $table->string('marital_status');
            $table->string('start_date');
            $table->string('graduation_date');
            $table->string('dateout');
            $table->string('dateofbirth');
            $table->string('placeofbirth');
            $table->string('datein');
            $table->string('photo');
            $table->string('created_by');

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
