<nav x-data="{ open: false }" class="md:bg-white bg-red-400 border-b border-gray-100 shadow-md">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 lg:py-2">
        <div class="flex justify-between h-16 ">
            <div class="flex w-full">
                <!-- Logo -->
                <div class="md:flex-shrink-0 hidden md:flex items-center">
                    <a href="{{ route('dashboard') }}">
                        <img src="{{ asset('assets/logo/surya-naga(transparent).png') }}" alt="Surya Naga Logo" class="w-auto max-h-16"/>
                    </a>
                </div>

            </div>
            @if (Auth::user())
            <!-- Settings Dropdown -->
            <div class="sm:flex sm:items-center justify-end sm:ml-6 md:space-x-8 w-full py-4 px-1 md:p-0">
                <x-nav-link :href="route('dashboard')">
                        <i class="fas fa-bell text-xl text-white md:text-gray-600"></i>
                </x-nav-link>
                <x-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        <button class="flex items-center text-sm font-medium text-gray-500 hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition duration-150 ease-in-out">
                            <div><i class="fas fa-user-alt text-xl text-white md:text-gray-600"></i></div>

                            <div class="ml-1">
                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </div>
                        </button>
                    </x-slot>

                    <x-slot name="content">
                        <!-- Authentication -->
                            <x-dropdown-link :href="route('settings')" class="flex">
                                <img src="https://pixahive.com/wp-content/uploads/2020/10/Gym-shoes-153180-pixahive.jpg" class="rounded-full w-12 h-12" alt="Profile Picture" /><p class="mt-4 ml-4">{{ Auth::user()->name }}</p>
                            </x-dropdown-link>
                            <x-dropdown-link :href="route('settings')" >
                                Settings
                            </x-dropdown-link>
                            <x-dropdown-link :href="route('logout')">
                                {{ __('Log Out') }}
                            </x-dropdown-link>
                    </x-slot>
                </x-dropdown>
            </div>
            @endif

            <!-- Hamburger
            <div class="-mr-2 flex items-center sm:hidden">
                <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div> -->
        </div>
    </div>

    <!-- Responsive Navigation Menu
    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
        <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                {{ __('Dashboard') }}
            </x-responsive-nav-link>
        </div> -->

    </div>
</nav>
