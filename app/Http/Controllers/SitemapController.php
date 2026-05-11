<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Sitemap\Sitemap;
use Spatie\Sitemap\Tags\Url;
use App\Models\Post;

class SitemapController extends Controller
{
    public function index()
    {
        $sitemap = Sitemap::create()
            ->add(Url::create('/')->setPriority(1.0)->setChangeFrequency(Url::CHANGE_FREQUENCY_DAILY))
            ->add(Url::create('/sambutan')->setPriority(0.8))
            ->add(Url::create('/visi-misi')->setPriority(0.8))
            ->add(Url::create('/fasilitas')->setPriority(0.8))
            ->add(Url::create('/kurikulum')->setPriority(0.8))
            ->add(Url::create('/tahfidz')->setPriority(0.8))
            ->add(Url::create('/ekstrakurikuler')->setPriority(0.8))
            ->add(Url::create('/agenda')->setPriority(0.8))
            ->add(Url::create('/kontak')->setPriority(0.7))
            ->add(Url::create('/pmbm')->setPriority(0.9))
            ->add(Url::create('/berita')->setPriority(0.9))
            ->add(Url::create('/pengumuman')->setPriority(0.9))
            ->add(Url::create('/prestasi')->setPriority(0.9));

        // Add Posts to sitemap
        $posts = Post::published()->get();
        foreach ($posts as $post) {
            $sitemap->add(Url::create("/post/{$post->slug}")
                ->setLastModificationDate($post->updated_at)
                ->setChangeFrequency(Url::CHANGE_FREQUENCY_MONTHLY)
                ->setPriority(0.6));
        }

        // Simpan ke disk public
        $sitemap->writeToFile(public_path('sitemap.xml'));

        return response()->json(['message' => 'Sitemap berhasil dibuat!']);
    }
}
