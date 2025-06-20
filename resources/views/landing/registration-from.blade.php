<section id="notify" class="py-28 bg-primary text-white">
    <div class="max-w-2xl mx-auto px-6 text-center">
      <h2 class="text-3xl sm:text-4xl font-extrabold mb-4">Register your interest</h2>
      <p class="mb-8">Get early-access invites, launch discounts & insider updates straight to your inbox.</p>
      <form action="#" x-data="{sent:false}" @submit.prevent="$refs.submit.disabled=true; sent=true" class="space-y-6">
        <div class="grid gap-4 sm:grid-cols-2">
          <input type="text" name="name" placeholder="Your Name" required class="w-full px-5 py-3 rounded-lg text-gray-800">
          <input type="text" name="company" placeholder="Company Name" required class="w-full px-5 py-3 rounded-lg text-gray-800">
          <input type="email" name="email" placeholder="Email ID" required class="w-full px-5 py-3 rounded-lg text-gray-800">
          <input type="tel" name="phone" placeholder="Phone Number" required class="w-full px-5 py-3 rounded-lg text-gray-800">
          <input type="text" name="gstn" placeholder="GSTN Number" required class="w-full px-5 py-3 rounded-lg text-gray-800 sm:col-span-2">
        </div>
        <button x-ref="submit" type="submit" class="w-full sm:w-auto px-8 py-3 rounded-lg bg-white/10 hover:bg-white/20 font-semibold">Notify Me</button>
        <p x-show="sent" class="text-green-200">Thank you! We’ll keep you posted 📬</p>
      </form>
    </div>
  </section>