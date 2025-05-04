<!-- resources/views/components/navbar.blade.php -->
<div class="bg-white shadow">
    <!-- Top bar with contact info and social links -->
    <div class="bg-gray-900 text-white py-3">
        <div class="container mx-auto px-4 flex justify-between items-center">
            <div class="flex items-center space-x-6">
                <div class="flex items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" viewBox="0 0 20 20" fill="currentColor">
                        <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z" />
                        <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z" />
                    </svg>
                    <span>info@hanara.id</span>
                </div>
                <div class="flex items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z" clip-rule="evenodd" />
                    </svg>
                    <span>Jam: Senin - Jumat : 08:00 - 18:00</span>
                </div>
            </div>
            <div class="flex items-center space-x-4">
                <a href="#" class="text-white hover:text-orange-400">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M9 8h-3v4h3v12h5v-12h3.642l.358-4h-4v-1.667c0-.955.192-1.333 1.115-1.333h2.885v-5h-3.808c-3.596 0-5.192 1.583-5.192 4.615v3.385z" />
                    </svg>
                </a>
                <a href="#" class="text-white hover:text-orange-400">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M4.98 3.5c0 1.381-1.11 2.5-2.48 2.5s-2.48-1.119-2.48-2.5c0-1.38 1.11-2.5 2.48-2.5s2.48 1.12 2.48 2.5zm.02 4.5h-5v16h5v-16zm7.982 0h-4.968v16h4.969v-8.399c0-4.67 6.029-5.052 6.029 0v8.399h4.988v-10.131c0-7.88-8.922-7.593-11.018-3.714v-2.155z" />
                    </svg>
                </a>
            </div>
        </div>
    </div>

    <!-- Main navigation bar -->
    <div class="container mx-auto px-4 py-4">
        <div class="flex justify-between items-center">
            <!-- Logo -->
            <div class="flex items-center ml-5">
                <img src="{{ asset('assets\images\LOGO PERUSAHAAN\HANARA.ID-2023.-II.png')}}" alt="Hanara" class="h-12 w-auto">
            </div>

            <!-- Navigation Menu -->
            <div class="hidden lg:flex items-center space-x-8">
                <div class="text-orange-500 font-medium">Home</div>
                <div class="text-gray-800 hover:text-orange-500 font-medium">About</div>
                <div class="text-gray-800 hover:text-orange-500 font-medium">Zimbra</div>
                <div class="text-gray-800 hover:text-orange-500 font-medium">Motorola</div>
                <div class="text-gray-800 hover:text-orange-500 font-medium">Software House</div>
                <div class="text-gray-800 hover:text-orange-500 font-medium">Business Solution</div>
                <div class="text-gray-800 hover:text-orange-500 font-medium">CCTV</div>
                <!-- Search Icon placed next to CCTV -->
                <button class="text-gray-600 hover:text-orange-500">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                    </svg>
                </button>
            </div>
            <!-- Mobile menu button -->
            <div class="lg:hidden">
                <button class="text-gray-500 hover:text-orange-500 focus:outline-none">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </button>
                   <!-- Hamburger menu -->
                   <button class="text-gray-500 hover:text-orange-500 focus:outline-none">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </button>
            </div>
        </div>
    </div>
</div>