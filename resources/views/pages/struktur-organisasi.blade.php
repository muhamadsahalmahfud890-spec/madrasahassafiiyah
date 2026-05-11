@extends('layouts.app')
@section('title', 'Struktur Organisasi - MDTU Assafiiyah')

@section('content')
<!-- Hero / Breadcrumb -->
<div class="bg-primary pt-24 pb-12 relative overflow-hidden">
    <div class="absolute inset-0 opacity-10 bg-[url('https://www.transparenttextures.com/patterns/arabesque.png')]"></div>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 text-center">
        <h1 class="font-heading font-bold text-3xl md:text-5xl text-white mb-4">Struktur Organisasi</h1>
        <div class="flex items-center justify-center space-x-2 text-sm text-gray-300">
            <a href="{{ route('home') }}" class="hover:text-accent transition-colors">Beranda</a>
            <span>/</span>
            <span class="text-accent">Profil</span>
            <span>/</span>
            <span class="text-white">Struktur Organisasi</span>
        </div>
    </div>
</div>

<section class="py-16 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <!-- STRUKTUR YAYASAN -->
        <div class="text-center max-w-3xl mx-auto mb-12" data-aos="fade-up">
            <h2 class="font-heading font-bold text-3xl text-primary mb-4">Yayasan Pendidikan Islam Asyafiiyah</h2>
            <p class="text-gray-600 leading-relaxed text-sm">Kaliasem Kejiwan Susukan</p>
        </div>

        <div class="bg-white p-8 rounded-xl shadow-lg mb-16 overflow-x-auto hidden lg:block" data-aos="fade-up">
            <div class="min-w-[800px] flex flex-col items-center pb-8">
                
                <!-- Pembina -->
                <div class="relative flex flex-col items-center mb-10 w-full">
                    <div class="flex flex-row justify-center items-start gap-12 relative w-full">
                        <div class="flex flex-col items-center z-10">
                            <div class="bg-green-700 text-white font-bold px-6 py-2 rounded-t-lg text-sm shadow-md">PEMBINA</div>
                            <div class="bg-green-600 text-white font-semibold px-6 py-3 rounded-b-lg shadow-md min-w-[180px] text-center">SEHNURUDIN</div>
                        </div>
                        
                        <!-- Penasehat (Floating right) -->
                        <div class="flex flex-col items-center absolute right-1/4 top-0">
                            <div class="bg-yellow-400 text-gray-800 font-bold px-6 py-2 rounded-t-lg text-sm shadow-md">PENASEHAT</div>
                            <div class="bg-green-600 text-white font-semibold px-6 py-3 rounded-b-lg shadow-md min-w-[200px] text-center leading-relaxed">
                                SEHNURUDIN<br>
                                ROBIK JAESIN<br>
                                MAHYUDIN
                            </div>
                        </div>
                        <!-- Line to penasehat -->
                        <div class="absolute top-6 left-1/2 w-1/4 border-t-2 border-dashed border-gray-400"></div>
                    </div>

                    <!-- Vertical line down -->
                    <div class="w-0.5 h-10 bg-gray-400 mt-2"></div>

                    <!-- Ketua -->
                    <div class="flex flex-col items-center">
                        <div class="bg-yellow-400 text-gray-800 font-bold px-6 py-2 rounded-t-lg text-sm shadow-md">KETUA</div>
                        <div class="bg-green-600 text-white font-semibold px-6 py-3 rounded-b-lg shadow-md min-w-[180px] text-center">MOH IMAM</div>
                    </div>

                    <!-- Vertical line down -->
                    <div class="w-0.5 h-10 bg-gray-400 mt-2"></div>

                    <!-- Row 3: Bendahara, Wakil Ketua, Sekretaris -->
                    <div class="relative w-full max-w-3xl">
                        <div class="absolute top-0 left-1/6 right-1/6 h-0.5 bg-gray-400" style="left: 16.66%; right: 16.66%;"></div>
                        
                        <div class="grid grid-cols-3 gap-4 w-full">
                            <!-- Bendahara -->
                            <div class="flex flex-col items-center relative pt-8">
                                <div class="absolute top-0 left-1/2 w-0.5 h-8 bg-gray-400 -translate-x-1/2"></div>
                                <div class="bg-yellow-400 text-gray-800 font-bold px-4 py-2 rounded-t-lg text-xs shadow-md">BENDAHARA</div>
                                <div class="bg-green-600 text-white font-semibold px-4 py-3 rounded-b-lg shadow-md w-full max-w-[160px] text-center text-sm">ANILAH</div>
                            </div>
                            
                            <!-- Wakil Ketua -->
                            <div class="flex flex-col items-center relative pt-8">
                                <div class="absolute top-0 left-1/2 w-0.5 h-8 bg-gray-400 -translate-x-1/2"></div>
                                <div class="bg-yellow-400 text-gray-800 font-bold px-4 py-2 rounded-t-lg text-xs shadow-md">WAKIL KETUA</div>
                                <div class="bg-green-600 text-white font-semibold px-4 py-3 rounded-b-lg shadow-md w-full max-w-[160px] text-center text-sm">AMRULLAH</div>
                            </div>

                            <!-- Sekretaris -->
                            <div class="flex flex-col items-center relative pt-8">
                                <div class="absolute top-0 left-1/2 w-0.5 h-8 bg-gray-400 -translate-x-1/2"></div>
                                <div class="bg-yellow-400 text-gray-800 font-bold px-4 py-2 rounded-t-lg text-xs shadow-md">SEKRETARIS</div>
                                <div class="bg-green-600 text-white font-semibold px-4 py-3 rounded-b-lg shadow-md w-full max-w-[160px] text-center text-sm">IKHWAN MAULANA</div>
                            </div>
                        </div>

                        <!-- Line down from Wakil Ketua -->
                        <div class="absolute top-full left-1/2 w-0.5 h-10 bg-gray-400 -translate-x-1/2"></div>
                    </div>

                    <!-- Row 4: Divisi -->
                    <div class="relative w-full max-w-5xl mt-10">
                        <div class="absolute top-0 left-[10%] right-[10%] h-0.5 bg-gray-400"></div>
                        
                        <div class="grid grid-cols-5 gap-2 w-full">
                            <!-- Divisi Humas -->
                            <div class="flex flex-col items-center relative pt-8">
                                <div class="absolute top-0 left-1/2 w-0.5 h-8 bg-gray-400 -translate-x-1/2"></div>
                                <div class="bg-yellow-400 text-gray-800 font-bold px-2 py-2 rounded-t-lg text-[10px] sm:text-xs shadow-md w-full text-center">DIVISI HUMAS</div>
                                <div class="bg-green-600 text-white font-semibold px-2 py-3 rounded-b-lg shadow-md w-full text-center text-xs">RUYALI</div>
                            </div>
                            <!-- Divisi Wakaf -->
                            <div class="flex flex-col items-center relative pt-8">
                                <div class="absolute top-0 left-1/2 w-0.5 h-8 bg-gray-400 -translate-x-1/2"></div>
                                <div class="bg-yellow-400 text-gray-800 font-bold px-2 py-2 rounded-t-lg text-[10px] sm:text-xs shadow-md w-full text-center">DIVISI WAKAF</div>
                                <div class="bg-green-600 text-white font-semibold px-2 py-3 rounded-b-lg shadow-md w-full text-center text-xs">KUSNADI</div>
                            </div>
                            <!-- Divisi Ekonomi -->
                            <div class="flex flex-col items-center relative pt-8">
                                <div class="absolute top-0 left-1/2 w-0.5 h-8 bg-gray-400 -translate-x-1/2"></div>
                                <div class="bg-yellow-400 text-gray-800 font-bold px-2 py-2 rounded-t-lg text-[10px] sm:text-xs shadow-md w-full text-center">DIVISI EKONOMI</div>
                                <div class="bg-green-600 text-white font-semibold px-2 py-3 rounded-b-lg shadow-md w-full text-center text-xs">SUKASA</div>
                            </div>
                            <!-- Divisi Pendidikan -->
                            <div class="flex flex-col items-center relative pt-8">
                                <div class="absolute top-0 left-1/2 w-0.5 h-8 bg-gray-400 -translate-x-1/2"></div>
                                <div class="bg-yellow-400 text-gray-800 font-bold px-2 py-2 rounded-t-lg text-[10px] sm:text-xs shadow-md w-full text-center truncate">DIVISI PENDIDIKAN</div>
                                <div class="bg-green-600 text-white font-semibold px-2 py-3 rounded-b-lg shadow-md w-full text-center text-[11px] truncate">KARIS AZIS, S.PD</div>
                            </div>
                            <!-- Divisi Sosial -->
                            <div class="flex flex-col items-center relative pt-8">
                                <div class="absolute top-0 left-1/2 w-0.5 h-8 bg-gray-400 -translate-x-1/2"></div>
                                <div class="bg-yellow-400 text-gray-800 font-bold px-2 py-2 rounded-t-lg text-[10px] sm:text-xs shadow-md w-full text-center">DIVISI SOSIAL</div>
                                <div class="bg-green-600 text-white font-semibold px-2 py-3 rounded-b-lg shadow-md w-full text-center text-xs">WARMI</div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <!-- Mobile Version: Yayasan -->
        <div class="block lg:hidden bg-white p-4 rounded-xl shadow-lg mb-16" data-aos="fade-up">
            <div class="space-y-6">
                <!-- Wrapper for each level -->
                <div class="border border-gray-100 rounded-lg p-4 bg-green-50 text-center shadow-sm">
                    <span class="block text-xs font-bold text-yellow-600 mb-1">PEMBINA</span>
                    <span class="block font-bold text-gray-800">SEHNURUDIN</span>
                </div>
                <div class="flex justify-center"><div class="w-0.5 h-6 bg-gray-300"></div></div>
                <div class="border border-gray-100 rounded-lg p-4 bg-yellow-50 text-center shadow-sm relative">
                    <span class="block text-xs font-bold text-yellow-600 mb-1">PENASEHAT</span>
                    <span class="block font-bold text-gray-800 leading-relaxed">SEHNURUDIN<br>ROBIK JAESIN<br>MAHYUDIN</span>
                </div>
                <div class="flex justify-center"><div class="w-0.5 h-6 bg-gray-300"></div></div>
                <div class="border border-gray-100 rounded-lg p-4 bg-green-50 text-center shadow-sm">
                    <span class="block text-xs font-bold text-yellow-600 mb-1">KETUA</span>
                    <span class="block font-bold text-gray-800">MOH IMAM</span>
                </div>
                <div class="flex justify-center"><div class="w-0.5 h-6 bg-gray-300"></div></div>
                
                <div class="grid grid-cols-1 gap-4 border border-gray-100 rounded-lg p-4 bg-yellow-50 shadow-sm">
                    <div class="text-center pb-3 border-b border-gray-200">
                        <span class="block text-xs font-bold text-yellow-600 mb-1">BENDAHARA</span>
                        <span class="block font-bold text-gray-800 text-sm">ANILAH</span>
                    </div>
                    <div class="text-center pb-3 border-b border-gray-200">
                        <span class="block text-xs font-bold text-yellow-600 mb-1">WAKIL KETUA</span>
                        <span class="block font-bold text-gray-800 text-sm">AMRULLAH</span>
                    </div>
                    <div class="text-center">
                        <span class="block text-xs font-bold text-yellow-600 mb-1">SEKRETARIS</span>
                        <span class="block font-bold text-gray-800 text-sm">IKHWAN MAULANA</span>
                    </div>
                </div>

                <div class="flex justify-center"><div class="w-0.5 h-6 bg-gray-300"></div></div>

                <div class="border border-gray-100 rounded-lg p-4 bg-gray-50 shadow-sm">
                    <h3 class="text-center font-bold text-primary mb-4 text-sm border-b pb-2">DIVISI YAYASAN</h3>
                    <div class="grid grid-cols-2 gap-3 text-center">
                        <div>
                            <span class="block text-[10px] font-bold text-yellow-600">HUMAS</span>
                            <span class="block font-bold text-gray-800 text-xs mt-1">RUYALI</span>
                        </div>
                        <div>
                            <span class="block text-[10px] font-bold text-yellow-600">WAKAF</span>
                            <span class="block font-bold text-gray-800 text-xs mt-1">KUSNADI</span>
                        </div>
                        <div>
                            <span class="block text-[10px] font-bold text-yellow-600">EKONOMI</span>
                            <span class="block font-bold text-gray-800 text-xs mt-1">SUKASA</span>
                        </div>
                        <div>
                            <span class="block text-[10px] font-bold text-yellow-600">PENDIDIKAN</span>
                            <span class="block font-bold text-gray-800 text-xs mt-1">KARIS AZIS, S.PD</span>
                        </div>
                        <div class="col-span-2 mt-2 pt-2 border-t border-gray-200">
                            <span class="block text-[10px] font-bold text-yellow-600">SOSIAL</span>
                            <span class="block font-bold text-gray-800 text-xs mt-1">WARMI</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-center max-w-3xl mx-auto mb-12" data-aos="fade-up">
            <h2 class="font-heading font-bold text-3xl text-primary mb-4">MDTU Assafiiyah</h2>
            <p class="text-gray-600 leading-relaxed text-sm">Kaliasem Kejiwan Susukan</p>
        </div>

        <div class="bg-white p-8 rounded-xl shadow-lg overflow-x-auto hidden lg:block" data-aos="fade-up">
            <div class="min-w-[800px] flex flex-col items-center pb-8">
                
                <div class="mb-4 text-center bg-gray-100 rounded-full px-6 py-2 inline-block font-semibold text-gray-600 shadow-sm border border-gray-200">
                    Tahun Ajaran {{ date('Y') }}/{{ date('Y')+1 }}
                </div>

                <!-- Pelindung -->
                <div class="flex flex-col items-center mt-6">
                    <div class="bg-yellow-300 text-gray-800 font-bold px-6 py-2 rounded-t-lg text-xs shadow-md">PELINDUNG</div>
                    <div class="bg-white border-2 border-gray-100 text-gray-800 font-bold px-6 py-3 rounded-b-lg shadow-md min-w-[200px] text-center">Kepala Desa</div>
                </div>
                
                <div class="w-0.5 h-8 bg-gray-800 mt-2"></div>

                <!-- Ketua Yayasan -->
                <div class="flex flex-col items-center">
                    <div class="bg-yellow-300 text-gray-800 font-bold px-6 py-2 rounded-t-lg text-xs shadow-md">KETUA YAYASAN</div>
                    <div class="bg-white border-2 border-gray-100 text-gray-800 font-bold px-6 py-3 rounded-b-lg shadow-md min-w-[200px] text-center">Ustadz Moh Imam</div>
                </div>

                <div class="w-0.5 h-8 bg-gray-800 mt-2"></div>

                <!-- Kepala Madrasah -->
                <div class="flex flex-col items-center">
                    <div class="bg-yellow-300 text-gray-800 font-bold px-6 py-2 rounded-t-lg text-xs shadow-md">KEPALA MADRASAH</div>
                    <div class="bg-white border-2 border-gray-100 text-gray-800 font-bold px-6 py-3 rounded-b-lg shadow-md min-w-[200px] text-center">Riza Kusumawati, S. Pd</div>
                </div>

                <div class="w-0.5 h-8 bg-gray-800 mt-2"></div>

                <!-- Bendahara, TU, Sekretaris -->
                <div class="relative w-full max-w-3xl">
                    <div class="absolute top-0 left-1/6 right-1/6 h-0.5 bg-gray-800" style="left: 16.66%; right: 16.66%;"></div>
                    
                    <div class="grid grid-cols-3 gap-6 w-full">
                        <!-- Bendahara -->
                        <div class="flex flex-col items-center relative pt-6">
                            <div class="absolute top-0 left-1/2 w-0.5 h-6 bg-gray-800 -translate-x-1/2"></div>
                            <div class="bg-yellow-300 text-gray-800 font-bold px-4 py-2 rounded-t-lg text-xs shadow-md w-full max-w-[180px] text-center">BENDAHARA</div>
                            <div class="bg-white border-2 border-gray-100 text-gray-800 font-bold px-4 py-3 rounded-b-lg shadow-md w-full max-w-[180px] text-center text-sm">Anilah</div>
                        </div>
                        
                        <!-- Tata Usaha -->
                        <div class="flex flex-col items-center relative pt-6">
                            <div class="absolute top-0 left-1/2 w-0.5 h-6 bg-gray-800 -translate-x-1/2"></div>
                            <div class="bg-yellow-300 text-gray-800 font-bold px-4 py-2 rounded-t-lg text-xs shadow-md w-full max-w-[180px] text-center">TATA USAHA</div>
                            <div class="bg-white border-2 border-gray-100 text-gray-800 font-bold px-4 py-3 rounded-b-lg shadow-md w-full max-w-[180px] text-center text-sm">Raniti</div>
                        </div>

                        <!-- Sekretaris -->
                        <div class="flex flex-col items-center relative pt-6">
                            <div class="absolute top-0 left-1/2 w-0.5 h-6 bg-gray-800 -translate-x-1/2"></div>
                            <div class="bg-yellow-300 text-gray-800 font-bold px-4 py-2 rounded-t-lg text-xs shadow-md w-full max-w-[180px] text-center">SEKRETARIS</div>
                            <div class="bg-white border-2 border-gray-100 text-gray-800 font-bold px-4 py-3 rounded-b-lg shadow-md w-full max-w-[180px] text-center text-sm">Abdul Hafidh, S. Pd</div>
                        </div>
                    </div>

                    <!-- Line down from TU -->
                    <div class="absolute top-full left-1/2 w-0.5 h-10 bg-gray-800 -translate-x-1/2"></div>
                </div>

                <!-- Bidang-bidang -->
                <div class="relative w-full max-w-4xl mt-10">
                    <div class="absolute top-0 left-[16.66%] right-[16.66%] h-0.5 bg-gray-800"></div>
                    
                    <div class="grid grid-cols-3 gap-6 w-full">
                        <!-- Kurikulum -->
                        <div class="flex flex-col items-center relative pt-6">
                            <div class="absolute top-0 left-1/2 w-0.5 h-6 bg-gray-800 -translate-x-1/2"></div>
                            <div class="bg-yellow-300 text-gray-800 font-bold px-4 py-2 rounded-t-lg text-xs shadow-md w-full max-w-[200px] text-center">BIDANG KURIKULUM</div>
                            <div class="bg-white border-2 border-gray-100 text-gray-800 font-bold px-4 py-3 rounded-b-lg shadow-md w-full max-w-[200px] text-center text-sm">Robik Jaesin</div>
                        </div>
                        
                        <!-- Kesiswaan -->
                        <div class="flex flex-col items-center relative pt-6">
                            <div class="absolute top-0 left-1/2 w-0.5 h-6 bg-gray-800 -translate-x-1/2"></div>
                            <div class="bg-yellow-300 text-gray-800 font-bold px-4 py-2 rounded-t-lg text-xs shadow-md w-full max-w-[200px] text-center">BIDANG KESISWAAN</div>
                            <div class="bg-white border-2 border-gray-100 text-gray-800 font-bold px-4 py-3 rounded-b-lg shadow-md w-full max-w-[200px] text-center text-sm">Amrullah</div>
                            
                            <!-- Line down from Kesiswaan to Devisi -->
                            <div class="absolute top-full left-1/2 w-0.5 h-8 bg-gray-800 -translate-x-1/2"></div>
                        </div>

                        <!-- Humas -->
                        <div class="flex flex-col items-center relative pt-6">
                            <div class="absolute top-0 left-1/2 w-0.5 h-6 bg-gray-800 -translate-x-1/2"></div>
                            <div class="bg-yellow-300 text-gray-800 font-bold px-4 py-2 rounded-t-lg text-xs shadow-md w-full max-w-[200px] text-center">HUMAS</div>
                            <div class="bg-white border-2 border-gray-100 text-gray-800 font-bold px-4 py-3 rounded-b-lg shadow-md w-full max-w-[200px] text-center text-sm">Mahyudin</div>
                        </div>
                    </div>
                </div>

                <!-- Devisi Keamanan & Kesehatan -->
                <div class="relative w-full max-w-xl mt-8">
                    <div class="absolute top-0 left-1/4 right-1/4 h-0.5 bg-gray-800"></div>
                    
                    <div class="grid grid-cols-2 gap-8 w-full">
                        <!-- Keamanan -->
                        <div class="flex flex-col items-center relative pt-6">
                            <div class="absolute top-0 left-1/2 w-0.5 h-6 bg-gray-800 -translate-x-1/2"></div>
                            <div class="bg-yellow-300 text-gray-800 font-bold px-4 py-2 rounded-t-lg text-xs shadow-md w-full max-w-[180px] text-center">DEVISI KEAMANAN</div>
                            <div class="bg-white border-2 border-gray-100 text-gray-800 font-bold px-4 py-3 rounded-b-lg shadow-md w-full max-w-[180px] text-center text-sm">Dicki Wahyudi</div>
                        </div>
                        
                        <!-- Kesehatan -->
                        <div class="flex flex-col items-center relative pt-6">
                            <div class="absolute top-0 left-1/2 w-0.5 h-6 bg-gray-800 -translate-x-1/2"></div>
                            <div class="bg-yellow-300 text-gray-800 font-bold px-4 py-2 rounded-t-lg text-xs shadow-md w-full max-w-[180px] text-center">DIVISI KESEHATAN</div>
                            <div class="bg-white border-2 border-gray-100 text-gray-800 font-bold px-4 py-3 rounded-b-lg shadow-md w-full max-w-[180px] text-center text-sm">Mila Sofa</div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <!-- Mobile Version: MDTU -->
        <div class="block lg:hidden bg-white p-4 rounded-xl shadow-lg mb-16" data-aos="fade-up">
            <div class="mb-6 text-center bg-green-50 rounded-full px-6 py-2 inline-block font-semibold text-primary shadow-sm border border-green-100 text-xs w-full">
                Tahun Ajaran {{ date('Y') }}/{{ date('Y')+1 }}
            </div>
            
            <div class="space-y-6 mt-4">
                <div class="border border-gray-100 rounded-lg p-4 bg-gray-50 text-center shadow-sm">
                    <span class="block text-xs font-bold text-yellow-600 mb-1">PELINDUNG</span>
                    <span class="block font-bold text-gray-800">Kepala Desa</span>
                </div>
                <div class="flex justify-center"><div class="w-0.5 h-6 bg-gray-300"></div></div>
                
                <div class="border border-gray-100 rounded-lg p-4 bg-green-50 text-center shadow-sm">
                    <span class="block text-xs font-bold text-yellow-600 mb-1">KETUA YAYASAN</span>
                    <span class="block font-bold text-gray-800">Ustadz Moh Imam</span>
                </div>
                <div class="flex justify-center"><div class="w-0.5 h-6 bg-gray-300"></div></div>

                <div class="border border-gray-100 rounded-lg p-4 bg-yellow-50 text-center shadow-sm">
                    <span class="block text-xs font-bold text-yellow-600 mb-1">KEPALA MADRASAH</span>
                    <span class="block font-bold text-gray-800">Riza Kusumawati, S. Pd</span>
                </div>
                <div class="flex justify-center"><div class="w-0.5 h-6 bg-gray-300"></div></div>

                <div class="grid grid-cols-1 gap-4 border border-gray-100 rounded-lg p-4 bg-gray-50 shadow-sm">
                    <div class="text-center pb-3 border-b border-gray-200">
                        <span class="block text-xs font-bold text-yellow-600 mb-1">BENDAHARA</span>
                        <span class="block font-bold text-gray-800 text-sm">Anilah</span>
                    </div>
                    <div class="text-center pb-3 border-b border-gray-200">
                        <span class="block text-xs font-bold text-yellow-600 mb-1">TATA USAHA</span>
                        <span class="block font-bold text-gray-800 text-sm">Raniti</span>
                    </div>
                    <div class="text-center">
                        <span class="block text-xs font-bold text-yellow-600 mb-1">SEKRETARIS</span>
                        <span class="block font-bold text-gray-800 text-sm">Abdul Hafidh, S. Pd</span>
                    </div>
                </div>

                <div class="flex justify-center"><div class="w-0.5 h-6 bg-gray-300"></div></div>

                <div class="border border-gray-100 rounded-lg p-4 bg-green-50 shadow-sm">
                    <h3 class="text-center font-bold text-primary mb-4 text-sm border-b border-green-200 pb-2">BIDANG-BIDANG</h3>
                    <div class="space-y-4 text-center">
                        <div class="pb-3 border-b border-green-200">
                            <span class="block text-[10px] font-bold text-yellow-600">KURIKULUM</span>
                            <span class="block font-bold text-gray-800 text-sm mt-1">Robik Jaesin</span>
                        </div>
                        <div class="pb-3 border-b border-green-200">
                            <span class="block text-[10px] font-bold text-yellow-600">KESISWAAN</span>
                            <span class="block font-bold text-gray-800 text-sm mt-1">Amrullah</span>
                        </div>
                        <div>
                            <span class="block text-[10px] font-bold text-yellow-600">HUMAS</span>
                            <span class="block font-bold text-gray-800 text-sm mt-1">Mahyudin</span>
                        </div>
                    </div>
                </div>

                <div class="flex justify-center"><div class="w-0.5 h-6 bg-gray-300"></div></div>

                <div class="border border-gray-100 rounded-lg p-4 bg-yellow-50 shadow-sm">
                    <h3 class="text-center font-bold text-primary mb-4 text-sm border-b border-yellow-200 pb-2">DEVISI KEAMANAN & KESEHATAN</h3>
                    <div class="grid grid-cols-2 gap-3 text-center">
                        <div class="border-r border-yellow-200">
                            <span class="block text-[10px] font-bold text-yellow-600">KEAMANAN</span>
                            <span class="block font-bold text-gray-800 text-xs mt-1">Dicki Wahyudi</span>
                        </div>
                        <div>
                            <span class="block text-[10px] font-bold text-yellow-600">KESEHATAN</span>
                            <span class="block font-bold text-gray-800 text-xs mt-1">Mila Sofa</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="mt-16 max-w-5xl mx-auto" data-aos="fade-up">
            <h3 class="font-heading font-bold text-xl md:text-2xl text-primary mb-6 text-center">Berikut Daftar Nama Asatidz Madrasah Takmiliyah Ula Assafiiyah Kaliasem Kejiwan:</h3>
            <div class="bg-white rounded-xl shadow-lg overflow-hidden border border-gray-200">
                <div class="overflow-x-auto">
                    <table class="w-full text-left border-collapse">
                        <thead>
                            <tr class="bg-primary text-white">
                                <th class="py-4 px-4 border-b border-r border-green-800 text-center w-16 font-semibold">NO.</th>
                                <th class="py-4 px-4 border-b border-r border-green-800 text-center font-semibold">Nama Asatidz</th>
                                <th class="py-4 px-4 border-b border-r border-green-800 text-center font-semibold w-1/4">Jabatan</th>
                                <th class="py-4 px-4 border-b border-green-800 text-center font-semibold w-1/3">Keahlian</th>
                            </tr>
                        </thead>
                        <tbody class="text-gray-700">
                            <tr class="hover:bg-green-50 transition-colors">
                                <td class="py-3 px-4 border-b border-r border-gray-200 text-center font-medium">1.</td>
                                <td class="py-3 px-4 border-b border-r border-gray-200 text-center">Riza Kusumawati, S. Pd</td>
                                <td class="py-3 px-4 border-b border-r border-gray-200 text-center">Kepala Madrasah</td>
                                <td class="py-3 px-4 border-b border-gray-200 text-center">Guru Madrasah Diniyah</td>
                            </tr>
                            <tr class="hover:bg-green-50 transition-colors bg-gray-50">
                                <td class="py-3 px-4 border-b border-r border-gray-200 text-center font-medium">2.</td>
                                <td class="py-3 px-4 border-b border-r border-gray-200 text-center">Mohamad Imam</td>
                                <td class="py-3 px-4 border-b border-r border-gray-200 text-center">Wali Kelas 4</td>
                                <td class="py-3 px-4 border-b border-gray-200 text-center">Guru Madrasah Diniyah</td>
                            </tr>
                            <tr class="hover:bg-green-50 transition-colors">
                                <td class="py-3 px-4 border-b border-r border-gray-200 text-center font-medium">3.</td>
                                <td class="py-3 px-4 border-b border-r border-gray-200 text-center">Amrullah</td>
                                <td class="py-3 px-4 border-b border-r border-gray-200 text-center">Wali Kelas 3</td>
                                <td class="py-3 px-4 border-b border-gray-200 text-center">Guru Madrasah Diniyah</td>
                            </tr>
                            <tr class="hover:bg-green-50 transition-colors bg-gray-50">
                                <td class="py-3 px-4 border-b border-r border-gray-200 text-center font-medium">4.</td>
                                <td class="py-3 px-4 border-b border-r border-gray-200 text-center">Anilah</td>
                                <td class="py-3 px-4 border-b border-r border-gray-200 text-center">Wali Kelas 2</td>
                                <td class="py-3 px-4 border-b border-gray-200 text-center">Guru Madrasah Diniyah</td>
                            </tr>
                            <tr class="hover:bg-green-50 transition-colors">
                                <td class="py-3 px-4 border-b border-r border-gray-200 text-center font-medium">5.</td>
                                <td class="py-3 px-4 border-b border-r border-gray-200 text-center">Raniti</td>
                                <td class="py-3 px-4 border-b border-r border-gray-200 text-center">Wali Kelas 1</td>
                                <td class="py-3 px-4 border-b border-gray-200 text-center">Guru Madrasah Diniyah</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
</section>
@endsection
