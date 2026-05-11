@extends('layouts.app')
@section('title', 'Program Tahfidz - MDTU Assafiiyah')

@section('content')
<!-- Hero / Breadcrumb -->
<div class="bg-primary pt-24 pb-12 relative overflow-hidden">
    <div class="absolute inset-0 opacity-10 bg-[url('https://www.transparenttextures.com/patterns/arabesque.png')]"></div>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 text-center">
        <h1 class="font-heading font-bold text-3xl md:text-5xl text-white mb-4">Program Tahfidzul Quran</h1>
        <div class="flex items-center justify-center space-x-2 text-sm text-gray-300">
            <a href="{{ route('home') }}" class="hover:text-accent transition-colors">Beranda</a>
            <span>/</span>
            <span class="text-accent">Profil</span>
            <span>/</span>
            <span class="text-white">Tahfidz</span>
        </div>
    </div>
</div>

<!-- Quotes Al-Quran -->
<section class="py-12 bg-accent text-white text-center">
    <div class="max-w-4xl mx-auto px-4" data-aos="zoom-in">
        <i class="fas fa-book-open text-4xl mb-4 opacity-50"></i>
        <p class="text-xl md:text-2xl mb-4 font-arabic leading-loose">وَلَقَدْ يَسَّرْنَا الْقُرْآنَ لِلذِّكْرِ فَهَلْ مِنْ مُدَّكِرٍ</p>
        <p class="italic">"Dan sungguh, telah Kami mudahkan Al-Qur'an untuk peringatan (pelajaran), maka adakah orang yang mau mengambil pelajaran?"</p>
        <p class="text-sm font-semibold mt-2">(Q.S. Al-Qamar: 17)</p>
    </div>
</section>

<section class="py-16 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <div class="grid grid-cols-1 md:grid-cols-2 gap-12 lg:gap-16 items-center mb-16">
            <div data-aos="fade-right">
                <img src="https://picsum.photos/id/1025/800/600" alt="Tahfidz Quran" class="rounded-2xl shadow-xl w-full border-4 border-gray-100">
            </div>
            <div data-aos="fade-left">
                <h2 class="font-heading font-bold text-3xl text-primary mb-6 border-b-2 border-accent inline-block pb-2">Tentang Program Tahfidz</h2>
                <div class="prose prose-lg text-gray-700 leading-relaxed">
                    {!! $page->content !!}
                </div>
            </div>
        </div>

        <div class="bg-gray-50 rounded-3xl p-8 md:p-12 shadow-inner border border-gray-200" data-aos="fade-up">
            <div class="text-center mb-12">
                <h2 class="font-heading font-bold text-3xl text-primary">Target Hafalan Murid</h2>
                <div class="w-24 h-1 bg-accent mx-auto mt-4 rounded-full"></div>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 text-center">
                <!-- Kelas 1 -->
                <div class="bg-white p-6 rounded-xl shadow-md border-t-4 border-primary hover:-translate-y-2 transition-transform duration-300">
                    <div class="w-16 h-16 bg-green-50 text-primary rounded-full flex items-center justify-center text-2xl font-bold mx-auto mb-4">1</div>
                    <h3 class="font-bold text-lg text-gray-900 mb-2">Kelas Awaliyah 1</h3>
                    <p class="text-gray-600 text-sm">Hafalan Surah An-Nas hingga Ad-Duha</p>
                </div>
                <!-- Kelas 2 -->
                <div class="bg-white p-6 rounded-xl shadow-md border-t-4 border-primary hover:-translate-y-2 transition-transform duration-300">
                    <div class="w-16 h-16 bg-green-50 text-primary rounded-full flex items-center justify-center text-2xl font-bold mx-auto mb-4">2</div>
                    <h3 class="font-bold text-lg text-gray-900 mb-2">Kelas Awaliyah 2</h3>
                    <p class="text-gray-600 text-sm">Hafalan Surah Al-Lail hingga An-Naba</p>
                </div>
                <!-- Kelas 3 -->
                <div class="bg-white p-6 rounded-xl shadow-md border-t-4 border-accent hover:-translate-y-2 transition-transform duration-300">
                    <div class="w-16 h-16 bg-yellow-50 text-accent rounded-full flex items-center justify-center text-2xl font-bold mx-auto mb-4">3</div>
                    <h3 class="font-bold text-lg text-gray-900 mb-2">Kelas Wustho 3</h3>
                    <p class="text-gray-600 text-sm">Murojaah Juz 30 penuh & Hafalan Pilihan</p>
                </div>
                <!-- Kelas 4 -->
                <div class="bg-white p-6 rounded-xl shadow-md border-t-4 border-accent hover:-translate-y-2 transition-transform duration-300">
                    <div class="w-16 h-16 bg-yellow-50 text-accent rounded-full flex items-center justify-center text-2xl font-bold mx-auto mb-4">4</div>
                    <h3 class="font-bold text-lg text-gray-900 mb-2">Kelas Ulya 4</h3>
                    <p class="text-gray-600 text-sm">Pemantapan Juz 30 & Ujian Munaqosah</p>
                </div>
            </div>
        </div>

    </div>
</section>
@endsection
