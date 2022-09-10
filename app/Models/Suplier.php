<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Suplier extends Model
{
  use HasFactory;
  protected $guarded = ['id'];
  protected $with = ['product'];

  public function product()
  {
    return $this->hasOne(Product::class);
  }
}
