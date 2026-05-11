@props(['post'])

@php
    $badgeColor = match(strtolower($post->category)) {
        'berita' => 'bg-green-100 text-green-800 border-green-200',
        'pengumuman' => 'bg-blue-100 text-blue-800 border-blue-200',
        'prestasi' => 'bg-accent bg-opacity-20 text-accent border-accent border-opacity-30',
        default => 'bg-gray-100 text-gray-800 border-gray-200',
    };
    
    $imageUrl = $post->image ? asset('storage/' . $post->image) : "https://picsum.photos/seed/{$post->id}/800/450";
@endphp

<article class="bg-white rounded-xl shadow-md hover:shadow-xl transform hover:-translate-y-2 transition-all duration-300 overflow-hidden flex flex-col h-full border border-gray-100">
    <!-- Image Section -->
    <a href="{{ route('artikel.show', $post->slug) }}" class="block relative aspect-video overflow-hidden">
        <img src="{{ $imageUrl }}" 
             alt="{{ $post->title }}" 
             loading="lazy" 
             class="w-full h-full object-cover transition-transform duration-500 hover:scale-105">
        
        <!-- Category Badge -->
        <div class="absolute top-4 left-4">
            <span class="px-3 py-1 rounded-full text-xs font-semibold uppercase tracking-wider border backdrop-blur-sm bg-white/90 shadow-sm {{ $badgeColor }}">
                {{ $post->category }}
            </span>
        </div>
    </a>

    <!-- Content Section -->
    <div class="p-6 flex flex-col flex-grow">
        <div class="flex items-center text-gray-500 text-xs mb-3">
            <i class="far fa-calendar-alt mr-2 text-accent"></i>
            <span>{{ \Carbon\Carbon::parse($post->published_at ?? $post->created_at)->translatedFormat('d M Y') }}</span>
        </div>

        <a href="{{ route('artikel.show', $post->slug) }}" class="group block mb-3">
            <h3 class="font-heading font-bold text-xl text-gray-900 group-hover:text-primary transition-colors line-clamp-2 leading-snug">
                {{ $post->title }}
            </h3>
        </a>

        <p class="text-gray-600 text-sm mb-6 line-clamp-3 leading-relaxed flex-grow">
            {{ \Illuminate\Support\Str::limit($post->excerpt ?? strip_tags($post->content), 100) }}
        </p>

        <!-- Read More Button -->
        <div class="mt-auto pt-4 border-t border-gray-100">
            <a href="{{ route('artikel.show', $post->slug) }}" class="inline-flex items-center text-sm font-semibold text-primary hover:text-green-800 transition-colors group">
                Baca Selengkapnya
                <i class="fas fa-arrow-right ml-2 text-xs transform group-hover:translate-x-1 transition-transform"></i>
            </a>
        </div>
    </div>
</article>
