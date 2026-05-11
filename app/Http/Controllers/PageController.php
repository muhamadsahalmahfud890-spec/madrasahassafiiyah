<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Page;

class PageController extends Controller
{
    private function getPage($slug)
    {
        $page = Page::published()->where('slug', $slug)->first();
        if (!$page) {
            $page = new Page();
            $page->title = ucfirst(str_replace('-', ' ', $slug));
            $page->content = '<p class="text-gray-500 italic">Konten untuk halaman ini belum tersedia di database.</p>';
        }
        return $page;
    }

    public function sejarah()
    {
        return view('pages.sejarah');
    }

    public function visiMisi()
    {
        $page = $this->getPage('visi-misi');
        return view('pages.visi-misi', compact('page'));
    }

    public function fasilitas()
    {
        $page = $this->getPage('fasilitas');
        return view('pages.fasilitas', compact('page'));
    }

    public function kurikulum()
    {
        $page = $this->getPage('kurikulum');
        return view('pages.kurikulum', compact('page'));
    }

    public function strukturOrganisasi()
    {
        $page = $this->getPage('struktur-organisasi');
        return view('pages.struktur-organisasi', compact('page'));
    }
}
