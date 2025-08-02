<!-- Desktop Container -->
<div class="hidden md:flex px-4 py-4 items-center md:justify-between xl:justify-around bg-black text-white w-full">
    <!-- Logo -->
    <div class="flex">
        <img src="{{ asset('assets/29ee0e713073bdbe99ec96bfce0b39361bf5f300.gif') }}" alt="Logo" class="h-8 w-auto">
    </div>

    <!-- Navigation Links -->
    <div class="flex space-x-8 text-base font-Inter md:text-sm md:space-x-4">
        <a href="#" class="hover:text-gray-300">About</a>
        <a href="#" class="font-semibold text-white">Service</a>
        <a href="#" class="hover:text-gray-300">Case Study</a>
        <a href="#" class="hover:text-gray-300">Testimonial</a>
        <a href="#" class="hover:text-gray-300">FAQ</a>
    </div>

    <!-- CTA Button -->
    <div>
        <a href="#" class="bg-white text-black font-semibold px-5 py-2 rounded-full shadow hover:bg-gray-100 transition">
            Book a Free Consultation
        </a>
    </div>
</div>

<!-- Mobile Container -->
<div class="md:hidden bg-black text-white px-4 py-4 relative">
    <!-- Hidden Checkbox Toggle -->
    <input type="checkbox" id="menu-toggle" class="hidden peer" />

    <!-- Top Bar: Logo + Hamburger -->
    <div class="flex justify-between items-center">
        <!-- Logo -->
        <div>
            <img src="{{ asset('assets/29ee0e713073bdbe99ec96bfce0b39361bf5f300.gif') }}" alt="Logo" class="h-8 w-auto">
        </div>

        <!-- Hamburger Button -->
        <label for="menu-toggle" class="cursor-pointer z-50">
            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M4 6h16M4 12h16M4 18h16" />
            </svg>
        </label>
    </div>

    <!-- Toggleable Mobile Menu -->
    <div class="hidden peer-checked:block mt-4 space-y-4">
        <a href="#" class="block hover:text-gray-300">About</a>
        <a href="#" class="block font-semibold text-white">Service</a>
        <a href="#" class="block hover:text-gray-300">Case Study</a>
        <a href="#" class="block hover:text-gray-300">Testimonial</a>
        <a href="#" class="block hover:text-gray-300">FAQ</a>
        <a href="#" class="block bg-white text-black font-semibold px-4 py-2 rounded-full shadow hover:bg-gray-100 transition">
            Book a Free Consultation
        </a>
    </div>
</div>
