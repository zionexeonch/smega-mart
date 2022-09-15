@extends('admin.layouts.template')
@section('content')
    <div class="overflow-x-auto relative shadow-md sm:rounded-lg">
        <div class="m-5">
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
                            Stok gudang
                        </th>
                        <th scope="col" class="py-2 px-6 text-center">
                            Kategori
                        </th>
                        <th scope="col" class="py-2 px-7 text-center">
                            Aksi
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($products as $key => $product)
                        <tr class="bg-white border-b hover:bg-gray-50 text-black">
                            <th class="py-2 px-6 text-center">
                                {{ $key + 1 }}
                            </th>
                            <td class="items-center py-3 px-6 dark:text-white">
                                <img class="w-10 h-10" src="/assets/img/HELM-FULLFACE-KYT-RC-SEVEN-14-YELLOW-FLUO.jpeg"
                                    alt="Jese image">
                            </td>
                            <td scope="row"
                                class="flex items-center py-2 px-6 text-gray-900 whitespace-nowrap dark:text-white max-w-sm">
                                <div class="pl-3">
                                    <div class="text-base text-black font-semibold">{{ $product->name }}</div>
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
                                20
                            </td>
                            <td class="py-2 px-6 text-center">
                                {{ $product->category_id }}
                            </td>
                            <td class="inline-flex text-center">
                                <a href="{{ route('storage.edit', [$product->id]) }}" type="submit"
                                    class="p-1 mr-1 bg-white text-blue-600 hover:bg-blue-600 border hover:text-white border-blue-600 text-sm rounded-lg">Tambah
                                    Stok Gudang</a>
                                <a href="{{ route('storage.show', [$product->id]) }}" type="submit"
                                    class="p-1 ml-1 bg-white text-blue-600 hover:bg-blue-600 border hover:text-white border-blue-600 text-sm rounded-lg">Tambah
                                    Stok Toko</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
