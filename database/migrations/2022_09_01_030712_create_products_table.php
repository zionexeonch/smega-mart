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
      $table->foreignId('unit_id')->unsigned()->default(0);
      $table->foreignId('suplier_id')->unsigned()->default(0);
      // $table->string('barcode', 12)->nullable()->default('0')->unique();
      $table->string('name');
      $table->string('slug')->unique();
      $table->integer('purchase_price')->unsigned()->default(0);
      $table->integer('price')->unsigned()->default(0);
      $table->string('varian')->default('-');
      $table->integer('store_stock')->unsigned()->default(0);
      $table->integer('storage_stock')->unsigned()->default(0);
      $table->string('description')->default('-');
      $table->integer('weight')->unsigned()->default(0);
      $table->string('image_main')->default('-');
      $table->string('image_url')->default('-');
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
