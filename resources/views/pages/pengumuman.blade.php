@extends('layouts.app')
@section('title', 'Pengumuman - MDTU Assafiiyah')

@section('content')
<!-- Hero / Breadcrumb -->
<div class="bg-primary pt-24 pb-12 relative overflow-hidden">
    <div class="absolute inset-0 opacity-10 bg-[url('https://www.transparenttextures.com/patterns/arabesque.png')]"></div>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 text-center">
        <h1 class="font-heading font-bold text-3xl md:text-5xl text-white mb-4">Pengumuman Madrasah</h1>
        <div class="flex items-center justify-center space-x-2 text-sm text-gray-300">
            <a href="{{ route('home') }}" class="hover:text-accent transition-colors">Beranda</a>
            <span>/</span>
            <span class="text-white">Pengumuman</span>
        </div>
    </div>
</div>

<section class="py-16 bg-white min-h-[60vh]">
    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <div class="space-y-6">
            @forelse($posts as $idx => $post)
                <div class="flex flex-col md:flex-row bg-white rounded-xl shadow-sm hover:shadow-md border border-gray-100 overflow-hidden transition-all duration-300 group" data-aos="fade-up" data-aos-delay="{{ ($idx % 5) * 100 }}">
                    <div class="bg-blue-50 md:w-48 flex-shrink-0 flex flex-col justify-center items-center p-6 border-l-4 border-blue-500">
                        <i class="fas fa-bullhorn text-3xl text-blue-500 mb-2 opacity-50 group-hover:opacity-100 transition-opacity group-hover:scale-110 transform duration-300"></i>
                        <span class="font-bold text-gray-900 text-lg">{{ \Carbon\Carbon::parse($post->published_at)->format('d M') }}</span>
                        <span class="text-sm text-gray-500">{{ \Carbon\Carbon::parse($post->published_at)->format('Y') }}</span>
                    </div>
                    <div class="p-6 flex-grow flex flex-col justify-center">
                        <a href="{{ route('artikel.show', $post->slug) }}" class="block">
                            <h3 class="font-heading font-bold text-2xl text-gray-900 group-hover:text-blue-600 transition-colors mb-2 leading-tight">{{ $post->title }}</h3>
                        </a>
                        <p class="text-gray-600 line-clamp-2 mb-4">{{ \Illuminate\Support\Str::limit($post->excerpt ?? strip_tags($post->content), 120) }}</p>
                        <div>
                            <a href="{{ route('artikel.show', $post->slug) }}" class="text-blue-600 font-semibold text-sm hover:text-blue-800 transition-colors inline-flex items-center">
                                Baca Pengumuman <i class="fas fa-arrow-right ml-2 text-xs"></i>
                            </a>
                        </div>
                    </div>
                </div>
            @empty
                <div class="flex flex-col items-center justify-center py-20 text-center bg-gray-50 rounded-2xl border border-gray-100" data-aos="zoom-in">
                    <div class="w-20 h-20 bg-blue-100 rounded-full flex items-center justify-center mb-4 text-blue-500 text-3xl">
                        <i class="fas fa-bell-slash"></i>
                    </div>
                    <h3 class="font-heading font-bold text-2xl text-gray-700 mb-2">Tidak Ada Pengumuman</h3>
                    <p class="text-gray-500">Saat ini tidak ada pengumuman baru dari madrasah.</p>
                </div>
            @endforelse
        </div>

        <div class="mt-12 flex justify-center" data-aos="fade-up">
            {{ $posts->links() }}
        </div>

    </div>
</section>
@endsection
