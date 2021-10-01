<x-app-layout>
    <div class="my-8 ml-8 mr-4 flex">
        <!-- Start of Sidebar -->
        <div class="w-1/5 min-w-[340px] bg-white shadow-md rounded-lg p-2 mx-2 my-3 border-2">
            <div class="flex my-2 ml-4">
            <img src="https://pixahive.com/wp-content/uploads/2020/10/Gym-shoes-153180-pixahive.jpg" class="rounded-full w-12 h-12" alt="Profile Picture" /><p class="mt-4 ml-4 font-bold">{{ Auth::user()->name }}</p>
            </div>
            <div class="my-4 pl-2 border-t-2">
                <div class="flex justify-between mt-2">
                    <p class="font-bold">Transaksi</p>
                </div>
                <div class="mt-4 space-y-2 ml-4">
                    <p class="text-xs text-gray-400 hover:text-black cursor-pointer">Menunggu Pembayaran</p>
                    <p class="text-xs text-gray-400 hover:text-black cursor-pointer">Daftar Transaksi</p>
                </div>
            </div>
            <div class="my-4 pl-2 border-t-2">
                <div class="flex justify-between mt-2">
                    <p class="font-bold">Profile</p>
                </div>
                <div class="mt-4 space-y-2 ml-4">
                    <p class="text-xs text-gray-400 hover:text-black cursor-pointer">Wishlist</p>
                    <p class="text-xs text-gray-400 hover:text-black cursor-pointer">Pengaturan</p>
                </div>
            </div>
        </div>
        <!-- End of Sidebar -->
        <div class="w-4/5 bg-white p-2 mx-2 my-3">
            <div class="flex space-x-2">
                <i class="far fa-user mt-1 text-gray-400"></i>
                <p class="font-semi-bold text-gray-400">{{ Auth::user()->name }}</p>
            </div>
            <!-- Start Main Content -->
            <div class="bg-white rounded-lg p-2 my-3 border-2">
                <!-- Start of Navbar -->
                <div class="flex justify-between space-x-4 mx-4 my-2">
                    <h1 class="font-bold text-gray-400 text-md cursor-pointer hover:text-red-400">Biodata Diri</h1>
                    <h1 class="font-bold text-gray-400 text-md cursor-pointer hover:text-red-400">Daftar Alamat</h1>
                    <h1 class="font-bold text-gray-400 text-md cursor-pointer hover:text-red-400">Transaksi</h1>
                    <h1 class="font-bold text-gray-400 text-md cursor-pointer hover:text-red-400">Notifikasi</h1>
                </div>
                <!-- End of Navbar -->
                <!-- Start of Content -->
                <div class="flex mx-4 border-t-2 ">
                    <div class="w-1/4 bg-white shadow-md rounded-lg p-2 mx-2 my-3 border-2">
                        <img src="https://pixahive.com/wp-content/uploads/2020/10/Gym-shoes-153180-pixahive.jpg" class="rounded-md" alt="Profile Picture" />
                        <button class="w-full bg-white mt-4 border-2 rounded-lg text-xs h-8 font-bold">Pilih Foto</button>
                        <p class="my-4 text-xs text-gray-400">Besar file: maksimum 10.000.000 bytes (10 Megabytes). Ekstensi file yang diperbolehkan: .JPG, .JPEG, .PNG</p>
                    </div>
                    <div class="w-3/4 bg-white p-2 mx-2 my-4 space-y-4">
                        <h1 class="font-bold text-gray-400 text-md">Ubah Biodata Diri</h1>
                        <p class="text-xs text-gray-400">Nama &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp {{ Auth::user()->name }}</p>
                        <p class="text-xs text-gray-400">Tanggal Lahir &nbsp &nbsp &nbsp &nbsp11 Juli 2002</p>
                        <p class="text-xs text-gray-400">Jenis Kelamin &nbsp &nbsp &nbsp &nbsp Laki - Laki</p>
                        <h1 class="font-bold text-gray-400 text-md">Ubah Kontak</h1>
                        <p class="text-xs text-gray-400">Email &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp {{ Auth::user()->email }}</p>
                        <p class="text-xs text-gray-400">Nomor HP &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 081330229959</p>
                    </div>
                </div>
                <div class="w-1/4 bg-white p-2 mx-4 my-1 space-y-2">
                    <button class="w-full bg-white mt-4 border-2 rounded-lg text-xs h-8 font-bold">Buat Kata Sandi</button>
                    <button class="w-full bg-white mt-4 border-2 rounded-lg text-xs h-8 font-bold">Kode Voucher</button>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>