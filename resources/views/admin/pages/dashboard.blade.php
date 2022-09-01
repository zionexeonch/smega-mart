@extends('admin.layouts.template')
@section('content')
    <div class="grid gap-8 grid-cols-1 md:grid-cols-2 lg:grid-cols-4 justify-beetwen items-center">
        <div class="flex items-center py-3 px-6 whitespace-nowrap max-w-sm bg-red-600 shadow-lg rounded-md border-b">
            {{-- <img class="w-10 h-10 sm:w-20 sm:h-20" src="/PRODUK.png" alt="Jese image"> --}}
            <div class="w-10 h-10 sm:w-20 sm:h-20 rounded-full border-0 md:border-2 md:-ml-3">
                <i class="fa-solid fa-rupiah-sign text-4xl md:text-5xl items-center md:m-4 text-white"></i>
            </div>
            <div class="pl-3">
                <div class="text-base text-white font-semibold">Keuntungan Hari ini</div>
                <div class="block font-normal text-white">Rp. 200.000</div>
            </div>
        </div>
        <div class="flex items-center py-3 px-6 whitespace-nowrap max-w-sm bg-purple-600 shadow-lg rounded-md border-b">
            <div class="w-10 h-10 sm:w-20 sm:h-20 rounded-full border-0 md:border-white md:border-2 md:-ml-3">
                <i class="fa-solid fa-rupiah-sign text-4xl md:text-5xl items-center md:m-4 text-white"></i>
            </div>
            <div class="pl-3">
                <div class="text-base text-white font-semibold">Keuntungan bulan ini</div>
                <div class="block font-normal text-white">Rp. 1.000.000</div>
            </div>
        </div>
        <div class="flex items-center py-3 px-6 whitespace-nowrap max-w-sm bg-blue-500 shadow-lg rounded-md border-b">
            <div class="w-10 h-10 sm:w-20 sm:h-20 rounded-full border-0 md:border-2 md:-ml-3">
                <i class="fa-solid fa-rupiah-sign text-4xl md:text-5xl items-center md:m-4 text-white"></i>
            </div>
            <div class="pl-3">
                <div class="text-base text-white font-semibold">Keuntungan Tahun ini</div>
                <div class="block font-normal text-white">Rp. 5.000.000</div>
            </div>
        </div>
        <div class="flex items-center py-3 px-6 whitespace-nowrap max-w-sm bg-green-500 shadow-lg rounded-md border-b">
            <div class="w-10 h-10 sm:w-20 sm:h-20 rounded-full border-0 md:border-2 md:-ml-3">
                <i class="fa-solid fa-box text-4xl md:text-5xl items-center md:m-4 text-white"></i>
            </div>
            <div class="pl-3">
                <div class="text-base text-white font-semibold">Total produk</div>
                <div class="block font-normal text-white">200</div>
            </div>
        </div>
    </div>
    <div class="grid gap-4 lg:grid-cols-3 md:grid-cols-3 sm:grid-cols-1 mt-5 text-center mx-auto">
        <div class="bg-gray-100 text-black items-center shadow-lg rounded-md">
            <div class="bg-blue-500 text-white text-1xl rounded-t-md">
                <b class="my-3">Grafik mingguan</b>
            </div>
            <div>
                <canvas></canvas>
            </div>
        </div>
        <div class="bg-gray-100 text-black items-center shadow-lg rounded-md">
            <div class="text-center bg-green-500 text-white text-1xl rounded-t-md">
                <b class="mx-auto">Grafik bulanan</b>
            </div>
            <div>
                <canvas></canvas>
            </div>
        </div>
        <div class="bg-gray-100 text-white items-center shadow-lg rounded-md">
            <div class="text-center bg-purple-600 text-white text-1xl rounded-t-md">
                <b class="mx-auto">Grafik Tahunan</b>
            </div>
            <div>
                <canvas></canvas>
            </div>
        </div>
    @endsection
