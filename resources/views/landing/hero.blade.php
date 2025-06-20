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
              Chartered accountants use TryPluton to schedule, file &amp; track returns for dozens of clients—error-free.
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
              Consultants grow their practice by letting TryPluton chase documents, payments &amp; due-dates automatically.
            </p>
          </div>
        </template>

        <a href="#notify"
           class="inline-flex items-center gap-2 px-8 py-4 rounded-lg bg-primary hover:bg-primary/90 text-white font-semibold text-lg shadow-lg transition">
          Get started for free
        </a>
      </div>

      <div class="flex-1 max-w-md mx-auto lg:mx-0 mt-12 lg:mt-0">
        <form id="hero-form" action="#" class="bg-white rounded-2xl shadow-xl p-8">
          <h3 class="text-xl font-semibold mb-4">Start your 7-day free trial</h3>

          <div class="space-y-4">
            <input type="text"  placeholder="Name"          required class="w-full rounded-lg border-gray-300 focus:border-primary focus:ring-primary" />
            <input type="email" placeholder="Work email"    required class="w-full rounded-lg border-gray-300 focus:border-primary focus:ring-primary" />
            <input type="tel"   placeholder="Phone number"          class="w-full rounded-lg border-gray-300 focus:border-primary focus:ring-primary" />
            <input type="text"  placeholder="GSTN number"           class="w-full rounded-lg border-gray-300 focus:border-primary focus:ring-primary" />
            <input type="text"  placeholder="Company name"          class="w-full rounded-lg border-gray-300 focus:border-primary focus:ring-primary" />

            <div>
              <p class="text-sm font-medium text-gray-700 mb-2">Send reminders before deadline:</p>
              <div class="flex flex-wrap gap-4">
                <label class="inline-flex items-center gap-2 text-sm text-gray-600">
                  <input type="checkbox" value="10" class="rounded border-gray-300 text-primary focus:ring-primary" />
                  10&nbsp;days before
                </label>
                <label class="inline-flex items-center gap-2 text-sm text-gray-600">
                  <input type="checkbox" value="5" class="rounded border-gray-300 text-primary focus:ring-primary" />
                  5&nbsp;days before
                </label>
                <label class="inline-flex items-center gap-2 text-sm text-gray-600">
                  <input type="checkbox" value="1" class="rounded border-gray-300 text-primary focus:ring-primary" />
                  1&nbsp;day before
                </label>
              </div>
            </div>

            <button type="submit"
                    class="w-full px-6 py-3 rounded-lg bg-primary hover:bg-primary/90 text-white font-semibold">
              Get started for free
            </button>
          </div>

          <div class="flex items-center gap-3 mt-6">
            <div class="flex -space-x-3">
              <img src="https://randomuser.me/api/portraits/men/2.jpg"    alt="user1" class="w-8 h-8 rounded-full border-2 border-white">
              <img src="https://randomuser.me/api/portraits/women/44.jpg" alt="user2" class="w-8 h-8 rounded-full border-2 border-white">
              <img src="https://randomuser.me/api/portraits/women/68.jpg" alt="user3" class="w-8 h-8 rounded-full border-2 border-white">
              <img src="https://randomuser.me/api/portraits/men/75.jpg"   alt="user4" class="w-8 h-8 rounded-full border-2 border-white">
            </div>
            <span class="text-sm text-gray-500">1200+ professionals use</span>
          </div>

          <div class="flex items-center gap-6 mt-4 text-xs text-gray-500">
            <div class="flex items-center gap-1">
              <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-primary" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 1.567-3 3.5S10.343 15 12 15s3-1.567 3-3.5S13.657 8 12 8z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 17v5m9-1.5a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
              7-day free trial
            </div>
            <div class="flex items-center gap-1">
              <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-primary" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6l-8 4v6l8 4 8-4V10l-8-4z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 12l8-4M12 12v10"/></svg>
              Safe to use
            </div>
          </div>
        </form>
      </div>
    </div>
  </section>
