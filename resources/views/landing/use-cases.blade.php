<section class="min-h-screen bg-stone-50">
    

    <main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
        <div class="text-center mb-20">
            <h1 class="text-5xl lg:text-6xl font-bold text-gray-900 leading-tight mb-6">
                Save time, money and headaches.
                <br />
                Let AI build your apps.
            </h1>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                No coding, no expensive consultants, no time-consuming development.
            </p>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
            @php
                $useCases = [
                    [
                        'icon' => 'code',
                        'title' => 'Replace expensive SaaS',
                        'description' => 'Create custom solutions that fit your needs without ongoing subscription costs.',
                        'bgColor' => 'bg-blue-50',
                        'iconColor' => 'text-blue-600',
                    ],
                    [
                        'icon' => 'wrench',
                        'title' => 'Build backoffice tools',
                        'description' => 'Automate internal processes with tailored applications for your team.',
                        'bgColor' => 'bg-gray-50',
                        'iconColor' => 'text-gray-600',
                    ],
                    [
                        'icon' => 'database',
                        'title' => 'Build personal productivity apps',
                        'description' => 'Create custom tools to manage your tasks, notes, and schedules efficiently.',
                        'bgColor' => 'bg-green-50',
                        'iconColor' => 'text-green-600',
                    ],
                    [
                        'icon' => 'settings',
                        'title' => 'Develop customer portals',
                        'description' => 'Build secure, user-friendly interfaces for your clients to access their information and services.',
                        'bgColor' => 'bg-orange-50',
                        'iconColor' => 'text-orange-600',
                    ],
                    [
                        'icon' => 'zap',
                        'title' => 'Automate business processes',
                        'description' => 'Streamline your workflows with custom apps that integrate with your existing systems.',
                        'bgColor' => 'bg-yellow-50',
                        'iconColor' => 'text-yellow-600',
                    ],
                    [
                        'icon' => 'lock',
                        'title' => 'Rapidly create MVPs and prototype your ideas',
                        'description' => 'Quickly build and test minimum viable products to validate your concepts and iterate on your ideas.',
                        'bgColor' => 'bg-purple-50',
                        'iconColor' => 'text-purple-600',
                    ],
                ];
            @endphp

            @foreach($useCases as $useCase)
                <div class="bg-white rounded-2xl p-8 shadow-sm hover:shadow-md transition-shadow duration-300">
                    <div class="w-16 h-16 {{ $useCase['bgColor'] }} rounded-2xl flex items-center justify-center mb-6">
                        @switch($useCase['icon'])
                            @case('code')
                                <svg class="w-8 h-8 {{ $useCase['iconColor'] }}" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"/>
                                </svg>
                                @break
                            @case('wrench')
                                <svg class="w-8 h-8 {{ $useCase['iconColor'] }}" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 4a2 2 0 114 0v1a1 1 0 001 1h3a1 1 0 011 1v3a1 1 0 01-1 1h-1a2 2 0 100 4h1a1 1 0 011 1v3a1 1 0 01-1 1h-3a1 1 0 01-1-1v-1a2 2 0 10-4 0v1a1 1 0 01-1 1H7a1 1 0 01-1-1v-3a1 1 0 00-1-1H4a2 2 0 110-4h1a1 1 0 001-1V7a1 1 0 011-1h3a1 1 0 001-1V4z"/>
                                </svg>
                                @break
                            @case('database')
                                <svg class="w-8 h-8 {{ $useCase['iconColor'] }}" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 7v10c0 2.21 3.582 4 8 4s8-1.79 8-4V7M4 7c0 2.21 3.582 4 8 4s8-1.79 8-4M4 7c0-2.21 3.582-4 8-4s8 1.79 8 4m0 5c0 2.21-3.582 4-8 4s-8-1.79-8-4"/>
                                </svg>
                                @break
                            @case('settings')
                                <svg class="w-8 h-8 {{ $useCase['iconColor'] }}" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"/>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                                </svg>
                                @break
                            @case('zap')
                                <svg class="w-8 h-8 {{ $useCase['iconColor'] }}" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                                </svg>
                                @break
                            @case('lock')
                                <svg class="w-8 h-8 {{ $useCase['iconColor'] }}" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/>
                                </svg>
                                @break
                        @endswitch
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900 mb-4 leading-tight">{{ $useCase['title'] }}</h3>
                    <p class="text-gray-600 leading-relaxed">{{ $useCase['description'] }}</p>
                </div>
            @endforeach
        </div>
    </main>
</section>
