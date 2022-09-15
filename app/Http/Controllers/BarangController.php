<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Barang;

class BarangController extends Controller
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
    Barang::create([
      'barcode' => $request->barcode,
      'namaBarang' => $request->namaBarang,
      'slug' => $request->slug,
      'kdKategori' => $request->kdKategori,
      'hrgBeli' => $request->hrgBeli,
      'hrgJual' => $request->hrgJual,
      'stok' => $request->stok,
      'deskripsi' => $request->deskripsi,
      'img_urls' => $request->img_urls,
    ]);
    return redirect()->to('product')->with('success', 'Produk berhasil ditambah!');
  }

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function show($id)
  {
    $product =  Barang::findOrFail($id);
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
  public function edit($id)
  {
    $product = Barang::findOrFail($id);
    return view('admin.pages.product.edit', [
      'title' => 'Edit Produk',
      'product' => $product,
    ]);
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, $id)
  {
    //
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function destroy($id)
  {
    //
  }
}