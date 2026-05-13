@extends('layouts.app')
@section('title', 'Prestasi Murid - MDTU Assafiiyah')

@section('content')
<!-- Hero / Breadcrumb -->
<div class="bg-primary pt-24 pb-12 relative overflow-hidden">
    <div class="absolute inset-0 opacity-10 bg-[url('https://www.transparenttextures.com/patterns/arabesque.png')]"></div>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 text-center">
        <h1 class="font-heading font-bold text-3xl md:text-5xl text-white mb-4">Prestasi Murid</h1>
        <div class="flex items-center justify-center space-x-2 text-sm text-gray-300">
            <a href="{{ route('home') }}" class="hover:text-accent transition-colors">Beranda</a>
            <span>/</span>
            <span class="text-white">Prestasi</span>
        </div>
    </div>
</div>

<section class="py-16 bg-gray-50 min-h-[60vh]">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mb-12">
            @forelse($posts as $idx => $post)
                <div data-aos="fade-up" data-aos-delay="{{ ($idx % 3) * 100 }}">
                    <!-- Custom Prestasi Card -->
                    <article class="bg-white rounded-xl shadow-md hover:shadow-xl transform hover:-translate-y-2 transition-all duration-300 overflow-hidden flex flex-col h-full border border-yellow-100">
                        <div class="block relative aspect-video overflow-hidden">
                            <img src="{{ $post->image ? asset('storage/' . $post->image) : 'https://picsum.photos/seed/'.$post->id.'/800/450' }}" 
                                 alt="{{ $post->title }}" loading="lazy" 
                                 class="w-full h-full object-cover transition-transform duration-500 hover:scale-105">
                            
                            <!-- Gold Badge -->
                            <div class="absolute top-4 left-4">
                                <span class="px-3 py-1 rounded-full text-xs font-bold uppercase tracking-wider border backdrop-blur-sm bg-accent/90 text-white shadow-sm border-yellow-300">
                                    <i class="fas fa-trophy mr-1"></i> Prestasi
                                </span>
                            </div>
                        </div>

                        <div class="p-6 flex flex-col flex-grow">
                            <div class="flex items-center text-gray-500 text-xs mb-3">
                                <i class="far fa-calendar-alt mr-2 text-accent"></i>
                                <span>{{ \Carbon\Carbon::parse($post->published_at)->translatedFormat('d M Y') }}</span>
                            </div>

                            <div class="group block mb-3">
                                <h3 class="font-heading font-bold text-xl text-gray-900 group-hover:text-accent transition-colors line-clamp-2 leading-snug">
                                    {{ $post->title }}
                                </h3>
                            </div>

                            <p class="text-gray-600 text-sm mb-6 line-clamp-3 flex-grow">
                                {{ \Illuminate\Support\Str::limit($post->excerpt ?? strip_tags($post->content), 100) }}
                            </p>

                            <div class="mt-auto pt-4 border-t border-gray-100">
                                <span class="inline-flex items-center text-sm font-semibold text-accent">
                                    Detail Prestasi
                                </span>
                            </div>
                        </div>
                    </article>
                </div>
            @empty
                <div class="col-span-full flex flex-col items-center justify-center py-20 text-center" data-aos="zoom-in">
                    <div class="w-20 h-20 bg-yellow-100 rounded-full flex items-center justify-center mb-4 text-accent text-4xl">
                        <i class="fas fa-medal"></i>
                    </div>
                    <h3 class="font-heading font-bold text-2xl text-gray-700 mb-2">Belum Ada Catatan Prestasi</h3>
                    <p class="text-gray-500">Semoga murid madrasah kita segera mengukir prestasi gemilang.</p>
                </div>
            @endforelse
        </div>

        <div class="mt-12 flex justify-center" data-aos="fade-up">
            {{ $posts->links() }}
        </div>

    </div>
</section>
@endsection
