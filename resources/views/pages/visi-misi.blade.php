@extends('layouts.app')
@section('title', 'Visi & Misi - MDTU Assafiiyah')

@section('content')
<!-- Hero / Breadcrumb -->
<div class="bg-primary pt-24 pb-12 relative overflow-hidden">
    <div class="absolute inset-0 opacity-10 bg-[url('https://www.transparenttextures.com/patterns/arabesque.png')]"></div>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 text-center">
        <h1 class="font-heading font-bold text-3xl md:text-5xl text-white mb-4">Visi & Misi Madrasah</h1>
        <div class="flex items-center justify-center space-x-2 text-sm text-gray-300">
            <a href="{{ route('home') }}" class="hover:text-accent transition-colors">Beranda</a>
            <span>/</span>
            <span class="text-accent">Profil</span>
            <span>/</span>
            <span class="text-white">Visi & Misi</span>
        </div>
    </div>
</div>

<!-- Ayat Al-Quran -->
<section class="py-12 bg-gray-50 border-b border-gray-100 text-center">
    <div class="max-w-4xl mx-auto px-4" data-aos="zoom-in">
        <p class="text-2xl md:text-3xl text-primary mb-4 font-arabic leading-loose">يَرْفَعِ اللَّهُ الَّذِينَ آمَنُوا مِنْكُمْ وَالَّذِينَ أُوتُوا الْعِلْمَ دَرَجَاتٍ</p>
        <p class="italic text-gray-600">"...Niscaya Allah akan meninggikan orang-orang yang beriman di antaramu dan orang-orang yang diberi ilmu pengetahuan beberapa derajat."</p>
        <p class="text-sm font-semibold text-accent mt-2">(Q.S. Al-Mujadilah: 11)</p>
    </div>
</section>

<section class="py-16 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <div class="grid grid-cols-1 md:grid-cols-2 gap-12 lg:gap-20">
            <!-- Visi -->
            <div class="bg-primary rounded-3xl p-8 md:p-12 text-white shadow-xl relative overflow-hidden" data-aos="fade-up">
                <div class="absolute top-0 right-0 p-8 opacity-10">
                    <i class="fas fa-star text-9xl text-accent"></i>
                </div>
                <div class="relative z-10">
                    <div class="inline-flex items-center justify-center w-16 h-16 rounded-full bg-accent text-white text-2xl mb-6 shadow-lg">
                        <i class="fas fa-eye"></i>
                    </div>
                    <h2 class="font-heading font-bold text-3xl mb-6">Visi Madrasah</h2>
                    <ul class="space-y-4 text-white">
                        <li class="flex items-start">
                            <span class="font-bold mr-3 text-accent text-lg">1.</span>
                            <span class="leading-relaxed">Terwujudnya insan yang beriman, bertakwa, dan berakhlakul karimah.</span>
                        </li>
                        <li class="flex items-start">
                            <span class="font-bold mr-3 text-accent text-lg">2.</span>
                            <span class="leading-relaxed">Menjadi madrasah unggul dalam membentuk generasi berwawasan keislaman dan berkarakter.</span>
                        </li>
                        <li class="flex items-start">
                            <span class="font-bold mr-3 text-accent text-lg">3.</span>
                            <span class="leading-relaxed">Terciptanya masyarakat yang religius, berilmu, dan berakhlak mulia.</span>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Misi & Tujuan -->
            <div data-aos="fade-up" data-aos-delay="100">
                <div class="mb-12">
                    <div class="flex items-center mb-6">
                        <div class="inline-flex items-center justify-center w-12 h-12 rounded-full bg-green-100 text-primary text-xl mr-4">
                            <i class="fas fa-bullseye"></i>
                        </div>
                        <h2 class="font-heading font-bold text-3xl text-primary">Misi Kami</h2>
                    </div>
                    
                    <ul class="space-y-4 text-gray-700">
                        <li class="flex items-start">
                            <span class="font-bold mr-3 text-primary text-lg">1.</span>
                            <span class="leading-relaxed">Membekali murid dengan dasar ilmu agama Islam yang mendalam.</span>
                        </li>
                        <li class="flex items-start">
                            <span class="font-bold mr-3 text-primary text-lg">2.</span>
                            <span class="leading-relaxed">Menerapkan pembelajaran yang fokus pada akhlak mulia dan penanaman nilai-nilai agama sejak dini.</span>
                        </li>
                        <li class="flex items-start">
                            <span class="font-bold mr-3 text-primary text-lg">3.</span>
                            <span class="leading-relaxed">Mengembangkan potensi akademik dan non-akademik murid yang berbasis karakter.</span>
                        </li>
                        <li class="flex items-start">
                            <span class="font-bold mr-3 text-primary text-lg">4.</span>
                            <span class="leading-relaxed">Menciptakan lingkungan madrasah yang kondusif, beradab, dan bermartabat.</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

    </div>
</section>
@endsection
