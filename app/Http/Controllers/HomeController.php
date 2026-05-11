<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Setting;
use App\Models\Post;
use App\Models\Gallery;
use App\Models\PmbmRegistration;
use Illuminate\Support\Facades\Cache;

class HomeController extends Controller
{
    public function index()
    {
        // Ambil settings dari Cache::rememberForever
        $settings = Cache::rememberForever('all_settings', function () {
            return Setting::pluck('value', 'key')->toArray();
        });

        // Ambil 3 artikel terbaru kategori berita (cache 1 jam)
        $berita = Cache::remember('latest_berita', 3600, function () {
            return Post::published()
                ->where('category', 'berita')
                ->latest('published_at')
                ->take(3)
                ->get();
        });

        // Ambil 6 galeri terbaru
        $galleries = Gallery::latest()->take(6)->get();

        // Hitung statistik
        $statistik = Cache::remember('statistik_home', 3600, function () use ($settings) {
            return [
                'prestasi' => Post::published()->where('category', 'prestasi')->count(),
                'pendaftar' => PmbmRegistration::count(),
                'jumlah_santri' => $settings['jumlah_santri'] ?? 150, // Default if not in settings
            ];
        });

        return view('pages.home', compact('settings', 'berita', 'galleries', 'statistik'));
    }
}
