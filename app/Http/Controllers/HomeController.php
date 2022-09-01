<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function login()
    {
      return view('pages.login', [
        "title" => "Login"
      ]);
    }

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
        "title" => $title
      ]);
    }

    public function productDetail()
    {
      $title = "Produk";

      return view('pages.product.product-detail', [
        "title" => $title
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
