@extends('layouts.app')
@section('title', 'Penerimaan Murid Baru - MDTU Assafiiyah')

@section('content')
<!-- Hero / Breadcrumb -->
<div class="bg-primary pt-24 pb-16 relative overflow-hidden">
    <div class="absolute inset-0 opacity-10 bg-[url('https://www.transparenttextures.com/patterns/arabesque.png')]"></div>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 text-center text-white">
        <h1 class="font-heading font-bold text-4xl md:text-5xl lg:text-6xl mb-4 text-accent drop-shadow-md">Penerimaan Murid Baru 2026/2027</h1>
        <p class="text-xl md:text-2xl font-light tracking-wider uppercase mb-8">MDTU Assafiiyah</p>
        
        <div class="flex items-center justify-center space-x-2 text-sm text-gray-300">
            <a href="{{ route('home') }}" class="hover:text-accent transition-colors">Beranda</a>
            <span>/</span>
            <span class="text-white">PMBM</span>
        </div>
    </div>
</div>

<section class="py-16 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-start">
            
            <!-- KIRI: Info PMBM -->
            <div class="lg:col-span-4 space-y-8" data-aos="fade-right">
                
                <div class="bg-white rounded-2xl shadow-md p-6 border-t-4 border-accent">
                    <h3 class="font-heading font-bold text-2xl text-primary mb-4 flex items-center">
                        <i class="fas fa-list-check text-accent mr-3"></i> Syarat Pendaftaran
                    </h3>
                    <ul class="space-y-3 text-gray-700 text-sm">
                        <li class="flex items-start"><i class="fas fa-check text-green-500 mt-1 mr-2"></i> Usia minimal 7 tahun.</li>
                        <li class="flex items-start"><i class="fas fa-check text-green-500 mt-1 mr-2"></i> Fotokopi Akta Kelahiran (1 lembar).</li>
                        <li class="flex items-start"><i class="fas fa-check text-green-500 mt-1 mr-2"></i> Fotokopi Kartu Keluarga (1 lembar).</li>
                        <li class="flex items-start"><i class="fas fa-check text-green-500 mt-1 mr-2"></i> Pas foto 3x4 berwarna (2 lembar).</li>
                        <li class="flex items-start"><i class="fas fa-check text-green-500 mt-1 mr-2"></i> Mengisi formulir pendaftaran.</li>
                    </ul>
                </div>

                <div class="bg-white rounded-2xl shadow-md p-6 border-t-4 border-primary">
                    <h3 class="font-heading font-bold text-2xl text-primary mb-4 flex items-center">
                        <i class="far fa-calendar-alt text-accent mr-3"></i> Jadwal Penerimaan
                    </h3>
                    <div class="space-y-4 text-sm">
                        <div class="flex justify-between items-center border-b border-gray-100 pb-2">
                            <span class="font-semibold text-gray-700">Gelombang I</span>
                            <span class="text-primary font-bold">1 - 31 Mei 2026</span>
                        </div>
                        <div class="flex justify-between items-center border-b border-gray-100 pb-2">
                            <span class="font-semibold text-gray-700">Gelombang II</span>
                            <span class="text-primary font-bold">1 - 30 Juni 2026</span>
                        </div>
                    </div>
                </div>

                <div class="bg-primary text-white rounded-2xl shadow-md p-6">
                    <h3 class="font-heading font-bold text-xl mb-4 border-b border-white/20 pb-2">
                        <i class="fas fa-money-bill-wave mr-2 text-accent"></i> Biaya Administrasi Pendaftaran
                    </h3>
                    <ul class="space-y-3 text-sm">
                        <li class="flex justify-between">
                            <span class="font-bold">Rp 50.000</span>
                        </li>
                    </ul>
                </div>

                <!-- Alur Pendaftaran -->
                <div class="bg-white rounded-2xl shadow-md p-6 border border-gray-200">
                    <h3 class="font-heading font-bold text-xl text-primary mb-4">Alur Pendaftaran</h3>
                    <div class="space-y-4 relative before:absolute before:inset-0 before:ml-5 before:-translate-x-px md:before:mx-auto md:before:translate-x-0 before:h-full before:w-0.5 before:bg-gradient-to-b before:from-transparent before:via-gray-200 before:to-transparent">
                        <div class="relative flex items-center justify-between md:justify-normal md:odd:flex-row-reverse group is-active">
                            <div class="flex items-center justify-center w-10 h-10 rounded-full border border-white bg-primary text-white shadow shrink-0 md:order-1 md:group-odd:-translate-x-1/2 md:group-even:translate-x-1/2">
                                1
                            </div>
                            <div class="w-[calc(100%-4rem)] md:w-[calc(50%-2.5rem)] p-3 rounded bg-gray-50 border border-gray-100 shadow-sm">
                                <h4 class="font-bold text-gray-800 text-sm">Isi Formulir</h4>
                                <p class="text-xs text-gray-500">Isi data lengkap di samping.</p>
                            </div>
                        </div>
                        <div class="relative flex items-center justify-between md:justify-normal md:odd:flex-row-reverse group is-active">
                            <div class="flex items-center justify-center w-10 h-10 rounded-full border border-white bg-accent text-white shadow shrink-0 md:order-1 md:group-odd:-translate-x-1/2 md:group-even:translate-x-1/2">
                                2
                            </div>
                            <div class="w-[calc(100%-4rem)] md:w-[calc(50%-2.5rem)] p-3 rounded bg-gray-50 border border-gray-100 shadow-sm">
                                <h4 class="font-bold text-gray-800 text-sm">Tunggu Seleksi</h4>
                                <p class="text-xs text-gray-500">Cek status di Hasil PMBM.</p>
                            </div>
                        </div>
                        <div class="relative flex items-center justify-between md:justify-normal md:odd:flex-row-reverse group is-active">
                            <div class="flex items-center justify-center w-10 h-10 rounded-full border border-white bg-green-500 text-white shadow shrink-0 md:order-1 md:group-odd:-translate-x-1/2 md:group-even:translate-x-1/2">
                                3
                            </div>
                            <div class="w-[calc(100%-4rem)] md:w-[calc(50%-2.5rem)] p-3 rounded bg-gray-50 border border-gray-100 shadow-sm">
                                <h4 class="font-bold text-gray-800 text-sm">Daftar Ulang</h4>
                                <p class="text-xs text-gray-500">Serahkan berkas fisik ke sekolah.</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <!-- KANAN: Form Pendaftaran -->
            <div class="lg:col-span-8" data-aos="fade-left">
                <div class="bg-white rounded-3xl shadow-xl overflow-hidden border border-gray-100">
                    <div class="bg-green-50 px-8 py-6 border-b border-green-100">
                        <h2 class="font-heading font-bold text-3xl text-primary mb-2">Formulir Pendaftaran</h2>
                        <p class="text-gray-600">Mohon isi data calon murid dengan lengkap dan benar sesuai dokumen resmi (Akta/KK).</p>
                    </div>

                    <div class="p-8">
                        <form action="{{ route('pmbm.store') }}" method="POST">
                            @csrf

                            <h4 class="font-bold text-accent uppercase tracking-widest text-sm mb-4 pb-2 border-b border-gray-100">Data Calon Murid</h4>
                            
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                                <div>
                                    <label class="block text-sm font-semibold text-gray-700 mb-2">Nama Lengkap <span class="text-red-500">*</span></label>
                                    <input type="text" name="full_name" value="{{ old('full_name') }}" class="w-full px-4 py-3 rounded-lg border @error('full_name') border-red-500 @else border-gray-300 @enderror focus:ring-2 focus:ring-primary focus:border-primary outline-none transition-colors" placeholder="Sesuai Akta Kelahiran">
                                    @error('full_name') <span class="text-red-500 text-xs mt-1 block">{{ $message }}</span> @enderror
                                </div>
                                <div>
                                    <label class="block text-sm font-semibold text-gray-700 mb-2">NIK (16 Digit) <span class="text-red-500">*</span></label>
                                    <input type="number" name="nik" value="{{ old('nik') }}" class="w-full px-4 py-3 rounded-lg border @error('nik') border-red-500 @else border-gray-300 @enderror focus:ring-2 focus:ring-primary focus:border-primary outline-none transition-colors" placeholder="Sesuai Kartu Keluarga">
                                    @error('nik') <span class="text-red-500 text-xs mt-1 block">{{ $message }}</span> @enderror
                                </div>
                            </div>

                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                                <div>
                                    <label class="block text-sm font-semibold text-gray-700 mb-2">Tempat Lahir <span class="text-red-500">*</span></label>
                                    <input type="text" name="birth_place" value="{{ old('birth_place') }}" class="w-full px-4 py-3 rounded-lg border @error('birth_place') border-red-500 @else border-gray-300 @enderror focus:ring-2 focus:ring-primary focus:border-primary outline-none transition-colors" placeholder="Kota/Kabupaten kelahiran">
                                    @error('birth_place') <span class="text-red-500 text-xs mt-1 block">{{ $message }}</span> @enderror
                                </div>
                                <div>
                                    <label class="block text-sm font-semibold text-gray-700 mb-2">Tanggal Lahir <span class="text-red-500">*</span></label>
                                    <input type="date" name="birth_date" value="{{ old('birth_date') }}" class="w-full px-4 py-3 rounded-lg border @error('birth_date') border-red-500 @else border-gray-300 @enderror focus:ring-2 focus:ring-primary focus:border-primary outline-none transition-colors">
                                    @error('birth_date') <span class="text-red-500 text-xs mt-1 block">{{ $message }}</span> @enderror
                                </div>
                            </div>

                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-8">
                                <div>
                                    <label class="block text-sm font-semibold text-gray-700 mb-2">Jenis Kelamin <span class="text-red-500">*</span></label>
                                    <div class="flex items-center space-x-6 h-12">
                                        <label class="flex items-center cursor-pointer">
                                            <input type="radio" name="gender" value="L" class="w-5 h-5 text-primary focus:ring-primary" {{ old('gender') == 'L' ? 'checked' : '' }}>
                                            <span class="ml-2 text-gray-700">Laki-laki</span>
                                        </label>
                                        <label class="flex items-center cursor-pointer">
                                            <input type="radio" name="gender" value="P" class="w-5 h-5 text-primary focus:ring-primary" {{ old('gender') == 'P' ? 'checked' : '' }}>
                                            <span class="ml-2 text-gray-700">Perempuan</span>
                                        </label>
                                    </div>
                                    @error('gender') <span class="text-red-500 text-xs mt-1 block">{{ $message }}</span> @enderror
                                </div>
                                <div>
                                    <label class="block text-sm font-semibold text-gray-700 mb-2">Asal Sekolah/Madrasah <span class="text-red-500">*</span></label>
                                    <input type="text" name="previous_school" value="{{ old('previous_school') }}" class="w-full px-4 py-3 rounded-lg border @error('previous_school') border-red-500 @else border-gray-300 @enderror focus:ring-2 focus:ring-primary focus:border-primary outline-none transition-colors" placeholder="Contoh: SDN 01 Bekasi">
                                    @error('previous_school') <span class="text-red-500 text-xs mt-1 block">{{ $message }}</span> @enderror
                                </div>
                            </div>

                            <h4 class="font-bold text-accent uppercase tracking-widest text-sm mb-4 pb-2 border-b border-gray-100">Data Orang Tua / Wali</h4>
                            
                            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
                                <div>
                                    <label class="block text-sm font-semibold text-gray-700 mb-2">Nama Orang Tua/Wali <span class="text-red-500">*</span></label>
                                    <input type="text" name="parent_name" value="{{ old('parent_name') }}" class="w-full px-4 py-3 rounded-lg border @error('parent_name') border-red-500 @else border-gray-300 @enderror focus:ring-2 focus:ring-primary focus:border-primary outline-none transition-colors" placeholder="Nama lengkap">
                                    @error('parent_name') <span class="text-red-500 text-xs mt-1 block">{{ $message }}</span> @enderror
                                </div>
                                <div>
                                    <label class="block text-sm font-semibold text-gray-700 mb-2">Nomor Telepon/WA <span class="text-red-500">*</span></label>
                                    <input type="text" name="phone" value="{{ old('phone') }}" class="w-full px-4 py-3 rounded-lg border @error('phone') border-red-500 @else border-gray-300 @enderror focus:ring-2 focus:ring-primary focus:border-primary outline-none transition-colors" placeholder="08xxxxxxxxxx">
                                    @error('phone') <span class="text-red-500 text-xs mt-1 block">{{ $message }}</span> @enderror
                                </div>
                                <div>
                                    <label class="block text-sm font-semibold text-gray-700 mb-2">Alamat Email <span class="text-red-500">*</span></label>
                                    <input type="email" name="email" value="{{ old('email') }}" class="w-full px-4 py-3 rounded-lg border @error('email') border-red-500 @else border-gray-300 @enderror focus:ring-2 focus:ring-primary focus:border-primary outline-none transition-colors" placeholder="email@contoh.com">
                                    @error('email') <span class="text-red-500 text-xs mt-1 block">{{ $message }}</span> @enderror
                                </div>
                            </div>

                            <div class="border-t border-gray-200 pt-8 flex items-center justify-between">
                                <p class="text-xs text-gray-500 w-2/3">Dengan menekan tombol daftar, saya menyatakan bahwa data yang diisikan adalah benar dan dapat dipertanggungjawabkan.</p>
                                <button type="submit" class="px-8 py-4 bg-primary text-white font-bold rounded-xl hover:bg-green-800 transition-colors shadow-lg transform hover:-translate-y-1 flex items-center">
                                    <i class="fas fa-paper-plane mr-2"></i> Daftar Sekarang
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
@endsection
