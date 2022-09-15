<?php

namespace App\Http\Controllers;

use App\Models\Unit;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Validation\Validator;

class UnitController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    return view('admin.pages.unit.index', [
      'title' => 'Satuan',
      'units' => Unit::all(),
    ]);
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
    return view('admin.pages.unit.create', [
      'title' => 'Tambah Unit',
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
    // dd($request->all());
    $rules = [
      'slug' => 'required|units:unique',
    ];

    Unit::create([
      'name' => $request->name,
      '$rules[slug]' => Str::slug($request->name),
    ]);
    return redirect()->to('unit')->with('success', 'Satuan berhasil ditambahkan!');
  }

  /**
   * Display the specified resource.
   *
   * @param  \App\Models\Unit  $unit
   * @return \Illuminate\Http\Response
   */
  public function show(Unit $unit)
  {
    //
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  \App\Models\Unit  $unit
   * @return \Illuminate\Http\Response
   */
  public function edit(Unit $unit)
  {
    //
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  \App\Models\Unit  $unit
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, Unit $unit)
  {
    $suplier = Unit::findOrFail($unit->id);
    if ($request->slug != $suplier->slug) {
      $rules['slug'] = 'required|supliers:unique';
    }

    $suplier->update([
      'name' => $request->name,
      'slug' => Str::slug($request->name),
    ]);
    return back()->with('success', 'Satuan berhasil di edit!!');
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  \App\Models\Unit  $unit
   * @return \Illuminate\Http\Response
   */
  public function destroy(Unit $unit)
  {
    $unit = Unit::findOrFail($unit->id);
    $unit->delete($unit->id);
    return back()->with('success', 'Satuan berhasil dihapus!');
  }
}
