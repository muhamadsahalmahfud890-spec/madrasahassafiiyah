@php
    $settings = \Illuminate\Support\Facades\Cache::get('all_settings', []);
@endphp
<!-- Quotes Section -->
<div class="bg-accent py-8 mt-auto">
    <div class="max-w-4xl mx-auto px-4 text-center">
        <i class="fas fa-quote-left text-primary opacity-30 text-3xl mb-3"></i>
        <p class="font-heading italic text-xl md:text-2xl text-primary font-medium tracking-wide">
            "Tuntutlah ilmu dari buaian hingga liang lahat."
        </p>
    </div>
</div>

<footer class="bg-primary text-white pt-16 pb-8 border-t-4 border-accent">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-12 gap-10 lg:gap-12 mb-12">
            
            <!-- Kolom 1: Profil-->
            <div class="md:col-span-5" data-aos="fade-up">
                <div class="flex items-center gap-3 mb-6">
                    @if(!empty($settings['logo']))
                        <img src="{{ asset('storage/' . $settings['logo.jpeg']) }}" alt="Logo Footer MDTU Assafiiyah" class="h-14 w-auto">
                    @else
                        <div class="bg-white rounded-full p-0.1 shadow-sm border border-gray-100">
                            <img src="{{ asset('logo.jpeg') }}" alt="Logo Footer MDTU Assafiiyah" class="h-14 w-auto">
                        </div>
                    @endif
                    <span class="font-heading font-bold text-2xl">{{ $settings['nama_sekolah'] ?? 'MDTU Assafiiyah' }}</span>
                </div>
                <p class="text-gray-200 text-sm mb-6 leading-relaxed">
                    {{ $settings['nama_lengkap'] ?? 'Madrasah Diniyah Takmiliyah Ula Assafiiyah' }}. <br>
                    Mendidik Generasi Qurani yang Berakhlak Mulia.
                </p>
                <ul class="space-y-4 text-sm text-gray-200">
                    <li class="flex items-start">
                        <i class="fas fa-map-marker-alt mt-1 w-6 text-accent"></i>
                        <span class="leading-relaxed">
                            <a href="https://maps.app.goo.gl/QSkzaFwWG7CTjEsL9" target="_blank" class="hover:text-accent transition-colors">
                                {{ $settings['alamat'] ?? 'Jl. Kaliasem Rt. 001 Rw. 010 Desa Kejiwan Kec. Susukan Kab. Cirebon Jawa Barat' }}
                            </a>
                        </span>
                    </li>
                    <li class="flex items-center">
                        <i class="fas fa-phone w-6 text-accent"></i>
                        <span>{{ $settings['telepon'] ?? '0838-2132-1752/0821-2748-2545' }}</span>
                    </li>

                </ul>
            </div>

            <!-- Kolom 2: Tautan Cepat -->
            <div class="md:col-span-4" data-aos="fade-up" data-aos-delay="100">
                <h3 class="font-heading font-semibold text-xl mb-6 flex items-center text-accent">
                    Tautan Cepat
                </h3>
                <ul class="grid grid-cols-2 gap-x-4 gap-y-3 text-sm text-gray-300">
                    <li><a href="{{ route('home') }}" class="hover:text-accent transition-colors flex items-center"><i class="fas fa-chevron-right text-[10px] mr-2 text-accent"></i> Beranda</a></li>
                    <li><a href="{{ route('visi-misi') }}" class="hover:text-accent transition-colors flex items-center"><i class="fas fa-chevron-right text-[10px] mr-2 text-accent"></i> Profil</a></li>
                    <li><a href="{{ route('pmbm') }}" class="hover:text-accent transition-colors flex items-center"><i class="fas fa-chevron-right text-[10px] mr-2 text-accent"></i> PMBM</a></li>
                    <li><a href="{{ route('kontak') }}" class="hover:text-accent transition-colors flex items-center"><i class="fas fa-chevron-right text-[10px] mr-2 text-accent"></i> Kontak</a></li>
                </ul>
            </div>

            <!-- Kolom 3: Sosial Media -->
            <div class="md:col-span-3" data-aos="fade-up" data-aos-delay="200">
                <h3 class="font-heading font-semibold text-xl mb-6 flex items-center text-accent">
                    
                </h3>
                <p class="text-gray-300 text-sm mb-6 leading-relaxed">
                    
                </p>
                <div class="flex space-x-3">
                    @if(!empty($settings['facebook']))
                    <a href="{{ $settings['facebook'] }}" target="_blank" class="h-10 w-10 rounded-full bg-white bg-opacity-10 flex items-center justify-center hover:bg-accent hover:text-white transition-all transform hover:-translate-y-1">
                        <i class="fab fa-facebook-f text-lg"></i>
                    </a>
                    @endif
                    
                    @if(!empty($settings['instagram']))
                    <a href="{{ $settings['instagram'] }}" target="_blank" class="h-10 w-10 rounded-full bg-white bg-opacity-10 flex items-center justify-center hover:bg-accent hover:text-white transition-all transform hover:-translate-y-1">
                        <i class="fab fa-instagram text-lg"></i>
                    </a>
                    @endif
                    
                    @if(!empty($settings['youtube']))
                    <a href="{{ $settings['youtube'] }}" target="_blank" class="h-10 w-10 rounded-full bg-white bg-opacity-10 flex items-center justify-center hover:bg-accent hover:text-white transition-all transform hover:-translate-y-1">
                        <i class="fab fa-youtube text-lg"></i>
                    </a>
                    @endif
                </div>
            </div>

        </div>

        <!-- Copyright -->
        <div class="border-t border-white border-opacity-10 pt-8 mt-4 text-center md:text-left flex flex-col md:flex-row justify-between items-center text-sm text-gray-400">
            <p>&copy; {{ date('Y') }} <span class="text-white">{{ $settings['nama_sekolah'] ?? 'MDTU Assafiiyah' }}</span>. Hak cipta dilindungi undang-undang.</p>
            <p class="mt-2 md:mt-0">Dibuat dengan ❤️ oleh Tim Mahasiswa STMIK IKMI Cirebon</p>
        </div>
    </div>
</footer>
