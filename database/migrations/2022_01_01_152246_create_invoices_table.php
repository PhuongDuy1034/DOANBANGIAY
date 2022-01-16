<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInvoicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('invoices', function (Blueprint $table) {
            $table->increments('id');
            $table->string('code');
            $table->Integer('accountId')->unsigned();
            $table->datetime('isuedDate');
            $table->string('shippingAddress');            
            $table->Integer('shippingPhone');
            $table->Integer('total');
            $table->boolean('status');
            $table->timestamps();
            $table->foreign('accountId')->references('id')->on('accounts');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('invoices');
    }
}
