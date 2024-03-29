@extends('admin.layouts.template')
@section('content')
    <form action="" method="POST" class="mb-6">
        <div class="grid gap-6 mb-6 md:grid-cols-2">
            <div>
                <label for="barcode" class="block mb-2 text-sm font-medium">Barcode</label>
                <input type="text" id="barcode"
                    class="shadow-md border border-gray-300 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:border-gray-600 dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="No. Barcode" required="" name="barcode">
            </div>
            <div>
                <label for="name" class="block mb-2 text-sm font-medium">Nama Produk</label>
                <input type="text" id="name"
                    class="shadow-md border border-gray-300 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:border-gray-600 dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="Nama Produk" required="" name="name" value="{{ $product->name }}">
            </div>
            <div>
                <label for="purchase_price" class="block mb-2 text-sm font-medium">Harga Beli</label>
                <input type="number" id="purchase_price"
                    class="shadow-md border border-gray-300 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:border-gray-600 dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="Harga Beli" required="" name="purchase_price">
            </div>
            <div>
                <label for="price" class="block mb-2 text-sm font-medium">Harga Jual</label>
                <input type="number" id="price"
                    class="shadow-md border border-gray-300 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:border-gray-600 dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="Harga Jual" required="" name="price">
            </div>
            <div>
                <label for="stock_store" class="block mb-2 text-sm font-medium">Kategori</label>
                <select name="" id=""
                    class="shadow-md border border-gray-300 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:border-gray-600 dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option value="" class="hover:bg-blue-600 hover:text-white">Pilih Satuan</option>
                    <option value="">PCS</option>
                </select>
            </div>
            <div>
                <label for="stock_store" class="block mb-2 text-sm font-medium">Kategori</label>
                <select name="" id=""
                    class="shadow-md border border-gray-300 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:border-gray-600 dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option value="">Pilih Kategori</option>
                    <option value="">Sepatu</option>
                </select>
            </div>
            <div>
                <label for="stock_storage" class="block mb-2 text-sm font-medium">Stok Gudang</label>
                <input type="number" id="stock_storage"
                    class="shadow-md border border-gray-300 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:border-gray-600 dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="Stok Gudang" required="" name="stock_storage">
            </div>
            <div>
                <label for="stock_store" class="block mb-2 text-sm font-medium">Stok Toko</label>
                <input type="number" id="stock_store"
                    class="shadow-md border border-gray-300 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:border-gray-600 dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="Stok Toko" required="" name="stock_store">
            </div>
            <div>
                <label for="image_main" class="block mb-2 text-sm font-medium">Gambar utama</label>
                <input type="file" id="image_main"
                    class="shadow-md border border-gray-300 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:border-gray-600 dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="Image" required="" name="image_main">
            </div>
            <div>
                <label for="images" class="block mb-2 text-sm font-medium">Gambar lain</label>
                <input type="file" id="images"
                    class="shadow-md border border-gray-300 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:border-gray-600 dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="Images" required="" name="images[]">
            </div>

        </div>
        <div class="mb-6">
            <button type="submit"
                class="mt-3 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"><i
                    class="fa fa-edit"></i> Edit</button>
            <a href="/dashboard/products" type="button"
                class="mt-3 text-white bg-gray-700 hover:bg-gray-800 focus:ring-4 focus:outline-none focus:ring-gray-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-gray-600 dark:hover:bg-gray-700 dark:focus:ring-gray-800">Batal</a>
        </div>
    </form>
@endsection
