<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('/home', function() {
    return 'Selamat Datang Di Halaman Home';
});


Route::get('/about', function() {
    return 'Selamat Datang Di Halaman About';
});


Route::get('/contact', function() {
    return 'Selamat Datang Di Halaman Contact';
});

// route parameter
Route::get('/tes/{nama}/{ttl}/{jk}/{agama}/{alamat}', function($nama, $ttl, $jenis, $agama, $alamat){
    return "Nama : ".$nama."<br>".
            "Tempat Lahir : ".$ttl."<br>".
            "Jenis Kelamin : ".$jenis."<br>".
            "Agama : ".$agama."<br>".
            "Alamat : ".$alamat;
});

Route::get('/hitung/{a}/{b}', function($bil1, $bil2){
    return "Bilangan 1 : ".$bil1."<br>".
            "Bilangan 2 : ".$bil2."<br>".
            "Hitung : ".$bil1 + $bil2;
});

Route::get('/latihan/{a}/{b}/{c}/{d}/{e}/{f}', function($nama, $call, $jenis, $brg, $jmlh, $bayar){
    switch ($jenis) {
        case 'Handphone':
            switch ($brg) {
                case 'Poco':
                    $harga = 3000000;
                    break;

                case 'Samsung':
                    $harga = 5000000;

                case 'Iphone':
                    $harga = 15000000;
                
                default:
                    $harga = 0;
                    break;
            }
            break;

        case 'Laptop':
            switch ($brg) {
                case 'Lenovo':
                    $harga = 4000000;
                    break;
                
                case 'Acer':
                    $harga = 8000000;
                    break;

                case 'Macbook':
                    $harga = 20000000;
                
                default:
                    $harga = 0;
                    break;
            }
            break;

        case 'TV':
            switch ($brg) {
                case 'Toshiba':
                    $harga = 5000000;
                    break;

                case 'Samsung':
                    $harga = 8000000;
                    break;

                case 'LG':
                    $harga = 10000000;
                    break;
                
                default:
                    $harga = 0;
                    break;
            }
            break;
        
        default:
            $harga = 0;
            break;
    }

    switch ($bayar) {
        case 'Cash':
            $diskon = 0;
            break;

        case 'Transfer':
            $diskon = 50000;
            break;
        
        default:
            $diskon = 0;
            break;
    }

    $total = $jmlh * $harga;

    if ($total > 10000000) {
        $cashback = 500000;
    } else {
        $cashback = 0;
    }

    return "Nama : ".$nama."<br>".
            "Telpon : ".$call."<br>".
            "----------------------------------------------- <br>".
            "Jenis Barang : ".$jenis."<br>".
            "Nama Barang : ".$brg."<br>".
            "Harga : ".$harga."<br>".
            "Jumlah : ".$jmlh."<br>".
            "----------------------------------------------- <br>".
            "Total : ".$total."<br>".
            "Cashback : ".$cashback."<br>".
            "Pembayaran : ".$bayar."<br>".
            "Potongan : ".$diskon."<br>".
            "----------------------------------------------- <br>".
            "Total Pembayaran : ".$total-$diskon;
});