<div class="bg-white/80 backdrop-blur-sm border border-gray-200/50 rounded-2xl p-4 shadow-lg hover:shadow-xl transition-all duration-300 min-w-[320px] max-w-[400px] mx-3">
    <div class="flex items-start gap-3 mb-3">
        <img
            src="{{ $avatar }}"
            alt="{{ $name }}"
            class="w-10 h-10 rounded-full object-cover border-2 border-white shadow-sm"
        />
        <div class="flex-1 min-w-0">
            <div class="flex items-center gap-2">
                <h4 class="font-semibold text-gray-900 text-sm truncate">{{ $name }}</h4>
                @if($platform === 'twitter')
                    <div class="w-4 h-4 bg-black rounded-full flex items-center justify-center">
                        <span class="text-white text-xs">𝕏</span>
                    </div>
                @elseif($platform === 'linkedin')
                    <div class="w-4 h-4 bg-blue-600 rounded flex items-center justify-center">
                        <span class="text-white text-xs font-bold">in</span>
                    </div>
                @elseif($platform === 'product-hunt')
                    <div class="w-4 h-4 bg-orange-500 rounded flex items-center justify-center">
                        <span class="text-white text-xs">P</span>
                    </div>
                @endif
            </div>
            <p class="text-gray-600 text-xs">{{ $username }}</p>
        </div>
    </div>
    <p class="text-gray-700 text-sm leading-relaxed line-clamp-4">{{ $content }}</p>
</div>