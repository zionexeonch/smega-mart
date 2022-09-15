<?php

namespace App\Http\Controllers;

<<<<<<< HEAD:app/Http/Controllers/BarangController.php
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use App\Models\Barang;
=======
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
>>>>>>> 9dbb600 (Admin):app/Http/Controllers/ProductController.php

class ProductController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    return view('admin.pages.product.index', [
      'title' => 'Produk',
      'products' => Barang::all(),
    ]);
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
    return view('admin.pages.product.create', [
      'title' => 'Tambah Produk',
    ]);
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(Request $request)
  {
    Product::create([
      'category_id' => $request->category_id,
      'name' => $request->name,
      'slug' => Str::slug($request->slug),
      'unit_id' => $request->unit_id,
      'buy_price' => $request->buy_price,
      'sold_price' => $request->sold_price,
      'variant' => $request->variant,
      'store_stock' => $request->store_stock,
      'storage_stock' => $request->storage_stock,
      'weight' => $request->weight,
      'description' => $request->description,
      'image_urls' => $request->image_urls,
    ]);
    return redirect()->to('product')->with('success', 'Produk berhasil ditambah!');
  }

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
<<<<<<< HEAD:app/Http/Controllers/BarangController.php
  public function show(Barang $product)
  {
    $product = Barang::find($product->id);
=======
  public function show($id)
  {
    $product =  Product::findOrFail($id);
>>>>>>> 9dbb600 (Admin):app/Http/Controllers/ProductController.php
    return view('admin.pages.product.detail', [
      'title' => 'Detail',
      'product' => $product,
    ]);
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
<<<<<<< HEAD:app/Http/Controllers/BarangController.php
  public function edit(Barang $product)
  {
    $product = Barang::find($product->id);
=======
  public function edit($id)
  {
    $product = Product::findOrFail($id);
>>>>>>> 9dbb600 (Admin):app/Http/Controllers/ProductController.php
    return view('admin.pages.product.edit', [
      'title' => 'Edit Produk',
      'product' => $product,
    ]);
  }

  /**
   * Update the specified resource in storage.
   *
<<<<<<< HEAD:app/Http/Controllers/BarangController.php
   * @param  \App\Http\Requests\UpdateProductRequest  $request
   * @param  \App\Models\Barang  $product
   * @return \Illuminate\Http\Response
   */
  public function update(UpdateProductRequest $request, Barang $product)
=======
   * @param  \Illuminate\Http\Request  $request
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, $id)
>>>>>>> 9dbb600 (Admin):app/Http/Controllers/ProductController.php
  {
    //
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
<<<<<<< HEAD:app/Http/Controllers/BarangController.php
  public function destroy(Barang $product)
=======
  public function destroy($id)
>>>>>>> 9dbb600 (Admin):app/Http/Controllers/ProductController.php
  {
    //
  }
}
