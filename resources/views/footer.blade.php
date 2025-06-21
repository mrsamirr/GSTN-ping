<footer class="py-12 px-4 md:px-6 z-50">
    <div class="container mx-auto">
        <div class="flex flex-col md:flex-row justify-between">
            <div class="mb-8 md:mb-0">
                <a href="{{ url('/') }}" class="mr-4 flex items-center gap-2 lg:mr-6">
                    <div class="h-6 w-6 bg-neutral-100 border-neutral-300 border dark:bg-white rounded-md flex items-center justify-center p-1">
                        <svg class="h-5 w-5 text-black" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12 2L2 7v10c0 5.55 3.84 9.74 9 11 5.16-1.26 9-5.45 9-11V7l-10-5z"/>
                        </svg>
                    </div>
                    <span class="font-bold lg:inline-block">
                        GSTPing
                    </span>
                </a>

                
                
                <div class="mt-2">
                    <a href="https://x.com/compose/tweet?text=I%27ve%20been%20using%20%23SpectrumUI%20 share%20yourtought%20%40arihantCodes%20">
                        <button class="inline-flex items-center justify-center whitespace-nowrap rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 bg-secondary text-secondary-foreground hover:bg-secondary/80 h-10 px-4 py-2">
                            Share Your Thoughts On
                            <svg class="ml-1 w-3.5 h-3.5" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z"/>
                            </svg>
                        </button>
                    </a>
                </div>
                
                <p class="text-sm dark:text-gray-400 mt-5">
                    © {{ date('Y') }} GSTPing. All rights reserved.
                </p>
            </div>
            
            <div class="grid grid-cols-2 md:grid-cols-4 gap-8">
                <div>
                    <h3 class="font-semibold mb-4">Pages</h3>
                    <ul class="space-y-2">
                        <li>
                            <a href="{{ url('/docs') }}" class="text-gray-600 hover:text-black dark:text-gray-400 dark:hover:text-white">
                                Docs
                            </a>
                        </li>
                        <li>
                            <a href="{{ url('/blocks') }}" class="text-gray-600 hover:text-black dark:text-gray-400 dark:hover:text-white">
                                Blocks
                            </a>
                        </li>
                        <li>
                            <a href="{{ url('/colors') }}" class="text-gray-600 hover:text-black dark:text-gray-400 dark:hover:text-white">
                                Colors
                            </a>
                        </li>
                    </ul>
                </div>
                
                <div>
                    <h3 class="font-semibold mb-4">Socials</h3>
                    <ul class="space-y-2">
                        <li>
                            <a href="https://github.com/" class="text-gray-600 hover:text-black dark:text-gray-400 dark:hover:text-white">
                                Github
                            </a>
                        </li>
                        <li>
                            <a href="https://www.linkedin.com/in/" class="text-gray-600 hover:text-black dark:text-gray-400 dark:hover:text-white">
                                LinkedIn
                            </a>
                        </li>
                        <li>
                            <a href="https://x.com/" class="text-gray-600 hover:text-black dark:text-gray-400 dark:hover:text-white">
                                X
                            </a>
                        </li>
                    </ul>
                </div>
                
                <div>
                    <h3 class="font-semibold mb-4">Legal</h3>
                    <ul class="space-y-2">
                        <li>
                            <a href="{{ url('/privacy-policy') }}" class="text-gray-600 hover:text-black dark:text-gray-400 dark:hover:text-white">
                                Privacy Policy
                            </a>
                        </li>
                        <li>
                            <a href="{{ url('/tos') }}" class="text-gray-600 hover:text-black dark:text-gray-400 dark:hover:text-white">
                                Terms of Service
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        
        <div class="w-full flex mt-4 items-center justify-center">
            <h1 class="text-center text-3xl md:text-5xl lg:text-[10rem] font-bold bg-clip-text text-transparent bg-gradient-to-b from-neutral-700 to-neutral-900 select-none">
                GSTPing
            </h1>
        </div>
    </div>
</footer> 