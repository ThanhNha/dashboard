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
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('slug');
            $table->decimal('price');
            $table->string('desription');
            $table->string('sku');
            $table->unsignedInteger('id_category')->nullable();
            $table->unsignedInteger('id_inventory')->nullable();
            $table->unsignedInteger('id_discount')->nullable();
            $table->foreign('id_category')->references('id')->on('categories');
            $table->foreign('id_inventory')->references('id')->on('product_inventories');
            $table->foreign('id_discount')->references('id')->on('discounts');
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
};
