<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function index()
    {
      return view('pages.home', [
        "title" => "Beranda"
      ]);
    }

    public function product()
    {
      $title = "Produk";

      return view('pages.product.products', [
        "title" => $title,
        "products" => Barang::latest()->paginate(8)->withQueryString(),
      ]);
    }

    public function productDetail(Barang $product)
    {

      return view('pages.product.product-detail', [
        "title" => $product->namaBarang,
        "product" => $product,
      ]);
    }

    public function about()
    {
      return view('pages.about', [
        "title" => "Tentang Kami"
      ]);
    }

    public function contact()
    {
      return view('pages.contact', [
        "title" => "Kontak Kami"
      ]);
    }

    public function gallery()
    {
      return view('pages.gallery', [
        "title" => "Galeri"
      ]);
    }
}
