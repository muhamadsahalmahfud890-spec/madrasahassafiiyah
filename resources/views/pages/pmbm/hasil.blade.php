@extends('layouts.app')
@section('title', 'Hasil Seleksi PMBM - MDTU Assafiiyah')

@section('content')
<!-- Hero / Breadcrumb -->
<div class="bg-primary pt-24 pb-12 relative overflow-hidden">
    <div class="absolute inset-0 opacity-10 bg-[url('https://www.transparenttextures.com/patterns/arabesque.png')]"></div>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 text-center">
        <h1 class="font-heading font-bold text-3xl md:text-5xl text-white mb-4">Hasil Seleksi PMBM 2025</h1>
        <div class="flex items-center justify-center space-x-2 text-sm text-gray-300">
            <a href="{{ route('home') }}" class="hover:text-accent transition-colors">Beranda</a>
            <span>/</span>
            <span class="text-white">Hasil PMBM</span>
        </div>
    </div>
</div>

<section class="py-16 bg-gray-50 min-h-[60vh]">
    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <!-- Flash Message -->
        @if(session('success'))
            <div class="mb-8 p-4 bg-green-100 border border-green-400 text-green-700 rounded-lg flex items-center shadow-sm" data-aos="fade-down">
                <i class="fas fa-check-circle text-2xl mr-3"></i>
                <div>
                    <h4 class="font-bold">Pendaftaran Berhasil!</h4>
                    <p>{{ session('success') }}</p>
                </div>
            </div>
        @endif

        <div class="bg-white rounded-2xl shadow-xl p-8 mb-10" data-aos="fade-up">
            <h2 class="font-heading font-bold text-2xl text-primary mb-6 text-center">Cek Status Penerimaan</h2>
            
            <form action="{{ route('hasil-pmbm') }}" method="GET" class="max-w-2xl mx-auto flex gap-4">
                <div class="relative flex-grow">
                    <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                        <i class="fas fa-search text-gray-400"></i>
                    </div>
                    <input type="text" name="q" value="{{ request('q') }}" class="w-full pl-11 pr-4 py-4 rounded-xl border border-gray-300 focus:ring-2 focus:ring-primary focus:border-primary outline-none transition-colors bg-gray-50 text-lg" placeholder="Masukkan Nomor Registrasi / NIK / Nama">
                </div>
                <button type="submit" class="px-8 py-4 bg-accent text-white font-bold rounded-xl hover:bg-yellow-600 transition-colors shadow-md flex-shrink-0">
                    Cari Data
                </button>
            </form>
        </div>

        @if(request('q'))
            <div class="bg-white rounded-2xl shadow-md overflow-hidden border border-gray-100" data-aos="fade-up">
                @if($results->count() > 0)
                    <div class="overflow-x-auto">
                        <table class="w-full text-left border-collapse">
                            <thead>
                                <tr class="bg-primary text-white">
                                    <th class="p-4 font-semibold text-sm">No. Pendaftaran</th>
                                    <th class="p-4 font-semibold text-sm">Nama Lengkap</th>
                                    <th class="p-4 font-semibold text-sm">Asal Sekolah</th>
                                    <th class="p-4 font-semibold text-sm text-center">Status</th>
                                    <th class="p-4 font-semibold text-sm text-center">Aksi</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-100 text-gray-700">
                                @foreach($results as $res)
                                    <tr class="hover:bg-gray-50 transition-colors">
                                        <td class="p-4 font-bold text-primary">{{ $res->registration_number }}</td>
                                        <td class="p-4 font-semibold">{{ $res->full_name }}</td>
                                        <td class="p-4 text-sm">{{ $res->previous_school }}</td>
                                        <td class="p-4 text-center">
                                            @if($res->status == 'pending')
                                                <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-bold bg-yellow-100 text-yellow-800 border border-yellow-200">
                                                    <i class="fas fa-clock mr-1"></i> Menunggu
                                                </span>
                                            @elseif($res->status == 'lolos')
                                                <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-bold bg-green-100 text-green-800 border border-green-200">
                                                    <i class="fas fa-check-circle mr-1"></i> Diterima
                                                </span>
                                            @else
                                                <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-bold bg-red-100 text-red-800 border border-red-200">
                                                    <i class="fas fa-times-circle mr-1"></i> Tidak Lolos
                                                </span>
                                            @endif
                                        </td>
                                        <td class="p-4 text-center">
                                            @if($res->status == 'lolos' || $res->status == 'pending')
                                                <a href="{{ route('pmbm.cetak', $res->id) }}" target="_blank" class="inline-flex items-center px-4 py-2 bg-gray-800 text-white text-xs font-bold rounded-lg hover:bg-black transition-colors shadow-sm whitespace-nowrap">
                                                    <i class="fas fa-print mr-2"></i> Cetak Bukti
                                                </a>
                                            @else
                                                <span class="text-gray-400 text-xs italic">-</span>
                                            @endif
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                @else
                    <div class="p-12 text-center">
                        <div class="w-20 h-20 bg-red-50 text-red-400 rounded-full flex items-center justify-center text-4xl mx-auto mb-4">
                            <i class="fas fa-search-minus"></i>
                        </div>
                        <h3 class="font-heading font-bold text-2xl text-gray-800 mb-2">Data Tidak Ditemukan</h3>
                        <p class="text-gray-500">Pastikan NIK, Nama, atau Nomor Registrasi yang Anda masukkan sudah benar.</p>
                    </div>
                @endif
            </div>
        @else
            <div class="text-center text-gray-500 py-10" data-aos="zoom-in">
                <i class="fas fa-info-circle text-4xl text-gray-300 mb-3 block"></i>
                <p>Silakan masukkan kata kunci pada form pencarian di atas untuk melihat status pendaftaran.</p>
            </div>
        @endif

    </div>
</section>
@endsection
