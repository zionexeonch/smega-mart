<?php

namespace App\Http\Controllers;

use App\Models\Suplier;
use Facade\FlareClient\View;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class SuplierController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    return View('admin.pages.suplier.index', [
      'title' => 'Suplier',
    ]);
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
    return view('admin.pages.suplier.create', [
      'title' => 'Tambah suplier'
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
    Suplier::create([
      'name' => $request->name,
      'slug' => Str::slug($request->name),
    ]);
  }

  /**
   * Display the specified resource.
   *
   * @param  \App\Models\Suplier  $suplier
   * @return \Illuminate\Http\Response
   */
  public function show(Suplier $suplier)
  {
    return view('admin.pages.suplier.detail', [
      'title' => 'Detail Suplier',
    ]);
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  \App\Models\Suplier  $suplier
   * @return \Illuminate\Http\Response
   */
  public function edit(Suplier $suplier)
  {
    //
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  \App\Models\Suplier  $suplier
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, Suplier $suplier)
  {
    //
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  \App\Models\Suplier  $suplier
   * @return \Illuminate\Http\Response
   */
  public function destroy(Suplier $suplier)
  {
    //
  }
}
