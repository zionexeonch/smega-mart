@extends('kasir.layouts.template')
@section('content')
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
