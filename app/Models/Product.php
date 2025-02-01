<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = ['id', 'name_product', 'merk', 'price', 'stock'];
    public $timestamp = true;

    // relasi
    public function product ()
    {
        return $this->hasMany(Order::class);
    }
}
