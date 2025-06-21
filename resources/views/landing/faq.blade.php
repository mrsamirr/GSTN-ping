<secton class="min-h-screen bg-stone-50">
  

    <main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
            <div class="text-center mb-16">
                <h2 class="text-4xl lg:text-5xl font-bold text-gray-900 mb-6">Frequently Asked Questions</h2>
                <p class="text-lg text-gray-600 max-w-3xl mx-auto">
                    Got questions? We've got answers. If you can't find what you're looking for, feel free to contact our
                    support team.
                </p>
            </div>

            <div class="max-w-4xl mx-auto space-y-4">
                @php
                    $faqs = [
                        [
                            'question' => 'What is GSTPing?',
                            'answer' => 'GSTPing is an AI-powered application development platform that allows you to build custom software applications using natural language. Instead of writing code, you simply describe what you want your app to do, and our AI generates the application for you. It\'s designed to make app development accessible to everyone, regardless of technical background.',
                        ],
                        [
                            'question' => 'Do I need coding experience to use GSTPing?',
                            'answer' => 'No, you don\'t need any coding experience to use GSTPing. Our platform is designed specifically for non-technical users. You simply describe your app requirements in plain English, and our AI handles all the technical implementation. However, if you do have coding experience, you can also customize and extend your applications further.',
                        ],
                        [
                            'question' => 'What types of applications can I build with GSTPing?',
                            'answer' => 'You can build a wide variety of applications including customer portals, internal business tools, productivity apps, data management systems, workflow automation tools, and MVP prototypes. GSTPing supports web applications, mobile-responsive interfaces, and can integrate with various third-party services and databases.',
                        ],
                        [
                            'question' => 'What kind of integrations does GSTPing support?',
                            'answer' => 'GSTPing supports integrations with popular services including Google Workspace, Microsoft 365, Slack, Zapier, Stripe for payments, various databases (MySQL, PostgreSQL, MongoDB), REST APIs, and many other third-party services. We\'re constantly adding new integrations based on user demand.',
                        ],
                        [
                            'question' => 'How are GSTPing applications deployed?',
                            'answer' => 'GSTPing applications are automatically deployed to secure cloud infrastructure with just one click. We handle all the server management, scaling, and maintenance for you. Your apps are hosted on enterprise-grade infrastructure with 99.9% uptime guarantee, SSL certificates, and automatic backups.',
                        ],
                        [
                            'question' => 'How does the natural language development process work?',
                            'answer' => 'Simply describe your app idea in conversational English - for example, \'I want a customer feedback system where users can submit reviews and I can respond to them.\' Our AI analyzes your requirements, asks clarifying questions if needed, and then generates a fully functional application. You can iterate and refine your app by providing additional instructions.',
                        ],
                        [
                            'question' => 'Is my data secure with GSTPing?',
                            'answer' => 'Yes, security is our top priority. All data is encrypted in transit and at rest using industry-standard encryption. We\'re SOC 2 compliant and follow strict data protection protocols. Your applications run in isolated environments, and we never access your business data. You maintain full ownership and control of your data at all times.',
                        ],
                    ];
                @endphp

                @foreach($faqs as $index => $faq)
                    <div class="bg-white rounded-xl border border-gray-200 hover:border-gray-300 transition-colors overflow-hidden">
                        <button 
                            class="w-full px-6 py-5 text-left flex items-center justify-between hover:bg-gray-50 transition-colors faq-toggle"
                            data-faq="{{ $index }}"
                            type="button"
                        >
                            <span class="font-medium text-gray-900 text-lg">{{ $faq['question'] }}</span>
                            <svg 
                                class="w-5 h-5 text-gray-500 flex-shrink-0 transition-transform duration-200 chevron-icon"
                                fill="none" 
                                stroke="currentColor" 
                                viewBox="0 0 24 24"
                            >
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                            </svg>
                        </button>

                        <div class="faq-content hidden" data-faq-content="{{ $index }}">
                            <div class="px-6 pb-5">
                                <div class="pt-2 border-t border-gray-100">
                                    <p class="text-gray-600 leading-relaxed">{{ $faq['answer'] }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
    </main>
</section>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const faqToggles = document.querySelectorAll('.faq-toggle');
    
    faqToggles.forEach(toggle => {
        toggle.addEventListener('click', function() {
            const faqIndex = this.getAttribute('data-faq');
            const content = document.querySelector(`[data-faq-content="${faqIndex}"]`);
            const chevron = this.querySelector('.chevron-icon');
            
            faqToggles.forEach(otherToggle => {
                if (otherToggle !== this) {
                    const otherIndex = otherToggle.getAttribute('data-faq');
                    const otherContent = document.querySelector(`[data-faq-content="${otherIndex}"]`);
                    const otherChevron = otherToggle.querySelector('.chevron-icon');
                    
                    otherContent.classList.add('hidden');
                    otherChevron.classList.remove('rotate-180');
                }
            });
            
            if (content.classList.contains('hidden')) {
                content.classList.remove('hidden');
                chevron.classList.add('rotate-180');
            } else {
                content.classList.add('hidden');
                chevron.classList.remove('rotate-180');
            }
        });
    });
});
</script>