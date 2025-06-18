<section class="max-w-4xl mx-auto">
    <div class="text-center mb-12">
        <h1 class="text-4xl font-bold text-gray-800 mb-4">
            Never Miss Another GST Filing Deadline
        </h1>
        <p class="text-xl text-gray-600 mb-8">
            Get automated SMS & WhatsApp reminders for GSTR-1, GSTR-3B filings. 
            Stay compliant, avoid penalties.
        </p>
        
        <div class="flex justify-center space-x-8 mb-8">
            <div class="text-center">
                <div class="bg-green-100 rounded-full w-16 h-16 flex items-center justify-center mx-auto mb-2">
                    <i class="fas fa-sms text-green-600 text-2xl"></i>
                </div>
                <span class="text-sm font-medium">SMS Alerts</span>
            </div>
            <div class="text-center">
                <div class="bg-green-100 rounded-full w-16 h-16 flex items-center justify-center mx-auto mb-2">
                    <i class="fab fa-whatsapp text-green-600 text-2xl"></i>
                </div>
                <span class="text-sm font-medium">WhatsApp</span>
            </div>
            <div class="text-center">
                <div class="bg-green-100 rounded-full w-16 h-16 flex items-center justify-center mx-auto mb-2">
                    <i class="fas fa-calendar-check text-green-600 text-2xl"></i>
                </div>
                <span class="text-sm font-medium">Auto Reminders</span>
            </div>
        </div>
    </div>

    <div class="bg-white rounded-lg shadow-lg p-8 max-w-md mx-auto">
        <h2 class="text-2xl font-bold text-center mb-6">Start Your GST Reminders</h2>
        
        @if ($errors->any())
            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-4">
                <ul class="list-disc list-inside">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('subscribe') }}" method="POST" class="space-y-4">
            @csrf
            
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">
                    GSTIN <span class="text-red-500">*</span>
                </label>
                <input 
                    type="text" 
                    name="gstin" 
                    value="{{ old('gstin') }}"
                    placeholder="22AAAAA0000A1Z5"
                    maxlength="15"
                    class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 uppercase"
                    required
                >
                <p class="text-xs text-gray-500 mt-1">15-digit GST Identification Number</p>
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">
                    Phone Number <span class="text-red-500">*</span>
                </label>
                <input 
                    type="tel" 
                    name="phone" 
                    value="{{ old('phone') }}"
                    placeholder="9876543210"
                    class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
                    required
                >
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">
                    Email Address <span class="text-red-500">*</span>
                </label>
                <input 
                    type="email" 
                    name="email" 
                    value="{{ old('email') }}"
                    placeholder="your@email.com"
                    class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
                    required
                >
            </div>

            <div class="grid grid-cols-2 gap-4">
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">
                        Days Before
                    </label>
                    <select name="reminder_days" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                        <option value="2" {{ old('reminder_days', 2) == 2 ? 'selected' : '' }}>2 Days</option>
                        <option value="3" {{ old('reminder_days') == 3 ? 'selected' : '' }}>3 Days</option>
                        <option value="5" {{ old('reminder_days') == 5 ? 'selected' : '' }}>5 Days</option>
                        <option value="7" {{ old('reminder_days') == 7 ? 'selected' : '' }}>7 Days</option>
                    </select>
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">
                        Hours Before
                    </label>
                    <select name="reminder_hours" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                        <option value="2" {{ old('reminder_hours', 2) == 2 ? 'selected' : '' }}>2 Hours</option>
                        <option value="4" {{ old('reminder_hours') == 4 ? 'selected' : '' }}>4 Hours</option>
                        <option value="6" {{ old('reminder_hours') == 6 ? 'selected' : '' }}>6 Hours</option>
                        <option value="12" {{ old('reminder_hours') == 12 ? 'selected' : '' }}>12 Hours</option>
                    </select>
                </div>
            </div>

            <div class="border-t pt-4">
                <div class="text-center mb-4">
                    <span class="text-2xl font-bold text-green-600">₹99</span>
                    <span class="text-gray-500">/month</span>
                </div>
                
                <button 
                    type="submit" 
                    class="w-full bg-blue-600 text-white py-3 px-4 rounded-md hover:bg-blue-700 transition duration-200 font-medium"
                >
                    <i class="fas fa-credit-card mr-2"></i>
                    Activate for ₹99 / month
                </button>
                
                <p class="text-xs text-gray-500 text-center mt-2">
                    Cancel anytime. No hidden charges.
                </p>
            </div>
        </form>
    </div>

    <div class="mt-16 grid md:grid-cols-3 gap-8">
        <div class="text-center p-6">
            <div class="bg-blue-100 rounded-full w-20 h-20 flex items-center justify-center mx-auto mb-4">
                <i class="fas fa-bell text-blue-600 text-3xl"></i>
            </div>
            <h3 class="text-xl font-semibold mb-2">Smart Reminders</h3>
            <p class="text-gray-600">Get notified 2 days and 2 hours before every GST filing deadline.</p>
        </div>
        
        <div class="text-center p-6">
            <div class="bg-green-100 rounded-full w-20 h-20 flex items-center justify-center mx-auto mb-4">
                <i class="fas fa-shield-alt text-green-600 text-3xl"></i>
            </div>
            <h3 class="text-xl font-semibold mb-2">Stay Compliant</h3>
            <p class="text-gray-600">Never miss GSTR-1, GSTR-3B deadlines. Avoid penalties and interest.</p>
        </div>
        
        <div class="text-center p-6">
            <div class="bg-purple-100 rounded-full w-20 h-20 flex items-center justify-center mx-auto mb-4">
                <i class="fas fa-mobile-alt text-purple-600 text-3xl"></i>
            </div>
            <h3 class="text-xl font-semibold mb-2">Multi-Channel</h3>
            <p class="text-gray-600">Receive alerts via SMS, WhatsApp, and email for maximum reliability.</p>
        </div>
    </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const gstinInput = document.querySelector('input[name="gstin"]');
    if (gstinInput) {
        gstinInput.addEventListener('input', function(e) {
            this.value = this.value.toUpperCase();
        });
    }
    
    const phoneInput = document.querySelector('input[name="phone"]');
    if (phoneInput) {
        phoneInput.addEventListener('input', function(e) {
            this.value = this.value.replace(/[^0-9]/g, '');
        });
    }
});
</script>

