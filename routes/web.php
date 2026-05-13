<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\AgendaController;
use App\Http\Controllers\PmbmController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\SitemapController;

// Beranda
Route::get('/', [HomeController::class, 'index'])->name('home');

Route::controller(PageController::class)->prefix('profil')->group(function () {
    Route::get('/sejarah', 'sejarah')->name('sejarah');
    Route::get('/visi-misi', 'visiMisi')->name('visi-misi');
    Route::get('/fasilitas', 'fasilitas')->name('fasilitas');

    Route::get('/struktur-organisasi', 'strukturOrganisasi')->name('struktur-organisasi');
});



// PMBM (Penerimaan Murid Baru Madrasah)
Route::get('/pmbm', [PmbmController::class, 'index'])->name('pmbm');
Route::post('/pmbm/daftar', [PmbmController::class, 'store'])->name('pmbm.store');
Route::get('/pmbm/cetak/{id}', [PmbmController::class, 'cetak'])->name('pmbm.cetak');
Route::get('/hasil-pmbm', [PmbmController::class, 'hasil'])->name('hasil-pmbm');

// Kontak
Route::get('/kontak', [ContactController::class, 'index'])->name('kontak');
Route::post('/kontak', [ContactController::class, 'send'])->name('contact.send');

// Prestasi
Route::get('/prestasi', [PostController::class, 'prestasi'])->name('prestasi');

// Sitemap
Route::get('/sitemap.xml', [SitemapController::class, 'index'])->name('sitemap');

