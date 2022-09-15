<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    use HasFactory;

    protected $table = 'tabelkategori';
    protected $primaryKey = 'kdKategori';
    protected $guarded = ['kdKategori'];

    public function product()
    {
      return $this->hasMany(Barang::class);
    }
}
