@extends('layouts.app')
@section('title', 'Hubungi Kami - MDTU Assafiiyah')

@section('content')
<!-- Hero / Breadcrumb -->
<div class="bg-primary pt-24 pb-12 relative overflow-hidden">
    <div class="absolute inset-0 opacity-10 bg-[url('https://www.transparenttextures.com/patterns/arabesque.png')]"></div>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 text-center">
        <h1 class="font-heading font-bold text-3xl md:text-5xl text-white mb-4">Hubungi Kami</h1>
        <div class="flex items-center justify-center space-x-2 text-sm text-gray-300">
            <a href="{{ route('home') }}" class="hover:text-accent transition-colors">Beranda</a>
            <span>/</span>
            <span class="text-white">Kontak</span>
        </div>
    </div>
</div>

<section class="py-16 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <!-- Flash Message -->
        @if(session('success'))
            <div class="mb-8 p-4 bg-green-100 border border-green-400 text-green-700 rounded-lg flex items-center shadow-sm" data-aos="fade-down">
                <i class="fas fa-check-circle text-2xl mr-3"></i>
                <div>
                    <h4 class="font-bold">Pesan Terkirim!</h4>
                    <p>{{ session('success') }}</p>
                </div>
            </div>
        @endif

        <div class="bg-white rounded-2xl shadow-xl overflow-hidden mb-16">
            <div class="grid grid-cols-1 lg:grid-cols-12">
                
                <!-- KIRI: Info Kontak -->
                <div class="lg:col-span-5 bg-primary text-white p-10 lg:p-14" data-aos="fade-right">
                    <h2 class="font-heading font-bold text-3xl mb-8">Informasi Kontak</h2>
                    
                    <div class="space-y-6">
                        <div class="flex items-start">
                            <i class="fas fa-map-marker-alt text-2xl text-accent mt-1 mr-4 w-6 text-center"></i>
                            <div>
                                <h4 class="font-bold text-lg mb-1">Alamat Madrasah</h4>
                                <p class="text-gray-300 leading-relaxed">
                                    <a href="https://maps.app.goo.gl/QSkzaFwWG7CTjEsL9" target="_blank" class="hover:text-accent transition-colors">
                                        {{ $settings['alamat'] ?? 'Jl. Kaliasem Rt. 001 Rw. 010 Desa Kejiwan Kec. Susukan Kab. Cirebon Jawa Barat' }}
                                    </a>
                                </p>
                            </div>
                        </div>
                        
                        <div class="flex items-center">
                            <i class="fas fa-phone-alt text-2xl text-accent mr-4 w-6 text-center"></i>
                            <div>
                                <h4 class="font-bold text-lg mb-1">Telepon</h4>
                                <p class="text-gray-300">{{ $settings['telepon'] ?? '0838-2132-1752/0821-2748-2545' }}</p>
                            </div>
                        </div>
                        

                        <div class="flex items-start pt-6 border-t border-white/20">
                            <i class="fas fa-clock text-2xl text-accent mt-1 mr-4 w-6 text-center"></i>
                            <div>
                                <h4 class="font-bold text-lg mb-2">Jam Belajar Madrasah</h4>
                                <ul class="text-gray-300 space-y-1">
                                    <li>Senin - Sabtu: 14.00 - 17.00 WIB</li>
                                    <li class="text-accent italic mt-2">Ahad & Hari Libur Nasional: Tutup</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="mt-12">
                        <h4 class="font-bold text-lg mb-4"></h4>
                        <div class="flex space-x-4">
                            @if(!empty($settings['facebook']))
                            <a href="{{ $settings['facebook'] }}" target="_blank" class="w-10 h-10 rounded-full bg-white/10 flex items-center justify-center hover:bg-accent transition-colors">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                            @endif
                            @if(!empty($settings['instagram']))
                            <a href="{{ $settings['instagram'] }}" target="_blank" class="w-10 h-10 rounded-full bg-white/10 flex items-center justify-center hover:bg-accent transition-colors">
                                <i class="fab fa-instagram"></i>
                            </a>
                            @endif
                            @if(!empty($settings['youtube']))
                            <a href="{{ $settings['youtube'] }}" target="_blank" class="w-10 h-10 rounded-full bg-white/10 flex items-center justify-center hover:bg-accent transition-colors">
                                <i class="fab fa-youtube"></i>
                            </a>
                            @endif
                        </div>
                    </div>
                </div>

                <!-- KANAN: Form Kontak -->
                <div class="lg:col-span-7 p-10 lg:p-14" data-aos="fade-left">
                    <h2 class="font-heading font-bold text-3xl text-primary mb-2">Kirim Pesan</h2>
                    <p class="text-gray-600 mb-8">Silakan isi formulir di bawah ini untuk mengirimkan pertanyaan atau saran kepada pihak madrasah.</p>

                    <form action="{{ route('contact.send') }}" method="POST">
                        @csrf
                        <div class="mb-6">
                            <label for="name" class="block text-sm font-semibold text-gray-700 mb-2">Nama Lengkap <span class="text-red-500">*</span></label>
                            <input type="text" name="name" id="name" value="{{ old('name') }}" required class="w-full px-4 py-3 rounded-lg border @error('name') border-red-500 @else border-gray-300 @enderror focus:ring-2 focus:ring-primary focus:border-primary transition-colors outline-none" placeholder="Masukkan nama Anda">
                            @error('name') <span class="text-red-500 text-xs mt-1 block">{{ $message }}</span> @enderror
                        </div>

                        <div class="mb-6">
                            <label for="subject" class="block text-sm font-semibold text-gray-700 mb-2">Subjek <span class="text-red-500">*</span></label>
                            <input type="text" name="subject" id="subject" value="{{ old('subject') }}" required class="w-full px-4 py-3 rounded-lg border @error('subject') border-red-500 @else border-gray-300 @enderror focus:ring-2 focus:ring-primary focus:border-primary transition-colors outline-none" placeholder="Subjek pesan">
                            @error('subject') <span class="text-red-500 text-xs mt-1 block">{{ $message }}</span> @enderror
                        </div>

                        <div class="mb-6">
                            <label for="message" class="block text-sm font-semibold text-gray-700 mb-2">Pesan <span class="text-red-500">*</span></label>
                            <textarea name="message" id="message" rows="5" required class="w-full px-4 py-3 rounded-lg border @error('message') border-red-500 @else border-gray-300 @enderror focus:ring-2 focus:ring-primary focus:border-primary transition-colors outline-none" placeholder="Tuliskan pesan Anda di sini...">{{ old('message') }}</textarea>
                            @error('message') <span class="text-red-500 text-xs mt-1 block">{{ $message }}</span> @enderror
                        </div>

                        <button type="submit" class="w-full md:w-auto px-8 py-3 bg-primary text-white font-bold rounded-lg hover:bg-green-800 transition-colors shadow-lg flex items-center justify-center">
                            <i class="fas fa-paper-plane mr-2"></i> Kirim Pesan
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Section Bawah: Maps -->
<section class="h-96 w-full bg-gray-200 relative z-0">
    @if(!empty($settings['maps_embed']))
        <div class="w-full h-full [&>iframe]:w-full [&>iframe]:h-full">
            {!! $settings['maps_embed'] !!}
        </div>
    @else
        <!-- Fallback Map -->
        <iframe src="https://maps.google.com/maps?q=Jl.%20Kaliasem%20Rt.%20001%20Rw.%20010%20Desa%20Kejiwan%20Kec.%20Susukan%20Kab.%20Cirebon%20Jawa%20Barat&t=&z=15&ie=UTF8&iwloc=&output=embed" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    @endif
</section>
@endsection
