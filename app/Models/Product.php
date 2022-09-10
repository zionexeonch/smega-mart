<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
  use HasFactory;
  protected $guarded = ['id'];
  protected $with = ['unit', 'suplier'];

  public function suplier()
  {
    return $this->belongsTo(Suplier::class);
  }

  public function unit()
  {
    return $this->belongsTo(Unit::class);
  }
}
