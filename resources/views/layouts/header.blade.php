<header class="bg-white border-b border-gray-300">
    <div class="container mx-auto p-4 flex justify-between items-center">
        <div class="flex items-center">
            <img src="{{ asset('assets/images/graduation.png') }}" alt="Logo" class="h-8 mr-2">
            <span class="text-gray-800 font-semibold">Student Information System</span>
        </div>

        
        <div class="lg:hidden">
            <button @click="open = !open" class="text-gray-800 focus:outline-none hover:text-blue-500 transition transform" :class="{ 'rotate-90': open }">
                <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
                </svg>
            </button>
        </div>

    
        <nav class="hidden lg:flex space-x-4">
            @auth
                <div class="bg-blue-300 text-blue-800 py-1 px-2 rounded-full text-center font-semibold text-sm">
                    Welcome, {{ auth()->user()->name }}
                </div>
            @endauth

            @guest
                <a href="{{ route('welcome') }}" class="text-gray-800 hover:text-blue-500 font-semibold">Home</a>
                <a href="{{ route('register') }}" class="text-gray-800 hover:text-blue-500 font-semibold">Register</a>
            

            <div x-data="{ dropdownOpen: false }" @click.away="dropdownOpen = false" class="relative">
                <button @click="dropdownOpen = !dropdownOpen" class="text-gray-800 hover:text-blue-500 font-semibold focus:outline-none">
                    Login as
                    <i class="ri-arrow-down-s-line"></i>
                </button>

                <!-- Dropdown Content -->
                <div x-show="dropdownOpen" class="absolute right-0 mt-2 py-2 w-48 bg-white border rounded shadow-lg">
                    <a href="{{ route('login') }}" class="block py-2 px-4 text-gray-800 hover:text-blue-500 font-semibold">Staff</a>
                    <a href="{{ route('dashboard') }}" class="block py-2 px-4 text-gray-800 hover:text-blue-500 font-semibold">Author</a>
                    <a href="#" class="block py-2 px-4 text-gray-800 hover:text-blue-500 font-semibold">Editor in Chief</a>
                    <a href="#" class="block py-2 px-4 text-gray-800 hover:text-blue-500 font-semibold">Reviewer</a>
                    <a href="#" class="block py-2 px-4 text-gray-800 hover:text-blue-500 font-semibold">Editorial Staff</a>
                </div>
            </div>
            @endguest
            @auth
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button type="submit" class="text-gray-800 hover:text-blue-500 font-semibold flex items-center">
                        <ion-icon name="log-out-outline" class="mr-1"></ion-icon> Logout
                    </button>
                </form>
            @endauth
            
            <!-- End Dropdown -->

        </nav>
    </div>

    <div x-show="open" @click.away="open = false" class="lg:hidden">
        @guest
        <a href="{{ route('welcome') }}" class="block py-2 px-4 text-gray-800 hover:text-blue-500 font-semibold">Home</a>
        <a href="{{ route('register') }}" class="block py-2 px-4 text-gray-800 hover:text-blue-500 font-semibold">Register</a>
        <div x-data="{ dropdownOpen: false }" @click.away="dropdownOpen = false" class="relative">
        <button @click="dropdownOpen = !dropdownOpen" class="block py-2 px-4 text-gray-800 hover:text-blue-500 font-semibold">
            Login as
            <i class="ri-arrow-down-s-line"></i>
        </button>

        <!-- Dropdown Content -->
        <div x-show="dropdownOpen" class="lg:hidden">
            <a href="{{ route('login') }}" class="block py-2 px-4 text-gray-800 hover:text-blue-500 font-semibold ml-4">Staff</a>
            <a href="#" class="block py-2 px-4 text-gray-800 hover:text-blue-500 font-semibold ml-4">Author</a>
            <a href="#" class="block py-2 px-4 text-gray-800 hover:text-blue-500 font-semibold ml-4">Editor in Chief</a>
            <a href="#" class="block py-2 px-4 text-gray-800 hover:text-blue-500 font-semibold ml-4">Reviewer</a>
            <a href="#" class="block py-2 px-4 text-gray-800 hover:text-blue-500 font-semibold ml-4">Editorial Staff</a>
        </div>
        @endguest

        @auth
            <form action="{{ route('logout') }}" class="block py-2 px-4 text-gray-800 hover:text-blue-500 font-semibold" method="POST">
                @csrf
                <button type="submit">Logout</button>
            </form>
        @endauth
    </div>
    </div>
</header>