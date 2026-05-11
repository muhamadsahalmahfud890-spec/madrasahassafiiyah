@extends('layouts.app')
@section('title', 'Agenda Kegiatan - MDTU Assafiiyah')

@section('content')
<!-- Hero / Breadcrumb -->
<div class="bg-primary pt-24 pb-12 relative overflow-hidden">
    <div class="absolute inset-0 opacity-10 bg-[url('https://www.transparenttextures.com/patterns/arabesque.png')]"></div>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 text-center">
        <h1 class="font-heading font-bold text-3xl md:text-5xl text-white mb-4">Agenda Kegiatan</h1>
        <div class="flex items-center justify-center space-x-2 text-sm text-gray-300">
            <a href="{{ route('home') }}" class="hover:text-accent transition-colors">Beranda</a>
            <span>/</span>
            <span class="text-white">Agenda</span>
        </div>
    </div>
</div>

<section class="py-16 bg-gray-50 min-h-screen">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <!-- Agenda Akan Datang -->
        <div class="mb-16">
            <div class="flex items-center mb-8" data-aos="fade-right">
                <i class="far fa-calendar-check text-2xl text-accent mr-3"></i>
                <h2 class="font-heading font-bold text-3xl text-primary">Agenda Akan Datang</h2>
                <div class="ml-4 flex-grow h-px bg-gray-200"></div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                @forelse($upcoming as $idx => $agenda)
                    <div data-aos="fade-up" data-aos-delay="{{ ($idx % 2) * 100 }}">
                        <x-agenda-item :agenda="$agenda" />
                    </div>
                @empty
                    <div class="col-span-full py-10 px-6 bg-white rounded-xl shadow-sm border border-gray-100 text-center" data-aos="fade-up">
                        <p class="text-gray-500 italic">Belum ada jadwal kegiatan dalam waktu dekat.</p>
                    </div>
                @endforelse
            </div>
        </div>

        <!-- Agenda Sudah Berlalu -->
        @if($past->count() > 0)
        <div>
            <div class="flex items-center mb-8" data-aos="fade-right">
                <i class="fas fa-history text-2xl text-gray-400 mr-3"></i>
                <h2 class="font-heading font-bold text-3xl text-gray-600">Kegiatan Telah Berlalu</h2>
                <div class="ml-4 flex-grow h-px bg-gray-200"></div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 opacity-75 grayscale hover:grayscale-0 transition-all duration-500">
                @foreach($past as $idx => $agenda)
                    <div data-aos="fade-up" data-aos-delay="{{ ($idx % 3) * 100 }}">
                        <x-agenda-item :agenda="$agenda" />
                    </div>
                @endforeach
            </div>
        </div>
        @endif

    </div>
</section>
@endsection
