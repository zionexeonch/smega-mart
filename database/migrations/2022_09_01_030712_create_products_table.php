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
      $table->id();
      $table->foreignId('category_id');
      $table->string('barcode', 13)->nullable()->default('0')->unique();
      $table->string('name');
      $table->string('slug')->unique();
      $table->foreignId('unit_id');
      $table->integer('buy_price')->unsigned()->default(0);
      $table->integer('sold_price')->unsigned()->default(0);
      $table->string('variant')->default('-');
      $table->integer('store_stock')->unsigned()->default(0);
      $table->integer('storage_stock')->unsigned()->default(0);
      $table->integer('weight')->unsigned()->default(0);
      $table->text('description');
      $table->string('image_urls')->default('-');
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
    Schema::dropIfExists('products');
  }
}
