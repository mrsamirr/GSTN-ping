 <section class="relative isolate overflow-hidden bg-gradient-to-br from-blue-50 to-purple-100 py-24 sm:py-32">
    <div class="absolute -top-20 -left-20 w-72 h-72 bg-purple-300 rounded-full mix-blend-multiply filter blur-3xl opacity-70 animate-blob"></div>
    <div class="absolute -bottom-24 -right-10 w-72 h-72 bg-blue-300 rounded-full mix-blend-multiply filter blur-3xl opacity-70 animate-blob animation-delay-2000"></div>

    <div class="max-w-7xl mx-auto px-6 lg:flex lg:items-center lg:gap-20 relative">
      <div class="flex-1" x-data="{tab:'CA'}">
        <div class="inline-flex bg-white rounded-full shadow mb-6">
          <template x-for="label in ['CA','Startup Founder','Tax Consultant']" :key="label">
            <button @click="tab=label"
                    :class="[
                      'px-4 py-2 text-sm font-medium rounded-full transition',
                      tab===label ? 'bg-primary text-white' : 'text-gray-700'
                    ]">
              <span x-text="label"></span>
            </button>
          </template>
        </div>

        <template x-if="tab==='CA'">
          <div>
            <h1 class="text-4xl sm:text-5xl md:text-6xl font-extrabold leading-tight text-gray-900 mb-6">
              Automate GST filings.<br />Save hours every month.
            </h1>
            <p class="text-lg sm:text-xl text-gray-700 mb-8">
              Chartered accountants use GstPing to schedule, file &amp; track returns for dozens of clients—error-free.
            </p>
          </div>
        </template>

        <template x-if="tab==='Startup Founder'">
          <div>
            <h1 class="text-4xl sm:text-5xl md:text-6xl font-extrabold leading-tight text-gray-900 mb-6">
              Focus on product.<br />Leave compliance to us.
            </h1>
            <p class="text-lg sm:text-xl text-gray-700 mb-8">
              Founders automate tax reminders, generate invoices &amp; stay audit-ready—without a finance team.
            </p>
          </div>
        </template>

        <template x-if="tab==='Tax Consultant'">
          <div>
            <h1 class="text-4xl sm:text-5xl md:text-6xl font-extrabold leading-tight text-gray-900 mb-6">
              Handle&nbsp;5× more clients.<br />No extra staff.
            </h1>
            <p class="text-lg sm:text-xl text-gray-700 mb-8">
              Consultants grow their practice by letting GstPing chase documents, payments &amp; due-dates automatically.
            </p>
          </div>
        </template>

        <a href="#notify"
           class="inline-flex items-center gap-2 px-8 py-4 rounded-lg bg-primary hover:bg-primary/90 text-white font-semibold text-lg shadow-lg transition">
          Get started for free
        </a>
      </div>

      <div class="flex-1 max-w-md mx-auto lg:mx-0 mt-12 lg:mt-0">
        <form id="subscriptionForm" action="{{ route('subscribe') }}" method="POST" class="space-y-4">
             @csrf
                <!-- GSTIN Field -->
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
                        class="form-control w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 uppercase"
                        required
                    >
                    <div class="invalid-feedback" id="gstin-error"></div>
                    <p class="text-xs text-gray-500 mt-1">15-digit GST Identification Number</p>
                </div>

                <!-- Phone Number Field -->
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">
                        Phone Number <span class="text-red-500">*</span>
                    </label>
                    <input 
                        type="tel" 
                        id="phone"
                        name="phone" 
                        placeholder="9876543210"
                        maxlength="10"
                        class="form-control w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
                        required
                    >
                    <div class="invalid-feedback" id="phone-error"></div>
                </div>

                <!-- Email Field -->
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">
                        Email Address <span class="text-red-500">*</span>
                    </label>
                    <input 
                        type="email" 
                        id="email"
                        name="email" 
                        placeholder="your@email.com"
                        class="form-control w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
                        required
                    >
                    <div class="invalid-feedback" id="email-error"></div>
                </div>

                <!-- Reminder Settings -->
                <div class="grid grid-cols-2 gap-4">
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">
                            Days Before
                        </label>
                        <select name="reminder_days" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                            <option value="2" selected>2 Days</option>
                            <option value="3">3 Days</option>
                            <option value="5">5 Days</option>
                            <option value="7">7 Days</option>
                        </select>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">
                            Hours Before
                        </label>
                        <select name="reminder_hours" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                            <option value="2" selected>2 Hours</option>
                            <option value="4">4 Hours</option>
                            <option value="6">6 Hours</option>
                            <option value="12">12 Hours</option>
                        </select>
                    </div>
                </div>

                <!-- Pricing Section -->
                <div class="border-t pt-4">
                    <div class="text-center mb-4">
                        <span class="text-2xl font-bold text-green-600">₹99</span>
                        <span class="text-gray-500">/month</span>
                    </div>
                    
                    <button 
                        type="submit" 
                        id="submitBtn"
                        class="w-full bg-blue-600 text-white py-3 px-4 rounded-md hover:bg-blue-700 transition duration-200 font-medium disabled:opacity-50 disabled:cursor-not-allowed"
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