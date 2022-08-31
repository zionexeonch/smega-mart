<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
      return view('pages.home', [
        "title" => "Beranda"
      ]);
    }

    public function about() {
      return view('pages.about', [
        "title" => "Tentang Kami"
      ]);
    }

    public function contact() {
      return view('pages.contact', [
        "title" => "Kontak Kami"
      ]);
    }

    public function gallery() {
      return view('pages.gallery', [
        "title" => "Galeri"
      ]);
    }
}
