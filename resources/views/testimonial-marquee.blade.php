<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Testimonial Marquee</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @keyframes marquee-left {
            0% {
                transform: translateX(0%);
            }
            100% {
                transform: translateX(-50%);
            }
        }

        @keyframes marquee-right {
            0% {
                transform: translateX(-50%);
            }
            100% {
                transform: translateX(0%);
            }
        }

        .animate-marquee-left {
            animation: marquee-left linear infinite;
        }

        .animate-marquee-right {
            animation: marquee-right linear infinite;
        }

        .group:hover .animate-marquee-left,
        .group:hover .animate-marquee-right {
            animation-play-state: paused;
        }

        .line-clamp-4 {
            display: -webkit-box;
            -webkit-line-clamp: 4;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }
    </style>
</head>
<body>
    <div class="w-full overflow-hidden bg-gradient-to-br from-blue-50 via-purple-50 to-pink-50 py-12">
        <div class="mb-8 text-center">
            <h2 class="text-3xl font-bold text-gray-900 mb-2">What Developers Are Saying</h2>
            <p class="text-gray-600">Join thousands of developers who are building faster with AI</p>
        </div>
        
        <div class="space-y-6">
            <div class="relative overflow-hidden py-2 group">
                <div class="flex gap-4 animate-marquee-left group-hover:pause" style="animation-duration: 40s;">
                    @foreach([
                        [
                            'id' => '1',
                            'name' => 'Tristan Rhodes',
                            'username' => '@tristanrhodes',
                            'content' => 'The only vibe coding tool with "batteries included". This is absolutely incredible for rapid prototyping!',
                            'avatar' => 'https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=100&h=100&fit=crop&crop=face',
                            'platform' => 'product-hunt'
                        ],
                        [
                            'id' => '2',
                            'name' => 'Gumaba',
                            'username' => '@base_44',
                            'content' => 'Your solution is incredible! I\'ve tested several AI coding tools and this one stands out. The UI generation is phenomenal.',
                            'avatar' => 'https://images.unsplash.com/photo-1494790108755-2616b612b786?w=100&h=100&fit=crop&crop=face',
                            'platform' => 'twitter'
                        ],
                        [
                            'id' => '3',
                            'name' => 'Yarden On',
                            'username' => '@yarden_on',
                            'content' => 'All I\'ve been hearing about in the past few days is how amazing this tool is. Finally got to try it and WOW!',
                            'avatar' => 'https://images.unsplash.com/photo-1438761681033-6461ffad8d80?w=100&h=100&fit=crop&crop=face',
                            'platform' => 'linkedin'
                        ],
                        [
                            'id' => '4',
                            'name' => 'Harel Asaf',
                            'username' => '@harelasaf',
                            'content' => 'GSTPing is hands down the best AI tool ever! The speed and accuracy of code generation is unmatched.',
                            'avatar' => 'https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?w=100&h=100&fit=crop&crop=face',
                            'platform' => 'product-hunt'
                        ],
                        [
                            'id' => '5',
                            'name' => 'Mauricio Rubio',
                            'username' => '@mauriciorubio',
                            'content' => 'The all-in-one, batteries included value proposition from GSTPing is exactly what developers need today.',
                            'avatar' => 'https://images.unsplash.com/photo-1500648767791-00dcc994a43e?w=100&h=100&fit=crop&crop=face',
                            'platform' => 'twitter'
                        ]
                    ] as $testimonial)
                        @include('testimonial-card', $testimonial)
                    @endforeach
                    
                    @foreach([
                        [
                            'id' => '1',
                            'name' => 'Tristan Rhodes',
                            'username' => '@tristanrhodes',
                            'content' => 'The only vibe coding tool with "batteries included". This is absolutely incredible for rapid prototyping!',
                            'avatar' => 'https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=100&h=100&fit=crop&crop=face',
                            'platform' => 'product-hunt'
                        ],
                        [
                            'id' => '2',
                            'name' => 'Gumaba',
                            'username' => '@base_44',
                            'content' => 'Your solution is incredible! I\'ve tested several AI coding tools and this one stands out. The UI generation is phenomenal.',
                            'avatar' => 'https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?w=100&h=100&fit=crop&crop=face',
                            'platform' => 'twitter'
                        ],
                        [
                            'id' => '3',
                            'name' => 'Yarden On',
                            'username' => '@yarden_on',
                            'content' => 'All I\'ve been hearing about in the past few days is how amazing this tool is. Finally got to try it and WOW!',
                            'avatar' => 'https://images.unsplash.com/photo-1438761681033-6461ffad8d80?w=100&h=100&fit=crop&crop=face',
                            'platform' => 'linkedin'
                        ],
                        [
                            'id' => '4',
                            'name' => 'Harel Asaf',
                            'username' => '@harelasaf',
                            'content' => 'GSTPing is hands down the best AI tool ever! The speed and accuracy of code generation is unmatched.',
                            'avatar' => 'https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?w=100&h=100&fit=crop&crop=face',
                            'platform' => 'product-hunt'
                        ],
                        [
                            'id' => '5',
                            'name' => 'Mauricio Rubio',
                            'username' => '@mauriciorubio',
                            'content' => 'The all-in-one, batteries included value proposition from GSTPing is exactly what developers need today.',
                            'avatar' => 'https://images.unsplash.com/photo-1500648767791-00dcc994a43e?w=100&h=100&fit=crop&crop=face',
                            'platform' => 'twitter'
                        ]
                    ] as $testimonial)
                        @include('testimonial-card', $testimonial)
                    @endforeach
                </div>
            </div>

            <div class="relative overflow-hidden py-2 group">
                <div class="flex gap-4 animate-marquee-right group-hover:pause" style="animation-duration: 55s;">
                    @foreach([
                        [
                            'id' => '6',
                            'name' => 'Best of Philosophy',
                            'username' => '@BotPhilosophyQ',
                            'content' => 'GSTPing looks perfect for founders who want to build fast without compromising on quality. Impressive work!',
                            'avatar' => 'https://images.unsplash.com/photo-1534528741775-53994a69daeb?w=100&h=100&fit=crop&crop=face',
                            'platform' => 'twitter'
                        ],
                        [
                            'id' => '7',
                            'name' => 'Ariel MI',
                            'username' => '@arielmi',
                            'content' => 'Amazing understanding of the developer needs and thorough handling of edge cases. This is revolutionary!',
                            'avatar' => 'https://images.unsplash.com/photo-1527980965255-d3b416303d12?w=100&h=100&fit=crop&crop=face',
                            'platform' => 'product-hunt'
                        ],
                        [
                            'id' => '8',
                            'name' => 'Shubham Agrawal',
                            'username' => '@shubhamagrawal',
                            'content' => 'Very helpful for new entrepreneurs and lets people build functional prototypes in minutes rather than weeks.',
                            'avatar' => 'https://images.unsplash.com/photo-1560250097-0b93528c311a?w=100&h=100&fit=crop&crop=face',
                            'platform' => 'linkedin'
                        ],
                        [
                            'id' => '9',
                            'name' => 'Felipe Teixeira',
                            'username' => '@felipeteixeira',
                            'content' => 'I have already developed three systems with the GSTPing app, and the results have been phenomenal every time.',
                            'avatar' => 'https://images.unsplash.com/photo-1507591064344-4c6ce005b128?w=100&h=100&fit=crop&crop=face',
                            'platform' => 'product-hunt'
                        ],
                        [
                            'id' => '10',
                            'name' => 'Assaf Dagan',
                            'username' => '@assafdagan',
                            'content' => 'I am so impressed with the ease of work and its level. WOW! This changes everything about how we build apps.',
                            'avatar' => 'https://images.unsplash.com/photo-1519085360753-af0119f7cbe7?w=100&h=100&fit=crop&crop=face',
                            'platform' => 'twitter'
                        ]
                    ] as $testimonial)
                        @include('testimonial-card', $testimonial)
                    @endforeach
                    
                    @foreach([
                        [
                            'id' => '6',
                            'name' => 'Best of Philosophy',
                            'username' => '@BotPhilosophyQ',
                            'content' => 'GSTPing looks perfect for founders who want to build fast without compromising on quality. Impressive work!',
                            'avatar' => 'https://images.unsplash.com/photo-1534528741775-53994a69daeb?w=100&h=100&fit=crop&crop=face',
                            'platform' => 'twitter'
                        ],
                        [
                            'id' => '7',
                            'name' => 'Ariel MI',
                            'username' => '@arielmi',
                            'content' => 'Amazing understanding of the developer needs and thorough handling of edge cases. This is revolutionary!',
                            'avatar' => 'https://images.unsplash.com/photo-1527980965255-d3b416303d12?w=100&h=100&fit=crop&crop=face',
                            'platform' => 'product-hunt'
                        ],
                        [
                            'id' => '8',
                            'name' => 'Shubham Agrawal',
                            'username' => '@shubhamagrawal',
                            'content' => 'Very helpful for new entrepreneurs and lets people build functional prototypes in minutes rather than weeks.',
                            'avatar' => 'https://images.unsplash.com/photo-1560250097-0b93528c311a?w=100&h=100&fit=crop&crop=face',
                            'platform' => 'linkedin'
                        ],
                        [
                            'id' => '9',
                            'name' => 'Felipe Teixeira',
                            'username' => '@felipeteixeira',
                            'content' => 'I have already developed three systems with the GSTPing app, and the results have been phenomenal every time.',
                            'avatar' => 'https://images.unsplash.com/photo-1507591064344-4c6ce005b128?w=100&h=100&fit=crop&crop=face',
                            'platform' => 'product-hunt'
                        ],
                        [
                            'id' => '10',
                            'name' => 'Assaf Dagan',
                            'username' => '@assafdagan',
                            'content' => 'I am so impressed with the ease of work and its level. WOW! This changes everything about how we build apps.',
                            'avatar' => 'https://images.unsplash.com/photo-1519085360753-af0119f7cbe7?w=100&h=100&fit=crop&crop=face',
                            'platform' => 'twitter'
                        ]
                    ] as $testimonial)
                        @include('testimonial-card', $testimonial)
                    @endforeach
                </div>
            </div>
        </div>
    </div>

    @php
    @endphp

    <script type="text/template" id="testimonial-card-template">
        <div class="bg-white/80 backdrop-blur-sm border border-gray-200/50 rounded-2xl p-4 shadow-lg hover:shadow-xl transition-all duration-300 min-w-[320px] max-w-[400px] mx-3">
            <div class="flex items-start gap-3 mb-3">
                <img
                    src="{{ $avatar ?? '' }}"
                    alt="{{ $name ?? '' }}"
                    class="w-10 h-10 rounded-full object-cover border-2 border-white shadow-sm"
                />
                <div class="flex-1 min-w-0">
                    <div class="flex items-center gap-2">
                        <h4 class="font-semibold text-gray-900 text-sm truncate">{{ $name ?? '' }}</h4>
                        @if(isset($platform))
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
                        @endif
                    </div>
                    <p class="text-gray-600 text-xs">{{ $username ?? '' }}</p>
                </div>
            </div>
            <p class="text-gray-700 text-sm leading-relaxed line-clamp-4">{{ $content ?? '' }}</p>
        </div>
    </script>

    <style>
        #testimonial-card-template {
            display: none;
        }
    </style>

   
</body>
</html>