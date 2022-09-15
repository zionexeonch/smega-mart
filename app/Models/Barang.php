<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
  use HasFactory;

  protected $table = 'databarang';
  protected $primaryKey = 'barcode';
  protected $guarded = [];
  protected $with = ['kategori'];

  public function kategori()
  {
    return $this->belongsTo(Kategori::class, 'kdKategori');
  }

  public function satuan()
  {
    return $this->belongsTo(Satuan::class);
  }

  public function suplier()
  {
    return $this->belongsToMany(Suplier::class);
  }
}
