<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;
use App\Models\Suplier;
use App\Models\Unit;

class ProductSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    Product::create([
      'category_id' => 1,
      'unit_id' => 1,
      'suplier_id' => 1,
      'name' => 'WAFELO',
      'slug' => 'wafelo',
      'purchase_price' => 1000,
      'price' => 2000,
      'varian' => 'coklat',
      'store_stock' => 10,
      'storage_stock' => 20,
      'description' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Rem autem hic aspernatur sunt nulla delectus et quaerat magnam, ducimus iusto.',
      'weight' => 1000,
      'image_main' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Rerum, reiciendis?',
      'image_url' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Rerum, reiciendis?',
    ]);

    Suplier::create([
      'name' => 'PT Mayora Indah TBK',
      'slug' => 'pt-mayora-indah-tbk',
    ]);

    Unit::create([
      'name' => 'pcs',
      'slug' => 'pcs',
    ]);
  }
}
