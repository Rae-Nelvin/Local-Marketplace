<x-app-layout>
    <div class="my-8 ml-8 mr-4 flex">
        <!-- Start of Sidebar -->
        <div class="w-1/5 min-w-[340px] bg-white shadow-md rounded-lg p-2 mx-2 my-3 border-2 hidden md:block">
            <h1 class="text-sm font-bold my-2 mx-6">Filter</h1>
            <div class="border-t-2"></div>
            <div class="space-y-2 mx-4">
                <p class="mt-4 text-xs text-gray-400 hover:text-black cursor-pointer">Harga Tertinggi</p>
                <p class="text-xs text-gray-400 hover:text-black cursor-pointer">Harga Terendah</p>
            </div>
        </div>
        <!-- End of Sidebar -->
        <!-- Start of Main Content -->
        <div class="md:w-4/5 bg-white p-2 w-full md:mx-2 my-3">
            <div class="flex space-x-2 border-b-2">
                <i class="fas fa-box text-xl text-red-400"></i>
                <h1 class="text-xl mt-px text-red-400">Products</h1>
            </div>
            <div class="flex justify-between my-2">
                <p class="text-xs mt-2 text-gray-400">Menampilkan 1 - 60 barang dari total 136rb+ untuk "topi hitam"</p>
                <div class="flex space-x-1">
                    <h1 class="font-bold text-xs mt-2 hidden md:block">Urutkan :</h1>
                    <div @click.away="open = false" class="relative border-2 rounded-lg " x-data="{ open: false }">
                        <button @click="open = !open" class="flex flex-row items-center w-full px-4 py-1 text-sm font-semibold text-left bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:focus:bg-gray-600 dark-mode:hover:bg-gray-600 md:block hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline">
                        <span class="text-xs">Paling Sesuai</span>
                        <svg fill="currentColor" viewBox="0 0 20 20" :class="{'rotate-180': open, 'rotate-0': !open}" class="inline w-4 h-4 mt-1 ml-1 transition-transform duration-200 transform md:-mt-1"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                        </button>
                        <div x-show="open" x-transition:enter="transition ease-out duration-100" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-75" x-transition:leave-start="transform opacity-100 scale-100" x-transition:leave-end="transform opacity-0 scale-95" class="absolute right-0 w-full mt-2 origin-top-right rounded-md shadow-lg">
                            <div class="px-2 py-2 bg-white rounded-md shadow dark-mode:bg-gray-800">
                                <a class="block px-4 py-2 mt-2 text-xs focus:font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="#">Paling Sesuai</a>
                                <a class="block px-4 py-2 mt-2 text-xs focus:font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="#">Ulasan</a>
                                <a class="block px-4 py-2 mt-2 text-xs focus:font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="#">Terbaru</a>
                                <a class="block px-4 py-2 mt-2 text-xs focus:font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="#">Harga Tertinggi</a>
                                <a class="block px-4 py-2 mt-2 text-xs focus:font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="#">Harga Terendah</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bg-white rounded-lg p-2 my-3 border-2 grid grid-cols-3 gap-0 md:grid-cols-5">
                <div class="relative max-w-sm min-w-[340px] bg-white shadow-md rounded-3xl p-2 mx-2 my-3 cursor-pointer transform hover:scale-110 transition-all">
                    <div class="overflow-x-hidden rounded-2xl relative">
                        <img class="h-40 rounded-2xl w-full object-cover hover:opacity-90 transition-all " src="https://pixahive.com/wp-content/uploads/2020/10/Gym-shoes-153180-pixahive.jpg">
                        <p class="absolute right-2 top-2 bg-white rounded-full p-2 cursor-pointer group">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 group-hover:opacity-50 opacity-70" fill="none" viewBox="0 0 24 24" stroke="black">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                        </svg>
                        </p>
                    </div>
                    <div class="mt-4 pl-2 mb-2 flex justify-between">
                        <div>
                            <p class="text-base font-semibold text-gray-900 mb-0">Product Name</p>
                            <p class="text-sm text-gray-800 mt-0">$340</p>
                        </div>
                        <div class="flex flex-col-reverse mb-1 mr-4 group cursor-pointer">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 group-hover:opacity-70" fill="none" viewBox="0 0 24 24" stroke="gray">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                            </svg>
                        </div>
                    </div>
                </div>
                <div class="relative max-w-sm min-w-[340px] bg-white shadow-md rounded-3xl p-2 mx-2 my-3 cursor-pointer transform hover:scale-110 transition-all">
                    <div class="overflow-x-hidden rounded-2xl relative">
                        <img class="h-40 rounded-2xl w-full object-cover hover:opacity-90 transition-all " src="https://pixahive.com/wp-content/uploads/2020/10/Gym-shoes-153180-pixahive.jpg">
                        <p class="absolute right-2 top-2 bg-white rounded-full p-2 cursor-pointer group">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 group-hover:opacity-50 opacity-70" fill="none" viewBox="0 0 24 24" stroke="black">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                        </svg>
                        </p>
                    </div>
                    <div class="mt-4 pl-2 mb-2 flex justify-between">
                        <div>
                            <p class="text-base font-semibold text-gray-900 mb-0">Product Name</p>
                            <p class="text-sm text-gray-800 mt-0">$340</p>
                        </div>
                        <div class="flex flex-col-reverse mb-1 mr-4 group cursor-pointer">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 group-hover:opacity-70" fill="none" viewBox="0 0 24 24" stroke="gray">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                            </svg>
                        </div>
                    </div>
                </div>
                <div class="relative max-w-sm min-w-[340px] bg-white shadow-md rounded-3xl p-2 mx-2 my-3 cursor-pointer transform hover:scale-110 transition-all">
                    <div class="overflow-x-hidden rounded-2xl relative">
                        <img class="h-40 rounded-2xl w-full object-cover hover:opacity-90 transition-all " src="https://pixahive.com/wp-content/uploads/2020/10/Gym-shoes-153180-pixahive.jpg">
                        <p class="absolute right-2 top-2 bg-white rounded-full p-2 cursor-pointer group">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 group-hover:opacity-50 opacity-70" fill="none" viewBox="0 0 24 24" stroke="black">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                        </svg>
                        </p>
                    </div>
                    <div class="mt-4 pl-2 mb-2 flex justify-between">
                        <div>
                            <p class="text-base font-semibold text-gray-900 mb-0">Product Name</p>
                            <p class="text-sm text-gray-800 mt-0">$340</p>
                        </div>
                        <div class="flex flex-col-reverse mb-1 mr-4 group cursor-pointer">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 group-hover:opacity-70" fill="none" viewBox="0 0 24 24" stroke="gray">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                            </svg>
                        </div>
                    </div>
                </div>
                <div class="relative max-w-sm min-w-[340px] bg-white shadow-md rounded-3xl p-2 mx-2 my-3 cursor-pointer transform hover:scale-110 transition-all">
                    <div class="overflow-x-hidden rounded-2xl relative">
                        <img class="h-40 rounded-2xl w-full object-cover hover:opacity-90 transition-all " src="https://pixahive.com/wp-content/uploads/2020/10/Gym-shoes-153180-pixahive.jpg">
                        <p class="absolute right-2 top-2 bg-white rounded-full p-2 cursor-pointer group">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 group-hover:opacity-50 opacity-70" fill="none" viewBox="0 0 24 24" stroke="black">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                        </svg>
                        </p>
                    </div>
                    <div class="mt-4 pl-2 mb-2 flex justify-between">
                        <div>
                            <p class="text-base font-semibold text-gray-900 mb-0">Product Name</p>
                            <p class="text-sm text-gray-800 mt-0">$340</p>
                        </div>
                        <div class="flex flex-col-reverse mb-1 mr-4 group cursor-pointer">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 group-hover:opacity-70" fill="none" viewBox="0 0 24 24" stroke="gray">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>