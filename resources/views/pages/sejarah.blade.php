@extends('layouts.app')
@section('title', 'Sejarah & Profil - MDTU Assafiiyah')

@section('content')
<!-- Hero / Breadcrumb -->
<div class="bg-primary pt-24 pb-12 relative overflow-hidden">
    <div class="absolute inset-0 opacity-10 bg-[url('https://www.transparenttextures.com/patterns/arabesque.png')]"></div>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 text-center">
        <h1 class="font-heading font-bold text-3xl md:text-5xl text-white mb-4">Sejarah & Profil Madrasah</h1>
        <div class="flex items-center justify-center space-x-2 text-sm text-gray-300">
            <a href="{{ route('home') }}" class="hover:text-accent transition-colors">Beranda</a>
            <span>/</span>
            <span class="text-accent">Profil</span>
            <span>/</span>
            <span class="text-white">Sejarah</span>
        </div>
    </div>
</div>

<section class="py-16 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-start">
            <!-- Sejarah Content -->
            <div data-aos="fade-right">
                <div class="flex items-center mb-6">
                    <div class="inline-flex items-center justify-center w-12 h-12 rounded-full bg-green-100 text-primary text-xl mr-4">
                        <i class="fas fa-history"></i>
                    </div>
                    <h2 class="font-heading font-bold text-3xl text-primary">Sejarah Berdirinya</h2>
                </div>
                
                <div class="prose prose-lg text-gray-700 leading-relaxed text-justify">
                    <p>
                        Sejarah berdirinya Madrasah di Kaliasem Kejiwan tak lepas dari peran salah satu tokoh masyarakat yaitu <strong>Kyai Mualim</strong>. Atas kemauan yang kuat dari beliau yang di mana masyarakat khususnya kaum muslimin Kaliasem zaman itu masih kurang akan rasa pentingnya pendidikan Islam, maka terketuklah hati beliau serta tokoh masyarakat untuk perlu menyelenggarakan suatu pendidikan tingkat dasar yang bernuansa Islami.
                    </p>
                    <p>
                        Beliau mewakafkan tanah pribadinya untuk mendirikan sebuah lembaga Madrasah Diniyah Takmiliyah.
                    </p>
                    <p>
                        Memperhatikan perkembangan sistem pendidikan nasional dan kebutuhan masyarakat, serta untuk menampung anak-anak yang baru menempuh pendidikan, maka pada tanggal <strong>1 Juli 2006 Masehi</strong>, Yayasan Pendidikan Islam ASYAFIIYAH mendirikan Madrasah Diniyah Takmiliyah Ula Assafiiyah Kaliasem Susukan Kabupaten Cirebon, di bawah binaan Departemen Agama RI.
                    </p>
                    <p>
                        Madrasah Diniyah Takmiliyah Ula Assafiiyah Kaliasem Susukan Kabupaten Cirebon adalah salah satu lembaga pendidikan setingkat Diniyah yang dapat disebut SD berciri khas Islam.
                    </p>
                    <p>
                        Ciri khas Islam yang dimaksud karena program kurikulum Pendidikan Agama lebih dijabarkan seperti pelajaran Al-Qur’an Hadits, Akidah Akhlak, Fiqih, Bahasa Arab, dan khusus keterampilan agama. Plus bagi Madrasah Diniyah Takmiliyah Ula Assafiiyah Kaliasem Kabupaten Cirebon murid dibekali dasar-dasar ilmu agama, ketrampilan Bahasa Indonesia, kedisiplinan, olah raga, seni, dan bimbingan karakter usia dini.
                    </p>
                    <p>
                        Dalam perkembangannya sampai sekarang Madrasah Diniyah Takmiliyah Ula Kaliasem Kabupaten Cirebon telah berusia lebih dari 20 tahun.
                    </p>
                </div>
            </div>

            <!-- Data Madrasah -->
            <div data-aos="fade-left">
                <div class="bg-gray-50 p-8 rounded-2xl shadow-lg border-t-4 border-accent">
                    <div class="flex items-center mb-6">
                        <div class="inline-flex items-center justify-center w-12 h-12 rounded-full bg-yellow-100 text-accent text-xl mr-4">
                            <i class="fas fa-info-circle"></i>
                        </div>
                        <h2 class="font-heading font-bold text-2xl text-primary">Data Perkembangan Madrasah</h2>
                    </div>

                    <div class="space-y-4">
                        <div class="flex flex-col md:flex-row md:items-center py-3 border-b border-gray-200">
                            <span class="md:w-1/3 font-semibold text-gray-700">Ketua Yayasan</span>
                            <span class="md:w-2/3 text-gray-600">: Ustadz Mohamad Imam</span>
                        </div>
                        <div class="flex flex-col md:flex-row md:items-center py-3 border-b border-gray-200">
                            <span class="md:w-1/3 font-semibold text-gray-700">Kepala Madrasah</span>
                            <span class="md:w-2/3 text-gray-600">: Riza Kusumawati, S. Pd</span>
                        </div>
                        <div class="flex flex-col md:flex-row md:items-center py-3 border-b border-gray-200">
                            <span class="md:w-1/3 font-semibold text-gray-700">Kurikulum</span>
                            <span class="md:w-2/3 text-gray-600">: Peraturan Menteri Agama (PMA) No. 13 Tahun 2014</span>
                        </div>
                        <div class="flex flex-col md:flex-row md:items-center py-3 border-b border-gray-200">
                            <span class="md:w-1/3 font-semibold text-gray-700">Waktu Belajar</span>
                            <span class="md:w-2/3 text-gray-600">: Siang</span>
                        </div>
                        <div class="flex flex-col md:flex-row md:items-center py-3 border-b border-gray-200">
                            <span class="md:w-1/3 font-semibold text-gray-700">NSM</span>
                            <span class="md:w-2/3 text-gray-600">: 311232090856</span>
                        </div>
                        <div class="flex flex-col md:flex-row md:items-center py-3 border-b border-gray-200">
                            <span class="md:w-1/3 font-semibold text-gray-700">Status</span>
                            <span class="md:w-2/3 text-gray-600">: Swasta</span>
                        </div>
                        <div class="flex flex-col md:flex-row md:items-center py-3 border-b border-gray-200">
                            <span class="md:w-1/3 font-semibold text-gray-700">Bentuk Pendidikan</span>
                            <span class="md:w-2/3 text-gray-600">: MDTU</span>
                        </div>
                        <div class="flex flex-col md:flex-row md:items-center py-3 border-b border-gray-200">
                            <span class="md:w-1/3 font-semibold text-gray-700">Penyelenggara</span>
                            <span class="md:w-2/3 text-gray-600">: YAYASAN</span>
                        </div>
                        <div class="flex flex-col md:flex-row md:items-center py-3 border-b border-gray-200">
                            <span class="md:w-1/3 font-semibold text-gray-700">SK Pendirian Madrasah</span>
                            <span class="md:w-2/3 text-gray-600">: 03/10/11/21/07</span>
                        </div>
                        <div class="flex flex-col md:flex-row md:items-center py-3 border-b border-gray-200">
                            <span class="md:w-1/3 font-semibold text-gray-700">Tanggal SK Pendirian</span>
                            <span class="md:w-2/3 text-gray-600">: 2006-06-1</span>
                        </div>
                        <div class="flex flex-col md:flex-row md:items-center py-3 border-b border-gray-200">
                            <span class="md:w-1/3 font-semibold text-gray-700">SK Izin Operasional</span>
                            <span class="md:w-2/3 text-gray-600">: AHU-0008693.AH.01.02.Tahun 2021</span>
                        </div>
                        <div class="flex flex-col md:flex-row md:items-center py-3 border-b border-gray-200">
                            <span class="md:w-1/3 font-semibold text-gray-700">Tanggal SK Izin</span>
                            <span class="md:w-2/3 text-gray-600">: 2021-02-21</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
