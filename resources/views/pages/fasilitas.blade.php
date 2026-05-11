@extends('layouts.app')
@section('title', 'Fasilitas - MDTU Assafiiyah')

@section('content')
<!-- Hero / Breadcrumb -->
<div class="bg-primary pt-24 pb-12 relative overflow-hidden">
    <div class="absolute inset-0 opacity-10 bg-[url('https://www.transparenttextures.com/patterns/arabesque.png')]"></div>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 text-center">
        <h1 class="font-heading font-bold text-3xl md:text-5xl text-white mb-4">Fasilitas Madrasah</h1>
        <div class="flex items-center justify-center space-x-2 text-sm text-gray-300">
            <a href="{{ route('home') }}" class="hover:text-accent transition-colors">Beranda</a>
            <span>/</span>
            <span class="text-accent">Profil</span>
            <span>/</span>
            <span class="text-white">Fasilitas</span>
        </div>
    </div>
</div>

<section class="py-16 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center max-w-3xl mx-auto mb-16" data-aos="fade-up">
            <h2 class="font-heading font-bold text-3xl text-primary mb-4">Sarana & Prasarana Pendukung</h2>
            <p class="text-gray-600 leading-relaxed">MDTU Assafiiyah berkomitmen menyediakan fasilitas yang nyaman dan representatif untuk mendukung proses kegiatan belajar mengajar murid.</p>
        </div>

        <div class="prose max-w-none text-center mb-12 hidden">
            {!! $page->content !!}
        </div>

        <!-- Fasilitas Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 md:gap-8">
            @php
                $fasilitas = [
                    ['img' => 'https://i.top4top.io/p_3781kmoeq1.jpeg', 'title' => 'Ruang Kelas', 'desc' => 'Ruangan yang nyaman dengan pencahayaan yang optimal.'],
                    ['img' => 'https://picsum.photos/id/1010/800/600', 'title' => 'Ruang Guru', 'desc' => ''],
                ];
            @endphp

            @foreach($fasilitas as $idx => $item)
            <div class="bg-white rounded-xl shadow-md overflow-hidden group hover:shadow-xl transition-all duration-300" data-aos="zoom-in" data-aos-delay="{{ $idx * 100 }}">
                <a href="{{ $item['img'] }}" class="glightbox relative block aspect-video overflow-hidden" data-gallery="fasilitas">
                    <img src="{{ $item['img'] }}" alt="{{ $item['title'] }}" class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-700">
                    <div class="absolute inset-0 bg-primary bg-opacity-0 group-hover:bg-opacity-40 transition-all duration-300 flex items-center justify-center">
                        <i class="fas fa-expand text-white text-3xl opacity-0 group-hover:opacity-100 transform scale-50 group-hover:scale-100 transition-all duration-300"></i>
                    </div>
                </a>
                <div class="p-6">
                    <h3 class="font-heading font-bold text-xl text-primary mb-2">{{ $item['title'] }}</h3>
                    <p class="text-gray-600 text-sm">{{ $item['desc'] }}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endsection
