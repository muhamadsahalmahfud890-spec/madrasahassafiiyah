@extends('layouts.app')

@section('title', ($settings['nama_sekolah'] ?? 'MDTU Assafiiyah') . ' - Beranda')

@section('content')

<!-- 1. HERO SECTION -->
<section class="relative h-screen w-full overflow-hidden">
    <!-- Swiper -->
    <div class="swiper heroSwiper h-full w-full absolute inset-0 z-0">
        <div class="swiper-wrapper">
            <!-- Slide 1 -->
            <div class="swiper-slide h-full w-full">
                <div class="absolute inset-0 bg-primary bg-opacity-80 z-10"></div>
                <img src="{{ !empty($settings['hero_image']) ? asset('storage/' . $settings['hero_image']) : 'foto1.jpeg' }}" class="w-full h-full object-cover" alt="Hero Madrasah">
            </div>
            <!-- Slide 2 -->
            <div class="swiper-slide h-full w-full">
                <div class="absolute inset-0 bg-primary bg-opacity-80 z-10"></div>
                <img src="foto2.jpeg" class="w-full h-full object-cover" alt="Kegiatan Madrasah">
            </div>
            <div class="swiper-slide h-full w-full">
                <div class="absolute inset-0 bg-primary bg-opacity-80 z-10"></div>
                <img src="foto3.jpeg" class="w-full h-full object-cover" alt="Kegiatan Madrasah">
            </div>
            <div class="swiper-slide h-full w-full">
                <div class="absolute inset-0 bg-primary bg-opacity-80 z-10"></div>
                <img src="foto4.jpeg" class="w-full h-full object-cover" alt="Kegiatan Madrasah">
            </div>
            <div class="swiper-slide h-full w-full">
                <div class="absolute inset-0 bg-primary bg-opacity-80 z-10"></div>
                <img src="foto5.jpeg" class="w-full h-full object-cover" alt="Kegiatan Madrasah">
            </div>
        </div>
        <div class="swiper-pagination"></div>
    </div>

    <!-- Hero Content -->
    <div class="relative z-20 h-full max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex flex-col justify-center items-center text-center text-white" data-aos="fade-up" data-aos-duration="1000">
        <p class="font-heading italic text-xl md:text-2xl text-accent mb-4 tracking-wider">﷽</p>
        <p class="text-sm md:text-base font-semibold tracking-widest uppercase mb-4 text-gray-200">Selamat Datang di</p>
        <div class="flex flex-col md:flex-row items-center justify-center gap-4 md:gap-6 mb-6">
            <h1 class="font-heading font-bold text-4xl md:text-6xl lg:text-7xl leading-tight drop-shadow-lg m-0">
                {{ $settings['nama_lengkap'] ?? 'Madrasah Diniyah Takmiliyah Ula Assafiiyah' }}
            </h1>
        </div>
        <p class="text-lg md:text-2xl font-light mb-10 max-w-3xl text-gray-100">
            {{ $settings['tagline'] ?? 'Mendidik Generasi Qurani yang Berakhlak Mulia' }}
        </p>
        
        <div class="flex flex-col sm:flex-row gap-4 w-full sm:w-auto justify-center">
            <a href="{{ route('pmbm') }}" class="px-8 py-3.5 bg-accent text-white font-bold rounded-full shadow-lg hover:bg-yellow-600 hover:shadow-xl hover:-translate-y-1 transition-all duration-300 text-center flex items-center justify-center">
                <i class="fas fa-user-graduate mr-2"></i> Daftar Murid Baru
            </a>
            <a href="{{ route('visi-misi') }}" class="px-8 py-3.5 bg-transparent border-2 border-white text-white font-bold rounded-full hover:bg-white hover:text-primary transition-all duration-300 text-center flex items-center justify-center">
                Pelajari Lebih <i class="fas fa-arrow-right ml-2"></i>
            </a>
        </div>
    </div>
</section>

<!-- 2. SHORTCUT GRID 3x3 -->
<section class="py-16 bg-white relative -mt-10 z-30 rounded-t-3xl shadow-xl mx-4 sm:mx-8 lg:mx-auto max-w-7xl">
    <div class="px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-3 md:grid-cols-3 lg:grid-cols-9 gap-4 md:gap-6 text-center">
            
            @php
                $shortcuts = [
                    ['icon' => 'fa-bullseye', 'label' => 'Visi & Misi', 'route' => 'visi-misi', 'color' => 'bg-primary text-white'],
                    ['icon' => 'fa-building', 'label' => 'Fasilitas', 'route' => 'fasilitas', 'color' => 'bg-accent text-white'],
                    ['icon' => 'fa-sitemap', 'label' => 'Struktur', 'route' => 'struktur-organisasi', 'color' => 'bg-accent text-white'],
                    ['icon' => 'fa-file-signature', 'label' => 'PMBM', 'route' => 'pmbm', 'color' => 'bg-primary text-white'],
                    ['icon' => 'fa-search', 'label' => 'Hasil PMBM', 'route' => 'hasil-pmbm', 'color' => 'bg-accent text-white'],
                ];
            @endphp

            @foreach($shortcuts as $idx => $item)
            <a href="{{ route($item['route']) }}" class="group flex flex-col items-center justify-center p-4 rounded-xl hover:-translate-y-2 transition-transform duration-300 {{ $item['color'] == 'bg-primary text-white' ? 'bg-green-50 hover:bg-primary' : 'bg-yellow-50 hover:bg-accent' }}" data-aos="zoom-in" data-aos-delay="{{ $idx * 50 }}">
                <div class="w-14 h-14 mb-3 rounded-full {{ $item['color'] }} flex items-center justify-center text-xl shadow-md group-hover:bg-white group-hover:{{ str_replace(' text-white', '', str_replace('bg-', 'text-', $item['color'])) }} transition-colors">
                    <i class="fas {{ $item['icon'] }}"></i>
                </div>
                <span class="text-xs sm:text-sm font-semibold {{ $item['color'] == 'bg-primary text-white' ? 'text-primary' : 'text-accent' }} group-hover:text-white transition-colors">
                    {{ $item['label'] }}
                </span>
            </a>
            @endforeach
            
        </div>
    </div>
</section>


<!-- 4. GALERI FOTO -->
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex flex-col md:flex-row justify-between items-end mb-12" data-aos="fade-up">
            <div class="mb-6 md:mb-0">
                <span class="text-accent font-bold tracking-widest uppercase text-sm mb-2 block">Dokumentasi</span>
                <h2 class="font-heading font-bold text-3xl md:text-4xl text-primary">Galeri Madrasah</h2>
                <div class="w-24 h-1 bg-accent mt-6 rounded-full"></div>
            </div>
            <a href="#" class="inline-flex items-center justify-center px-6 py-3 bg-gray-100 text-gray-700 font-bold rounded-full hover:bg-primary hover:text-white transition-colors duration-300">
                Lihat Semua Galeri <i class="fas fa-arrow-right ml-2"></i>
            </a>
        </div>

        <div class="grid grid-cols-2 md:grid-cols-3 gap-4 md:gap-6">
            @forelse($galleries as $idx => $gallery)
                <a href="{{ $gallery->image }}" class="glightbox block relative overflow-hidden rounded-xl group aspect-square md:aspect-video" data-gallery="home-gallery" data-aos="zoom-in" data-aos-delay="{{ $idx * 100 }}">
                    <img src="{{ $gallery->image }}" alt="{{ $gallery->title }}" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                    <div class="absolute inset-0 bg-primary bg-opacity-0 group-hover:bg-opacity-60 transition-all duration-500 flex items-center justify-center">
                        <i class="fas fa-search-plus text-white text-3xl opacity-0 group-hover:opacity-100 transform scale-50 group-hover:scale-100 transition-all duration-500"></i>
                    </div>
                    <div class="absolute bottom-0 left-0 right-0 p-4 bg-gradient-to-t from-black/80 to-transparent translate-y-full group-hover:translate-y-0 transition-transform duration-500">
                        <p class="text-white font-semibold text-sm line-clamp-1">{{ $gallery->title }}</p>
                    </div>
                </a>
            @empty
                @php
                    $dummyGalleries = [
                        ['image' => 'kegiatan1.jpeg', 'title' => 'Kegiatan Madrasah 1'],
                        ['image' => 'kegiatan2.jpeg', 'title' => 'Kegiatan Madrasah 2'],
                        ['image' => 'kegiatan3.jpeg', 'title' => 'Kegiatan Madrasah 3'],
                        ['image' => 'kegiatan4.jpeg', 'title' => 'Kegiatan Madrasah 4'],
                        ['image' => 'foto5.jpeg', 'title' => 'Kegiatan Madrasah 5'],
                        ['image' => 'kegiatan5.jpeg', 'title' => 'Kegiatan Madrasah 6'],
                    ];
                @endphp
                @foreach($dummyGalleries as $idx => $gallery)
                    <a href="{{ asset($gallery['image']) }}" class="glightbox block relative overflow-hidden rounded-xl group aspect-square md:aspect-video" data-gallery="home-gallery" data-aos="zoom-in" data-aos-delay="{{ $idx * 100 }}">
                        <img src="{{ asset($gallery['image']) }}" alt="{{ $gallery['title'] }}" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                        <div class="absolute inset-0 bg-primary bg-opacity-0 group-hover:bg-opacity-60 transition-all duration-500 flex items-center justify-center">
                            <i class="fas fa-search-plus text-white text-3xl opacity-0 group-hover:opacity-100 transform scale-50 group-hover:scale-100 transition-all duration-500"></i>
                        </div>
                        <div class="absolute bottom-0 left-0 right-0 p-4 bg-gradient-to-t from-black/80 to-transparent translate-y-full group-hover:translate-y-0 transition-transform duration-500">
                            <p class="text-white font-semibold text-sm line-clamp-1">{{ $gallery['title'] }}</p>
                        </div>
                    </a>
                @endforeach
            @endforelse
        </div>
    </div>
</section>

<!-- 5. STATISTIK MADRASAH -->
<section class="py-20 bg-primary relative overflow-hidden">
    <!-- Background pattern -->
    <div class="absolute inset-0 opacity-5" style="background-image: url('data:image/svg+xml,%3Csvg width=\'60\' height=\'60\' viewBox=\'0 0 60 60\' xmlns=\'http://www.w3.org/2000/svg\'%3E%3Cg fill=\'none\' fill-rule=\'evenodd\'%3E%3Cg fill=\'%23ffffff\' fill-opacity=\'1\'%3E%3Cpath d=\'M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z\'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E');"></div>
    
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 text-center divide-x-0 md:divide-x divide-white/20">
            <div data-aos="fade-up" data-aos-delay="0">
                <i class="fas fa-users text-4xl text-white/50 mb-4"></i>
                <h3 class="font-heading font-bold text-5xl md:text-6xl text-accent mb-2 counter">{{ $statistik['jumlah_santri'] ??50 }}</h3>
                <p class="text-white font-medium tracking-wider uppercase text-sm">Murid Aktif</p>
            </div>
            <div data-aos="fade-up" data-aos-delay="100">
                <i class="fas fa-chalkboard-teacher text-4xl text-white/50 mb-4"></i>
                <h3 class="font-heading font-bold text-5xl md:text-6xl text-accent mb-2 counter">{{ $settings['tenaga_pengajar'] ?? 5 }}</h3>
                <p class="text-white font-medium tracking-wider uppercase text-sm">Tenaga Pengajar</p>
            </div>
            <div data-aos="fade-up" data-aos-delay="300">
                <i class="fas fa-medal text-4xl text-white/50 mb-4"></i>
                <h3 class="font-heading font-bold text-5xl md:text-6xl text-accent mb-2 counter">{{ $statistik['prestasi'] ?? 0 }}</h3>
                <p class="text-white font-medium tracking-wider uppercase text-sm">Prestasi Murid</p>
            </div>
        </div>
    </div>
</section>

<!-- 6. KONTAK SINGKAT -->
<section class="py-20 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="bg-white rounded-2xl shadow-xl overflow-hidden" data-aos="fade-up">
            <div class="grid grid-cols-1 lg:grid-cols-2">
                <!-- Info Kontak -->
                <div class="p-10 lg:p-16 flex flex-col justify-center">
                    <span class="text-accent font-bold tracking-widest uppercase text-sm mb-2 block">Hubungi Kami</span>
                    <h2 class="font-heading font-bold text-3xl md:text-4xl text-primary mb-8">Informasi Kontak & Jam Belajar</h2>
                    
                    <ul class="space-y-6">
                        <li class="flex items-start">
                            <div class="flex-shrink-0 w-12 h-12 bg-green-50 rounded-full flex items-center justify-center text-primary text-xl">
                                <i class="fas fa-map-marker-alt"></i>
                            </div>
                            <div class="ml-4">
                                <h4 class="font-bold text-gray-900 mb-1">Alamat Madrasah</h4>
                                <p class="text-gray-600">
                                    <a href="https://maps.app.goo.gl/QSkzaFwWG7CTjEsL9" target="_blank" class="hover:text-primary transition-colors">
                                        {{ $settings['alamat'] ?? 'Jl. Kaliasem Rt. 001 Rw. 010 Desa Kejiwan Kec. Susukan Kab. Cirebon Jawa Barat' }}
                                    </a>
                                </p>
                            </div>
                        </li>
                        <li class="flex items-start">
                            <div class="flex-shrink-0 w-12 h-12 bg-green-50 rounded-full flex items-center justify-center text-primary text-xl">
                                <i class="fas fa-phone-alt"></i>
                            </div>
                            <div class="ml-4">
                                <h4 class="font-bold text-gray-900 mb-1">Telepon</h4>
                                <p class="text-gray-600">{{ $settings['telepon'] ?? '0838-2132-1752/0821-2748-2545' }}</p>
                            </div>
                        </li>
                        <li class="flex items-start">
                            <div class="flex-shrink-0 w-12 h-12 bg-green-50 rounded-full flex items-center justify-center text-primary text-xl">
                                <i class="fas fa-clock"></i>
                            </div>
                            <div class="ml-4">
                                <h4 class="font-bold text-gray-900 mb-1">Jam Belajar Madrasah</h4>
                                <p class="text-gray-600">{!! nl2br(e($settings['jam_belajar'] ?? "Senin - sabtu: 14.00 - 17.00 WIB\nAhad: Libur")) !!}</p>
                            </div>
                        </li>
                    </ul>
                </div>
                
                <!-- Google Maps -->
                <div class="h-96 lg:h-auto min-h-[400px] w-full bg-gray-200">
                    @if(!empty($settings['maps_embed']))
                        {!! $settings['maps_embed'] !!}
                    @else
                        <!-- Fallback Map Dummy -->
                        <iframe src="https://maps.google.com/maps?q=Jl.%20Kaliasem%20Rt.%20001%20Rw.%20010%20Desa%20Kejiwan%20Kec.%20Susukan%20Kab.%20Cirebon%20Jawa%20Barat&t=&z=15&ie=UTF8&iwloc=&output=embed" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    @endif
                </div>
            </div>
        </div>
    </div>
</section>

@endsection

@section('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Init Hero Swiper
        const heroSwiper = new Swiper('.heroSwiper', {
            loop: true,
            effect: 'fade',
            autoplay: {
                delay: 5000,
                disableOnInteraction: false,
            },
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
        });
        
        // Ensure Google Map iframe takes full height and width
        const mapContainer = document.querySelector('.h-96.lg\\:h-auto');
        if(mapContainer) {
            const iframe = mapContainer.querySelector('iframe');
            if(iframe) {
                iframe.style.width = '100%';
                iframe.style.height = '100%';
            }
        }
    });
</script>
<style>
    /* Swiper Custom Pagination Color */
    .swiper-pagination-bullet {
        background-color: #ffffff;
        opacity: 0.6;
    }
    .swiper-pagination-bullet-active {
        background-color: #c9a84c;
        opacity: 1;
    }
</style>
@endsection
