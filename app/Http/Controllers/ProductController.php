<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
      $title = "Produk";

      return view('pages.product.products', [
        "title" => $title
      ]);
    }

    public function detail()
    {
      $title = "Produk";

      return view('pages.product.product-detail', [
        "title" => $title
      ]);
    }
}
