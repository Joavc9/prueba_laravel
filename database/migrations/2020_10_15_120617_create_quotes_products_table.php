<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuotesProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('quotes_products', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('quote');
            $table->foreign('quote')->references('id')->on('quotes');
            $table->unsignedBigInteger('product');
            $table->foreign('product')->references('id')->on('products');
            $table->float('price_product')->nullable();
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
        Schema::dropIfExists('quotes_products');
    }
}
