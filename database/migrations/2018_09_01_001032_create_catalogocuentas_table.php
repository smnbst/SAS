<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCatalogocuentasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('catalogocuentas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('company');
            $table->string('number');
            $table->string('cuenta');
            $table->string('description');
            $table->string('currency');
            $table->string('valuation_group');
            $table->string('tax_category');
            $table->string('account_plan');
            $table->string('country');
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
        Schema::dropIfExists('catalogocuentas');
    }
}
