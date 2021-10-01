<nav x-data="{ open: false }" class="md:bg-white bg-red-400 border-b border-gray-100">
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

                <!-- Navigation Links -->
                <div class="space-x-4 md:space-x-8 flex w-full py-4 px-1 md:p-0">
                    <div class="bg-white shadow-md p-2 md:p-4 md:ml-4 flex w-full rounded md:rounded-none">
                        <span class="w-auto flex justify-end items-center text-gray-500 p-2">
                            <i class="fas fa-search"></i>
                        </span>
                        <input class="w-full rounded p-2 border-0 transition-all" type="text" placeholder="Search...">
                        <button class="bg-red-400 hover:bg-red-700 transition-all rounded text-white py-2 pr-4 pl-4 ml-4 mr-2 hidden md:flex">
                            <i class="fas fa-search"></i>
                        </button>
                    </div>
                    <x-nav-link :href="route('dashboard')">
                        <i class="fas fa-shopping-cart text-xl text-white md:text-gray-600"></i>
                    </x-nav-link>
                    <x-nav-link :href="route('dashboard')">
                        <i class="fas fa-bell text-xl text-white md:text-gray-600"></i>
                    </x-nav-link>
                    <x-nav-link :href="route('dashboard')">
                        <i class="fas fa-user-alt text-xl text-white md:hidden"></i>
                    </x-nav-link>
                    <button class="border-2 border-red-400 px-4 my-4 text-red-400 hover:text-white hover:bg-red-700 hover:border-red-700 rounded transition-all hidden md:flex">
                        Daftar
                    </button>
                    <button class="items-center shadow bg-red-400 px-4 my-4 rounded text-white hover:bg-red-700 transition-all hidden md:flex">
                        Masuk
                    </button>
                </div>
            </div>
            @if (Auth::user())
            <!-- Settings Dropdown -->
            <div class="hidden sm:flex sm:items-center sm:ml-6">
                <x-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        <button class="flex items-center text-sm font-medium text-gray-500 hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition duration-150 ease-in-out">
                            <div>{{ Auth::user()->name }}</div>

                            <div class="ml-1">
                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </div>
                        </button>
                    </x-slot>

                    <x-slot name="content">
                        <!-- Authentication -->
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <x-dropdown-link :href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </x-dropdown-link>
                        </form>
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

        @if (Auth::user())
        <!-- Responsive Settings Options -->
        <div class="pt-4 pb-1 border-t border-gray-200">
            <div class="px-4">
                <div class="font-medium text-base text-gray-800">{{ Auth::user()->name }}</div>
                <div class="font-medium text-sm text-gray-500">{{ Auth::user()->email }}</div>
            </div>

            <div class="mt-3 space-y-1">
                <!-- Authentication -->
                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <x-responsive-nav-link :href="route('logout')"
                            onclick="event.preventDefault();
                                        this.closest('form').submit();">
                        {{ __('Log Out') }}
                    </x-responsive-nav-link>
                </form>
            </div>
        </div>
        @endif
    </div>
</nav>
