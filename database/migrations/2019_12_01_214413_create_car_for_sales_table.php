<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCarForSalesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('car_for_sales', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('car_category_id')->unsigned();
            $table->string('name');
            $table->text('description');
            $table->integer('price');
            $table->string('image');
            $table->integer('discount');
            $table->integer('mileage');
            $table->string('engine');
            $table->integer('year');
            $table->foreign('car_category_id')
                ->references('id')->on('car_categories')
                ->onDelete('cascade');
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
        Schema::dropIfExists('car_for_sales');
    }
}
