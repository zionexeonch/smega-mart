@extends('kasir.layouts.template')
@section('content')
    <div class="overflow-x-auto relative shadow-md sm:rounded-lg">
        <div class="m-3">
            <table class="w-full text-sm text-left text-white bg-[#bb1724]" id="table-datatables">
                <thead class="text-xs uppercase text-white dark:bg-gray-700 bg-[#bb1724]">
                    <tr>
                        <th scope="col" class="py-2 px-6">
                            #
                        </th>
                        <th scope="col" class="py-2 px-6">
                            Gambar
                        </th>
                        <th scope="col" class="py-2 px-6">
                            Nama Produk / barcode
                        </th>
                        <th scope="col" class="py-2 px-6 text-center">
                            Harga beli
                        </th>
                        <th scope="col" class="py-2 px-6 text-center">
                            Harga jual
                        </th>
                        <th scope="col" class="py-2 px-6 text-center">
                            Stok toko
                        </th>
                        <th scope="col" class="py-2 px-6 text-center">
                            Jumlah
                        </th>
                        <th scope="col" class="py-2 px-6 text-center">
                            Kategori
                        </th>
                        <th scope="col" class="py-2 px-6 text-center">
                            Tanggal Pelaporan
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="bg-white border-b hover:bg-gray-50 text-black">
                        <th class="border m-auto text-center w-auto">
                            1
                        </th>
                        <td class="items-center py-3 px-6 dark:text-white">
                            <img class="w-10 h-10" src="/assets/img/HELM-FULLFACE-KYT-RC-SEVEN-14-YELLOW-FLUO.jpeg"
                                alt="Jese image">
                        </td>
                        <td scope="row"
                            class="flex items-center py-2 px-6 text-gray-900 whitespace-nowrap dark:text-white max-w-sm">
                            <div class="pl-3">
                                <div class="text-base text-black font-semibold">Coca-cola</div>
                                <div class="block font-normal text-black">05958384859593</div>
                            </div>
                        </td>
                        <td class="py-2 px-6 text-center">
                            Rp. 200.000
                        </td>
                        <td class="py-2 px-6 text-center">
                            Rp. 200.000
                        </td>
                        <td class="py-2 px-6 text-center">
                            10
                        </td>
                        <td class="py-2 px-6 text-center">
                            3
                        </td>
                        <td class="py-2 px-6 text-center">
                            Minuman
                        </td>
                        <td class="py-2 px-6 text-center">
                            31 / 2 / 1945
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>



    <!-- drawer component -->
    <div id="drawer-swipe"
        class="fixed mt-5 z-40 w-full overflow-y-auto bg-white border-t border-gray-200 rounded-t-lg dark:border-gray-700 dark:bg-gray-800"
        tabindex="-1" aria-labelledby="drawer-swipe-label">
        <div class="p-4 cursor-pointer hover:bg-gray-50 dark:hover:bg-gray-700" data-drawer-toggle="drawer-swipe">
            <span class="absolute w-8 h-1 -translate-x-1/2 bg-gray-300 rounded-lg top-3 left-1/2 dark:bg-gray-600"></span>
            <h5 id="drawer-swipe-label" class="inline-flex items-center text-base text-gray-500 dark:text-gray-400">
                <i class="fa-solid fa-memo-pad"></i> Laporan
            </h5>
        </div>
        <div class="md:m-5">
            <div class="grid gap-6 grid-cols-2 md:grid-cols-4 md:mb-5">
                <div class="w-full shadow-lg rounded-lg bg-white">
                    <div class="m-3">
                        <label for="today" class="mb-3 font-bold">Tanggal</label>
                        <input type="date" class="p-2 w-full rounded-lg">
                        <button
                            class="mx-auto p-2 bg-blue-600 hover:bg-blue-700 text-center rounded-lg text-white mt-2 w-full">Cek
                            Laporan</button>
                    </div>
                </div>
                <div class="w-full shadow-lg rounded-lg bg-white">
                    <div class="m-3">
                        <label for="today" class="mb-3 font-bold">Bulan</label>
                        <input type="month" class="p-2 w-full rounded-lg">
                        <button
                            class="mx-auto p-2 bg-blue-600 hover:bg-blue-700 text-center rounded-lg text-white mt-2 w-full">Cek
                            Laporan</button>
                    </div>
                </div>
                <div class="w-full shadow-lg rounded-lg bg-white">
                    <div class="m-3">
                        <label for="today" class="mb-3 font-bold">Tahun</label>
                        <select name="year" id="year" class="p-2 w-full rounded-lg">
                            <option value="">Pilih Tahun</option>
                            <?php
                            $year = date('Y');
                            $min = $year - 5;
                            $max = $year;
                            for ($i = $max; $i >= $min; $i--) {
                                echo '<option value=' . $i . '>' . $i . '</option>';
                            } ?>
                        </select>
                        <button
                            class="mx-auto p-2 bg-blue-600 hover:bg-blue-700 text-center rounded-lg text-white mt-2 w-full">Cek
                            Laporan</button>
                    </div>
                </div>
                <div class="w-full shadow-lg rounded-lg bg-white">
                    <div class="m-3">
                        <label for="name" class="mb-3 font-bold">Nama</label>
                        <select name="name" id="name" class="w-full p-2 rounded-lg">
                            <option value="">Pilih Produk</option>
                            <option value="">Coca-cola</option>
                        </select>
                        <button
                            class="mx-auto p-2 bg-blue-600 hover:bg-blue-700 text-center rounded-lg text-white mt-2 w-full">Cek
                            Laporan</button>
                    </div>
                </div>
            </div>

            <div class="grid gap-6 grid-cols-1 mt-3">
                <div class="w-full shadow-lg rounded-lg bg-white">
                    <div class="m-3">
                        <div class="grid gap-8 grid-cols-2">
                            <div>
                                <label for="today" class="mb-3 font-bold">Tanggal Mulai :</label>
                                <input type="date" class="p-2 w-full rounded-lg">
                            </div>
                            <div>
                                <label for="today" class="mb-3 font-bold">Tanggal Akhir :</label>
                                <input type="date" class="p-2 w-full rounded-lg">
                            </div>
                        </div>

                        <button
                            class="mx-auto p-2 bg-blue-600 hover:bg-blue-700 text-center rounded-lg text-white mt-2 w-full">Cek
                            Laporan</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
