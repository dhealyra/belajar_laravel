<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Costumer extends Model
{
    use HasFactory;
    
    protected $fillable = ['id', 'name_costumer', 'gender', 'contact'];
    public $timestamp = true;

    // relasi
    public function product ()
    {
        return $this->hasMany(Order::class);
    }
}
