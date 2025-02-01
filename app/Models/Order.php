<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    
    protected $fillable = ['id', 'id_product', 'quantity', 'order_date', 'id_costumer'];
    public $timestamp = true;

    // relasi
    public function product ()
    {
        return $this->belongsTo(Product::class, 'id_product');
    }

    public function costumer ()
    {
        return $this->belongsTo(Costumer::class, 'id_costumer');
    }

}
