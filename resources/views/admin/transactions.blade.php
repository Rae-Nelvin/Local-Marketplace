<x-admin-layout>
    <div class="my-8">
        <div class="flex justify-center min-h-screen">
            <div class="col-span-12">
                <div class="overflow-auto lg:overflow-visible ">
                    <table class="table text-gray-400 border-separate space-y-6 text-sm">
                        <thead class="bg-gray-200 text-gray-500">
                            <tr>
                                <th class="py-3">Pembeli</th>
                                <th class="py-3">Alamat</th>
                                <th class="py-3">Barang</th>
                                <th class="p-3 text-left">Jumlah</th>
                                <th class="p-3 text-left px-10">Total Harga</th>
                                <th class="p-3 text-left px-10">Status</th>
                                <th class="p-3 text-left">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="bg-white shadow-lg">
                                <td class="p-3">
                                    <div class="ml-3 flex justify-center">
                                        <h1>Leonardo Wijaya</h1>
                                    </div>
                                </td>
                                <td class="p-3">
                                    <div class="ml-3">
                                        <h1 class="">Jln. Wachid Hasyim no. 14, Jember</h1>
                                    </div>
                                </td>
                                <td class="p-3">
                                    Semen Tiga Roda
                                </td>
                                <td class="p-3 font-bold">
                                    12
                                </td>
                                <td class="p-3 font-bold">
                                    Rp. 250000
                                </td>
                                <td class="p-3">
                                    <span class="bg-green-400 text-gray-50 rounded-md px-2">delivered</span>
                                </td>
                                <td class="p-3 ">
                                    <a href="#" class="text-gray-400 hover:text-blue-400  mx-2">
                                        <i class="material-icons-outlined text-base">edit</i>
                                    </a>
                                    <a href="#" class="text-gray-400 hover:text-red-600  ml-2">
                                        <i class="material-icons-round text-base">delete_outline</i>
                                    </a>
                                </td>
                            </tr>
                            <tr class="bg-white shadow-lg">
                                <td class="p-3">
                                    <div class="ml-3 flex justify-center">
                                        <h1>Christian Sampurna Junior</h1>
                                    </div>
                                </td>
                                <td class="p-3">
                                    <div class="ml-3">
                                        <h1 class="">Jln. Wachid Hasyim no. 14, Jember</h1>
                                    </div>
                                </td>
                                <td class="p-3">
                                    Semen Merah Putih
                                </td>
                                <td class="p-3 font-bold">
                                    5
                                </td>
                                <td class="p-3 font-bold">
                                    Rp. 100000
                                </td>
                                <td class="p-3">
                                    <span class="bg-red-400 text-gray-50 rounded-md px-2">unpaid</span>
                                </td>
                                <td class="p-3 ">
                                    <a href="#" class="text-gray-400 hover:text-blue-400  mx-2">
                                        <i class="material-icons-outlined text-base">edit</i>
                                    </a>
                                    <a href="#" class="text-gray-400 hover:text-red-600  ml-2">
                                        <i class="material-icons-round text-base">delete_outline</i>
                                    </a>
                                </td>
                            </tr>
                            <tr class="bg-white shadow-lg">
                                <td class="p-3">
                                    <div class="ml-3 flex justify-center">
                                        <h1>Maevy Marvella</h1>
                                    </div>
                                </td>
                                <td class="p-3">
                                    <div class="ml-3">
                                        <h1 class="">Jln. Wachid Hasyim no. 14, Jember</h1>
                                    </div>
                                </td>
                                <td class="p-3">
                                    Semen Gresik
                                </td>
                                <td class="p-3 font-bold">
                                    20
                                </td>
                                <td class="p-3 font-bold">
                                    Rp. 400000
                                </td>
                                <td class="p-3">
                                    <span class="bg-yellow-400 text-gray-50  rounded-md px-2">on-progress</span>
                                </td>
                                <td class="p-3 ">
                                    <a href="#" class="text-gray-400 hover:text-blue-400  mx-2">
                                        <i class="material-icons-outlined text-base">edit</i>
                                    </a>
                                    <a href="#" class="text-gray-400 hover:text-red-600  ml-2">
                                        <i class="material-icons-round text-base">delete_outline</i>
                                    </a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-admin-layout>