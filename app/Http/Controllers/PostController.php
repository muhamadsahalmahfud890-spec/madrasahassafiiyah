<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index(Request $request)
    {
        $query = Post::published()->latest('published_at');
        
        if ($request->has('category')) {
            $query->where('category', $request->category);
        }
        
        $posts = $query->paginate(9);
        return view('pages.artikel.index', compact('posts'));
    }

    public function show($slug)
    {
        $post = Post::published()->where('slug', $slug)->firstOrFail();
        
        $related = Post::published()
            ->where('category', $post->category)
            ->where('id', '!=', $post->id)
            ->latest('published_at')
            ->take(3)
            ->get();
            
        return view('pages.artikel.show', compact('post', 'related'));
    }

    public function pengumuman()
    {
        $posts = Post::published()
            ->where('category', 'pengumuman')
            ->latest('published_at')
            ->paginate(10);
            
        return view('pages.pengumuman', compact('posts'));
    }

    public function prestasi()
    {
        $posts = Post::published()
            ->where('category', 'prestasi')
            ->latest('published_at')
            ->paginate(12);
            
        return view('pages.prestasi', compact('posts'));
    }
}
