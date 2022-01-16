<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->string('sku');
            $table->string('name');
            $table->string('deccription');
            $table->Integer('price');
            $table->Integer('productTypeId')->unsigned();
            $table->string('image');
            $table->Integer('providerId')->unsigned();
            $table->boolean('status');
            $table->timestamps();
            $table->foreign('productTypeId')->references('id')->on('product_types');
            $table->foreign('providerId')->references('id')->on('providers');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
