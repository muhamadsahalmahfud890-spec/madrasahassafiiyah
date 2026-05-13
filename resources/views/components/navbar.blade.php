@php
    $settings = \Illuminate\Support\Facades\Cache::get('all_settings', []);
@endphp
<nav class="bg-white shadow-md sticky top-0 z-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-20">
            <!-- Logo Section -->
            <div class="flex items-center">
                <a href="{{ route('home') }}" class="flex items-center gap-3">
                    @if(!empty($settings['logo']))
                        <img src="{{ asset('storage/' . $settings['logo']) }}" alt="Logo" class="h-12 w-auto">
                    @else
                        <img src="{{ asset('logo.jpeg') }}" alt="logo" class="h-12 w-auto">
                    @endif
                    <div class="flex flex-col">
                        <span class="font-heading font-bold text-lg text-primary leading-tight">{{ $settings['nama_sekolah'] ?? 'MDTU Assafiiyah' }}</span>
                    </div>
                </a>
            </div>

            <!-- Desktop Menu -->
            <div class="hidden md:flex items-center space-x-1 lg:space-x-4">
                <a href="{{ route('home') }}" class="px-3 py-2 text-sm font-medium hover:text-accent transition-colors {{ request()->routeIs('home') ? 'border-b-2 border-accent text-accent' : 'text-gray-700' }}">Beranda</a>

                <!-- Profil Dropdown -->
                <div class="relative group h-full flex items-center">
                    <button class="flex items-center px-3 py-2 text-sm font-medium text-gray-700 hover:text-accent transition-colors focus:outline-none">
                        Profil <i class="fas fa-chevron-down ml-1 text-[10px]"></i>
                    </button>
                    <div class="absolute top-[60px] left-0 w-48 bg-white border border-gray-100 shadow-lg rounded-md opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 transform origin-top">
                        <a href="{{ route('sejarah') }}" class="block px-4 py-3 text-sm text-gray-700 hover:bg-gray-50 hover:text-primary border-b border-gray-50">Sejarah & Identitas</a>
                        <a href="{{ route('visi-misi') }}" class="block px-4 py-3 text-sm text-gray-700 hover:bg-gray-50 hover:text-primary border-b border-gray-50">Visi & Misi</a>
                        <a href="{{ route('fasilitas') }}" class="block px-4 py-3 text-sm text-gray-700 hover:bg-gray-50 hover:text-primary border-b border-gray-50">Fasilitas</a>

                        <a href="{{ route('struktur-organisasi') }}" class="block px-4 py-3 text-sm text-gray-700 hover:bg-gray-50 hover:text-primary border-b border-gray-50">Struktur Organisasi</a>
                        <a href="{{ route('prestasi') }}" class="block px-4 py-3 text-sm text-gray-700 hover:bg-gray-50 hover:text-primary">Prestasi Murid</a>
                    </div>
                </div>



                <!-- PMBM Dropdown -->
                <div class="relative group h-full flex items-center">
                    <button class="flex items-center px-3 py-2 text-sm font-medium text-gray-700 hover:text-accent transition-colors focus:outline-none {{ request()->routeIs('pmbm*') || request()->routeIs('hasil-pmbm') ? 'border-b-2 border-accent text-accent' : '' }}">
                        PMBM <i class="fas fa-chevron-down ml-1 text-[10px]"></i>
                    </button>
                    <div class="absolute top-[60px] left-0 w-56 bg-white border border-gray-100 shadow-lg rounded-md opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 transform origin-top">
                        <a href="{{ route('pmbm') }}" class="block px-4 py-3 text-sm text-gray-700 hover:bg-gray-50 hover:text-primary border-b border-gray-50">Penerimaan Murid Baru</a>
                        <a href="{{ route('hasil-pmbm') }}" class="block px-4 py-3 text-sm text-gray-700 hover:bg-gray-50 hover:text-primary">Hasil PMBM</a>
                    </div>
                </div>


                <a href="{{ route('kontak') }}" class="px-3 py-2 text-sm font-medium hover:text-accent transition-colors {{ request()->routeIs('kontak') ? 'border-b-2 border-accent text-accent' : 'text-gray-700' }}">Kontak</a>

                <a href="/dashboard" class="ml-4 px-5 py-2 bg-primary text-white text-sm font-semibold rounded-full shadow-sm hover:bg-green-800 transition-colors whitespace-nowrap">
                    Login Admin
                </a>
            </div>

            <!-- Mobile Menu Button -->
            <div class="flex items-center md:hidden">
                <button type="button" id="mobile-menu-btn" class="text-gray-700 hover:text-primary focus:outline-none p-2">
                    <i class="fas fa-bars text-2xl"></i>
                </button>
            </div>
        </div>
    </div>

    <!-- Mobile Menu -->
    <div id="mobile-menu" class="hidden md:hidden bg-white border-t border-gray-100 shadow-inner">
        <div class="px-4 pt-2 pb-6 space-y-1 h-[80vh] overflow-y-auto">
            <a href="{{ route('home') }}" class="block px-3 py-2 rounded-md text-base font-medium {{ request()->routeIs('home') ? 'bg-primary text-white' : 'text-gray-700 hover:bg-gray-50 hover:text-primary' }}">Beranda</a>
            
            <div class="py-2">
                <p class="px-3 text-xs font-semibold text-gray-400 uppercase tracking-wider mb-1">Profil</p>
                <div class="space-y-1 pl-4 border-l-2 border-gray-100 ml-3">
                    <a href="{{ route('sejarah') }}" class="block px-3 py-2 rounded-md text-sm text-gray-600 hover:text-primary hover:bg-gray-50">Sejarah & Identitas</a>
                    <a href="{{ route('visi-misi') }}" class="block px-3 py-2 rounded-md text-sm text-gray-600 hover:text-primary hover:bg-gray-50">Visi & Misi</a>
                    <a href="{{ route('fasilitas') }}" class="block px-3 py-2 rounded-md text-sm text-gray-600 hover:text-primary hover:bg-gray-50">Fasilitas</a>

                    <a href="{{ route('struktur-organisasi') }}" class="block px-3 py-2 rounded-md text-sm text-gray-600 hover:text-primary hover:bg-gray-50">Struktur Organisasi</a>
                    <a href="{{ route('prestasi') }}" class="block px-3 py-2 rounded-md text-sm text-gray-600 hover:text-primary hover:bg-gray-50">Prestasi Murid</a>
                </div>
            </div>



            <div class="py-2">
                <p class="px-3 text-xs font-semibold text-gray-400 uppercase tracking-wider mb-1">PMBM</p>
                <div class="space-y-1 pl-4 border-l-2 border-gray-100 ml-3">
                    <a href="{{ route('pmbm') }}" class="block px-3 py-2 rounded-md text-sm text-gray-600 hover:text-primary hover:bg-gray-50">Penerimaan Murid Baru</a>
                    <a href="{{ route('hasil-pmbm') }}" class="block px-3 py-2 rounded-md text-sm text-gray-600 hover:text-primary hover:bg-gray-50">Hasil PMBM</a>
                </div>
            </div>


            <a href="{{ route('kontak') }}" class="block px-3 py-2 rounded-md text-base font-medium {{ request()->routeIs('kontak') ? 'bg-primary text-white' : 'text-gray-700 hover:bg-gray-50 hover:text-primary' }}">Kontak</a>

            <a href="/dashboard" class="mt-4 block w-full text-center px-4 py-3 bg-primary text-white text-base font-semibold rounded-full shadow hover:bg-green-800">
                Login Admin
            </a>
        </div>
    </div>
</nav>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const btn = document.getElementById('mobile-menu-btn');
        const menu = document.getElementById('mobile-menu');
        
        btn.addEventListener('click', () => {
            menu.classList.toggle('hidden');
        });
    });
</script>
