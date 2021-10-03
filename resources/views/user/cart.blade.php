<x-app-layout>
    <div class="my-8 ml-8 mr-4 md:flex static">
        <!-- Start of Cart Content -->
        <div class="md:w-2/3 w-full min-w-[340px] md:mx-2 my-3 static">
            <h1 class="font-bold my-2">Keranjang</h1>
            <div class="bg-white shadow-md rounded-lg p-2 border-2 my-2">
                <div class="flex justify-between">
                    <div class="flex space-x-2 ml-2">
                        <input type="checkbox" class="mt-px"><p class="text-sm text-gray-400">Pilih semua</p>
                    </div>
                    <p class="text-red-400 hover:text-red-800 font-medium hover:font-bold cursor-pointer">Hapus</p>
                </div>
            </div>
            <div class="bg-white shadow-md rounded-lg p-2 border-2 my-3">
                <div class="grid grid-rows-2 grid-flow-col">
                    <div class="row-span-2">
                        <input type="checkbox" class="mt-px"><p class="text-sm text-gray-400"></p>
                    </div>
                    <div class="row-span-2">
                        <img src="https://pixahive.com/wp-content/uploads/2020/10/Gym-shoes-153180-pixahive.jpg" class="rounded-md w-24" alt="Profile Picture" />
                    </div>
                    <div class="col-span-12">
                        <p class="text-lg font-semibold text-gray-900 mb-0">Product Name</p>
                    </div>
                    <div>
                        <p class="text-md text-gray-800 mt-0">$340</p>
                    </div>
                </div>
                <div class="mt-6 mb-2 md:flex md:justify-between mx-4">
                    <p class="text-sm text-red-400 hover:text-red-700 cursor-pointer">Tulis catatan untuk barang ini</p>
                    <p class="text-sm text-gray-400 hover:text-red-700 cursor-pointer">Pindahkan ke Wishlist</p>
                    <p class="text-sm text-gray-400 hidden md:block">|</p>
                    <i class="fas fa-trash text-sm text-gray-400 hover:text-red-700 cursor-pointer hidden md:block"></i>
                    <i class="far fa-minus-square text-sm text-gray-400 hover:text-red-700 cursor-pointer hidden md:block"></i>
                    <p class="text-sm hidden md:block">1</p>
                    <i class="far fa-plus-square text-red-400 hover:text-red-700 cursor-pointer text-sm hidden md:block"></i>
                    <div class="flex justify-between md:hidden">
                        <i class="fas fa-trash text-sm text-gray-400 hover:text-red-700 cursor-pointer"></i>
                        <div class="flex justify-between md:hidden space-x-4">
                            <i class="far fa-minus-square text-sm text-gray-400 hover:text-red-700 cursor-pointer"></i>
                            <p class="text-sm">1</p>
                            <i class="far fa-plus-square text-red-400 hover:text-red-700 cursor-pointer text-sm"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End of Cart Content -->
        <!-- Start of Payment Content -->
        <div>
            <div class="md:w-2/3">
            </div>
            <div class="w-full md:w-80 my-3 md:mx-2 bg-white shadow-md rounded-lg p-2 border-2 md:fixed">
                <div class="bg-white border-2 rounded-lg p-2 flex justify-between cursor-pointer">
                    <i class="fas fa-percentage text-sm text-green-500"></i>
                    <p class="text-sm font-bold text-gray-400">Makin hemat pakai promo</p>
                    <i class="fas fa-chevron-right text-sm"></i>
                </div>
                <div class="border-t-2 my-4"></div>
                <div class="space-y-4 px-4">
                    <h1 class="font-bold text-sm">Ringkasan belanja</h1>
                    <div class="flex justify-between">
                        <p class="text-gray-400 text-xs">Total Harga (1 barang)</p>
                        <p class="text-gray-400 text-xs">$340</p>
                    </div>
                </div>
                <div class="border-t-2 my-4"></div>
                <div class="flex justify-between px-4">
                    <h1 class="text-sm font-bold">Total Harga</h1>
                    <h1 class="text-sm font-bold">$340</h1>
                </div>
                <div class="mx-4">
                    <button class="w-full items-center bg-green-400 p-2 my-4 rounded text-white hover:bg-green-500 transition-all transform hover:scale-105">Beli (1)</button>
                </div>
            </div>
        </div>
        <!-- End of Payment Content -->
    </div>
    <div class="w-2/3 border-t-2 ml-8"></div>
    <!-- Start of Recommendation Content -->
    <div class="my-8 md:ml-8 md:mr-4 flex">
        <div class="md:w-2/3 w-full bg-white md:mx-2 p-2">
            <h1 class="font-bold text-xl ml-8 md:ml-0">Rekomendasi untukmu</h1>
            <div class="grid grid-cols-3 md:grid-cols-4">
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
    <!-- End of Recommendation Content -->
</x-app-layout>