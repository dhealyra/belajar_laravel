<?php

use App\Http\Controllers\CostumerController;
use App\Http\Controllers\KategoriController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\ppdbscontroller;
use App\Models\Barang;
use App\Http\Controllers\SiswasController;
use App\Http\Controllers\PenggunasController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\TeleponController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\PenerbitController;
use App\Http\Controllers\PembeliController;
use App\Http\Controllers\GenreController;
use App\Http\Controllers\BukuController;
use App\Http\Controllers\TransaksiController;







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


// CRUD
Route::resource('siswa', SiswasController::class);

// Route::get('/homee', function() {
//     return 'Selamat Datang Di Halaman Home';
// });


Route::get('/about', function() {
    return 'Selamat Datang Di Halaman About';
});


Route::get('/contact', function() {
    return 'Selamat Datang Di Halaman Contact';
});

// Route::get('/siswa', function () {

//     $data_siswa = ['Dhea', 'Daffa', 'Hana', 'Allia', 'Faza', 'Fazli', 'teman2'];

//     return view('tampil', compact('data_siswa'));
// });

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

Route::get('/barangg', function(){
    $barang = Barang::all();
    return view('tampil_barang', compact('barang'));
});



Route::get('/post', [PostsController::class, 'menampilkan']);
Route::get('/barang', [PostsController::class, 'menampilkan2']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\SiswasController::class, 'index'])->name('siswa');

Route::resource('ppdb', ppdbscontroller::class);

Route::resource('pengguna', PenggunasController::class);
Route::resource('telepon', TeleponController::class);

Route::resource('kategori', KategoriController::class);
Route::resource('produk', ProdukController::class);

Route::resource('product', ProductController::class);
Route::resource('costumer', CostumerController::class);
Route::resource('order', OrderController::class);

Route::resource('penerbit', PenerbitController::class);
Route::resource('pembeli', PembeliController::class);
Route::resource('genre', GenreController::class);
Route::resource('buku', BukuController::class);
Route::resource('transaksi', TransaksiController::class);







 