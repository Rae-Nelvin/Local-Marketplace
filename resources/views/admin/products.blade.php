<x-admin-layout>
    <div class="my-8">
        <div class="flex justify-center">
            <a href="#"><button class="bg-green-600 rounded-full py-1 px-2 text-white cursor-pointer transform hover:scale-105 hover:bg-green-400 transition-all">Add New +</button></a>
        </div>
        <div class="flex justify-center min-h-screen">
            <div class="col-span-12">
                <div class="overflow-auto lg:overflow-visible ">
                    <table class="table text-gray-400 border-separate space-y-6 text-sm">
                        <thead class="bg-gray-200 text-gray-500">
                            <tr>
                                <th class="py-3 px-16">Image</th>
                                <th class="py-3 px-6">Product Name</th>
                                <th class="p-3 text-left">Category</th>
                                <th class="p-3 text-left">Harga</th>
                                <th class="p-3 text-left">Stock</th>
                                <th class="p-3 text-left">Status</th>
                                <th class="p-3 text-left">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="bg-white shadow-lg">
                                <td class="p-3">
                                    <div class="ml-3 flex justify-center">
                                        <img class="rounded-md h-24 w-24  object-cover" src="https://images.unsplash.com/photo-1613588718956-c2e80305bf61?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=634&q=80" alt="unsplash image">
                                    </div>
                                </td>
                                <td class="p-3">
                                    <div class="ml-3">
                                        <h1 class="">Apple</h1>
                                    </div>
                                </td>
                                <td class="p-3">
                                    Technology
                                </td>
                                <td class="p-3 font-bold">
                                    200.00$
                                </td>
                                <td class="p-3 font-bold">
                                    16
                                </td>
                                <td class="p-3">
                                    <span class="bg-green-400 text-gray-50 rounded-md px-2">available</span>
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
                                            <img class="rounded-md h-24 w-24 object-cover" src="https://images.unsplash.com/photo-1423784346385-c1d4dac9893a?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1050&q=80" alt="unsplash image">
                                        </div>
                                    </td>
                                <td class="p-3">
                                    <div class="ml-3 align-items-center">
                                        <h1 class="">Appple</h1>
                                    </div>
                                </td>
                                <td class="p-3">
                                    Technology
                                </td>
                                <td class="p-3 font-bold">
                                    200.00$
                                </td>
                                <td class="p-3 font-bold">
                                    0
                                </td>
                                <td class="p-3">
                                    <span class="bg-red-400 text-gray-50 rounded-md px-2">no stock</span>
                                </td>
                                <td class="p-3">
                                    <a href="#" class="text-gray-400 hover:text-blue-400 mx-2">
                                        <i class="material-icons-outlined text-base">edit</i>
                                    </a>
                                    <a href="#" class="text-gray-400 hover:text-red-600 ml-2">
                                        <i class="material-icons-round text-base">delete_outline</i>
                                    </a>
                                </td>
                            </tr>
                            <tr class="bg-white shadow-lg">
                                <td class="p-3">
                                    <div class="ml-3 flex justify-center">
                                        <img class="rounded-md h-24 w-24 object-cover" src="https://images.unsplash.com/photo-1600856209923-34372e319a5d?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2135&q=80" alt="unsplash image">
                                    </div>
                                </td>
                                <td class="p-3">
                                    <div class="ml-3 align-items-center">
                                        <h1 class="">Appple</h1>
                                    </div>
                                </td>
                                <td class="p-3">
                                    Technology
                                </td>
                                <td class="p-3 font-bold">
                                    200.00$
                                </td>
                                <td class="p-3 font-bold">
                                    12
                                </td>
                                <td class="p-3">
                                    <span class="bg-yellow-400 text-gray-50  rounded-md px-2">start sale</span>
                                </td>
                                <td class="p-3">
                                    <a href="#" class="text-gray-400 hover:text-blue-400 mx-2">
                                        <i class="material-icons-outlined text-base">edit</i>
                                    </a>
                                    <a href="#" class="text-gray-400 hover:text-red-600 ml-2">
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