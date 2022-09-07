@extends('kasir.layouts.template')
@section('content')
    <div class="grid gap-6 grid-cols-1 md:grid-cols-4">
        <div>
            <input type="number" class="p-2 border rounded-lg w-full" placeholder="Barcode">
        </div>
        <div>
            <input type="number" class="p-2 border rounded-lg w-full" placeholder="QTY" min="1">
        </div>
        <div>
            <input type="number" class="p-2 border rounded-lg w-full" placeholder="Nama Produk">
        </div>
        <div>
            <input type="number" class="p-2 border rounded-lg w-full" placeholder="Harga Jual">
        </div>
    </div>
    <button class="p-2 mt-3 mx-auto text-sm rounded-lg bg-green-400 hover:bg-green-600 text-white"><i
            class="fa fa-plus"></i>
        Tambah</button>
@endsection
