<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use App\Models\Product;
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

    Category::create([
      'name' => 'Snack',
      'slug' => 'snack'
    ]);

    Category::create([
      'name' => 'Minuman',
      'slug' => 'minuman'
    ]);

    Unit::create([
      'name' => 'PCS',
      'slug' => 'pcs',
    ]);

    Unit::create([
      'name' => 'BKS',
      'slug' => 'bks',
    ]);

    // Product::create([
    //   'category_id' => 1,
    //   'barcode' => time(),
    //   'name' => 'Wafello Choco Blast',
    //   'slug' => 'wafelo-choco-blast',
    //   'unit_id' => 1,
    //   'buy_price' => 5500,
    //   'sold_price' => 6000,
    //   'variant' => 'coklat',
    //   'store_stock' => 10,
    //   'storage_stock' => 20,
    //   'description' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Rem autem hic aspernatur sunt nulla delectus et quaerat magnam, ducimus iusto.',
    //   'weight' => 1000,
    //   'image_urls' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Rerum, reiciendis?',
    // ]);

    Product::factory()->count(10)->create();

  }
}
