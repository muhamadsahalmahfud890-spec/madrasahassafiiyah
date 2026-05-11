@props(['agenda'])

<div class="bg-white rounded-lg shadow-sm hover:shadow-md transition-shadow duration-300 flex overflow-hidden border border-gray-100 group">
    <!-- Left Box: Date & Month -->
    <div class="bg-accent text-white w-24 flex-shrink-0 flex flex-col items-center justify-center p-3 border-l-4 border-primary">
        <span class="font-heading font-bold text-3xl leading-none shadow-sm">{{ \Carbon\Carbon::parse($agenda->start_date)->format('d') }}</span>
        <span class="text-sm font-medium tracking-widest uppercase mt-1 opacity-90">{{ \Carbon\Carbon::parse($agenda->start_date)->translatedFormat('M') }}</span>
        <span class="text-xs opacity-75 mt-1">{{ \Carbon\Carbon::parse($agenda->start_date)->format('Y') }}</span>
    </div>

    <!-- Right Box: Content -->
    <div class="p-4 flex-grow flex flex-col justify-center">
        <h4 class="font-heading font-bold text-lg text-gray-900 group-hover:text-primary transition-colors leading-tight mb-1">
            {{ $agenda->title }}
        </h4>
        
        @if($agenda->location)
        <div class="flex items-center text-gray-500 text-xs mb-2">
            <i class="fas fa-map-marker-alt text-primary opacity-70 w-4"></i>
            <span class="truncate">{{ $agenda->location }}</span>
        </div>
        @endif

        <p class="text-gray-600 text-sm italic line-clamp-2">
            {{ \Illuminate\Support\Str::limit(strip_tags($agenda->description), 80) }}
        </p>
    </div>
</div>
