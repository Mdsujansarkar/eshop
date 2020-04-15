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
            $table      ->increments('id');
            $table      ->string('product_name');
            $table      ->integer('category_id');
            $table      ->integer('brand_id');
            $table      ->float('product_price', 10, 2);
            $table      ->integer('product_quantity');
            $table      ->text('product_long_desc');
            $table      ->text('product_short_desc');
            $table      ->text('product_image');
            $table      ->tinyInteger('publication_status');
            $table      ->timestamps();
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
