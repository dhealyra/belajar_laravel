<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    use HasFactory;

    protected $fillable = ['id', 'genre'];
    public $timestamp = true;

    // relasi ke tabel buku
    public function buku ()
    {
        return $this->hasMany(Buku::class);
    }

    public function transaksi ()
    {
        return $this->hasMany(Transaksi::class);
    }
    
}
