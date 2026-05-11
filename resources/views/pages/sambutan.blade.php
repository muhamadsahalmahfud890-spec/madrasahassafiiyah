@extends('layouts.app')
@section('title', 'Sambutan Kepala Madrasah - MDTU Assafiiyah')

@section('content')
<!-- Hero / Breadcrumb -->
<div class="bg-primary pt-24 pb-12 relative overflow-hidden">
    <div class="absolute inset-0 opacity-10 bg-[url('https://www.transparenttextures.com/patterns/arabesque.png')]"></div>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 text-center">
        <h1 class="font-heading font-bold text-3xl md:text-5xl text-white mb-4">Sambutan Kepala Madrasah</h1>
        <div class="flex items-center justify-center space-x-2 text-sm text-gray-300">
            <a href="{{ route('home') }}" class="hover:text-accent transition-colors">Beranda</a>
            <span>/</span>
            <span class="text-accent">Profil</span>
            <span>/</span>
            <span class="text-white">Sambutan</span>
        </div>
    </div>
</div>

<section class="py-16 md:py-24 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-12 gap-12 items-start">
            
            <!-- Foto Kiri -->
            <div class="md:col-span-4" data-aos="fade-right">
                <div class="relative rounded-2xl overflow-hidden shadow-2xl group border-4 border-accent">
                    <img src="https://picsum.photos/id/1005/600/800" alt="KH. Ahmad Syafi'i, M.Pd.I" class="w-full h-auto object-cover transform group-hover:scale-105 transition-transform duration-700">
                    <div class="absolute bottom-0 inset-x-0 bg-gradient-to-t from-primary to-transparent pt-20 pb-6 px-6 text-center">
                        <h3 class="font-heading font-bold text-xl text-white mb-1">KH. Ahmad Syafi'i, M.Pd.I</h3>
                        <p class="text-accent text-sm font-semibold">Kepala MDTU Assafiiyah</p>
                    </div>
                </div>
            </div>

            <!-- Konten Kanan -->
            <div class="md:col-span-8" data-aos="fade-left" data-aos-delay="100">
                <div class="prose prose-lg max-w-none text-gray-700">
                    <h2 class="font-heading text-3xl text-primary font-bold mb-6 border-b-2 border-accent inline-block pb-2">Assalamu'alaikum Warahmatullahi Wabarakatuh</h2>
                    
                    <div class="leading-relaxed space-y-4">
                        {!! $page->content !!}
                    </div>

                    <div class="mt-8 pt-6 border-t border-gray-100 italic text-gray-600">
                        <p>"Ya Allah, berikanlah taufik dan hidayah-Mu kepada kami semua dalam mendidik generasi penerus bangsa. Jadikanlah madrasah ini sebagai taman syurga bagi para penuntut ilmu."</p>
                    </div>
                    
                    <div class="mt-8">
                        <p class="font-heading font-bold text-xl text-primary">Wassalamu'alaikum Warahmatullahi Wabarakatuh</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
@endsection
