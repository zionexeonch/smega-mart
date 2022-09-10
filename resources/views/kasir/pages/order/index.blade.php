@extends('kasir.layouts.template')
@section('content')
    <div class="mb-4 border-b border-gray-200 dark:border-gray-700">
        <ul class="flex flex-wrap -mb-px text-sm font-medium text-center justify-center" id="myTab"
            data-tabs-toggle="#myTabContent" role="tablist">
            <li class="mr-2" role="presentation">
                <button
                    class="inline-block p-4 rounded-t-lg border-b-2 text-blue-600 hover:text-blue-600 dark:text-blue-500 dark:hover:text-blue-500 border-blue-600 dark:border-blue-500"
                    id="profile-tab" data-tabs-target="#profile" type="button" role="tab" aria-controls="profile"
                    aria-selected="true">Dipesan</button>
            </li>
            <li class="mr-2" role="presentation">
                <button
                    class="inline-block p-4 rounded-t-lg border-b-2 text-blue-600 hover:text-blue-600 dark:text-blue-500 dark:hover:text-blue-500 border-blue-600 dark:border-blue-500"
                    id="dashboard-tab" data-tabs-target="#dashboard" type="button" role="tab" aria-controls="dashboard"
                    aria-selected="false">Dikemas</button>
            </li>
            <li class="mr-2" role="presentation">
                <button
                    class="inline-block p-4 rounded-t-lg border-b-2 text-blue-600 hover:text-blue-600 dark:text-blue-500 dark:hover:text-blue-500 border-blue-600 dark:border-blue-500"
                    id="settings-tab" data-tabs-target="#settings" type="button" role="tab" aria-controls="settings"
                    aria-selected="false">Dikirim</button>
            </li>
            <li role="presentation">
                <button
                    class="inline-block p-4 rounded-t-lg border-b-2 text-blue-600 hover:text-blue-600 dark:text-blue-500 dark:hover:text-blue-500 border-blue-600 dark:border-blue-500"
                    id="contacts-tab" data-tabs-target="#contacts" type="button" role="tab" aria-controls="contacts"
                    aria-selected="false">Diterima</button>
            </li>
        </ul>
    </div>
    <div id="myTabContent">
        {{-- Dipesan --}}
        <div class="p-4 bg-gray-50 rounded-lg dark:bg-gray-800" id="profile" role="tabpanel"
            aria-labelledby="profile-tab">
            <div class="overflow-x-auto relative shadow-md sm:rounded-lg">
                <table class="w-full text-sm text-left text-white bg-[#bb1724]">
                    <thead class="text-xs uppercase text-white dark:bg-gray-700 bg-[#bb1724]">
                        <tr>
                            <th scope="col" class="py-2 px-6">
                                #
                            </th>
                            <th scope="col" class="py-2 px-6">
                                No. Order
                            </th>
                            <th scope="col" class="py-2 px-6">
                                Nama Penerima
                            </th>
                            <th scope="col" class="py-2 px-6">
                                No. Telepon
                            </th>
                            <th scope="col" class="py-2 px-6">
                                Alamat
                            </th>
                            <th scope="col" class="py-2 px-6 text-center">
                                Total Harga Beli
                            </th>
                            <th scope="col" class="py-2 px-6 text-center">
                                Total QTY
                            </th>
                            <th scope="col" class="py-2 px-6 text-center">
                                Status Pesan
                            </th>
                            <th scope="col" class="py-2 px-6 text-center">
                                Tanggal Pesan
                            </th>
                            <th scope="col" colspan="2" class="py-2 px-6 text-center">
                                Aksi
                            </th>

                        </tr>
                    </thead>
                    <tbody>
                        <tr class="bg-white border-b hover:bg-gray-50 text-black">
                            <th class="border m-auto text-center px-2">
                                1
                            </th>
                            <td class="py-2 px-6 text-center">
                                38482857
                            </td>
                            <td class="py-2 px-6 text-center">
                                Ardianto
                            </td>
                            <td class="py-2 px-6 text-center">
                                08888938572
                            </td>
                            <td class="py-2 px-6 text-center">
                                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Velit, vel?
                            </td>
                            <td class="py-2 px-6 text-center">
                                Rp. 200.000
                            </td>
                            <td class="py-2 px-6 text-center">
                                3
                            </td>
                            <td class="py-2 px-6 text-center">
                                Dikemas
                            </td>
                            <td class="py-2 px-6 text-center">
                                31 / 2 / 1945
                            </td>
                            <td class="py-2 text-center">
                                <a href="#" class="p-2 bg-green-500 rounded-lg text-white">Pesanan</a>
                            </td>
                            <td class="py-2 px-6 text-center">
                                <a href="#" class="p-2 bg-green-500 rounded-lg text-white">Setujui</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        {{-- Dikemas --}}
        <div class="hidden p-4 bg-gray-50 rounded-lg dark:bg-gray-800" id="dashboard" role="tabpanel"
            aria-labelledby="dashboard-tab">
            <div class="overflow-x-auto relative shadow-md sm:rounded-lg">
                <table class="w-full text-sm text-left text-white bg-[#bb1724]">
                    <thead class="text-xs uppercase text-white dark:bg-gray-700 bg-[#bb1724]">
                        <tr>
                            <th scope="col" class="py-2 px-6">
                                #
                            </th>
                            <th scope="col" class="py-2 px-6">
                                No. Order
                            </th>
                            <th scope="col" class="py-2 px-6">
                                Nama Penerima
                            </th>
                            <th scope="col" class="py-2 px-6">
                                No. Telepon
                            </th>
                            <th scope="col" class="py-2 px-6">
                                Alamat
                            </th>
                            <th scope="col" class="py-2 px-6 text-center">
                                Total Harga Beli
                            </th>
                            <th scope="col" class="py-2 px-6 text-center">
                                Total QTY
                            </th>
                            <th scope="col" class="py-2 px-6 text-center">
                                Status Pesan
                            </th>
                            <th scope="col" class="py-2 px-6 text-center">
                                Tanggal Pesan
                            </th>
                            <th scope="col" colspan="2" class="py-2 px-6 text-center">
                                Aksi
                            </th>

                        </tr>
                    </thead>
                    <tbody>
                        <tr class="bg-white border-b hover:bg-gray-50 text-black">
                            <th class="border m-auto text-center px-2">
                                1
                            </th>
                            <td class="py-2 px-6 text-center">
                                38482857
                            </td>
                            <td class="py-2 px-6 text-center">
                                Ardianto
                            </td>
                            <td class="py-2 px-6 text-center">
                                08888938572
                            </td>
                            <td class="py-2 px-6 text-center">
                                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Velit, vel?
                            </td>
                            <td class="py-2 px-6 text-center">
                                Rp. 200.000
                            </td>
                            <td class="py-2 px-6 text-center">
                                3
                            </td>
                            <td class="py-2 px-6 text-center">
                                Dikemas
                            </td>
                            <td class="py-2 px-6 text-center">
                                31 / 2 / 1945
                            </td>
                            <td class="py-2 text-center">
                                <a href="#" class="p-2 bg-green-500 rounded-lg text-white">Pesanan</a>
                            </td>
                            <td class="py-2 px-6 text-center">
                                <a href="#" class="p-2 bg-green-500 rounded-lg text-white">Setujui</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        {{-- Dikirim --}}
        <div class="hidden p-4 bg-gray-50 rounded-lg dark:bg-gray-800" id="settings" role="tabpanel"
            aria-labelledby="settings-tab">
            <div class="overflow-x-auto relative shadow-md sm:rounded-lg">
                <table class="w-full text-sm text-left text-white bg-[#bb1724]">
                    <thead class="text-xs uppercase text-white dark:bg-gray-700 bg-[#bb1724]">
                        <tr>
                            <th scope="col" class="py-2 px-6">
                                #
                            </th>
                            <th scope="col" class="py-2 px-6">
                                No. Order
                            </th>
                            <th scope="col" class="py-2 px-6">
                                Nama Penerima
                            </th>
                            <th scope="col" class="py-2 px-6">
                                No. Telepon
                            </th>
                            <th scope="col" class="py-2 px-6">
                                Alamat
                            </th>
                            <th scope="col" class="py-2 px-6 text-center">
                                Total Harga Beli
                            </th>
                            <th scope="col" class="py-2 px-6 text-center">
                                Total QTY
                            </th>
                            <th scope="col" class="py-2 px-6 text-center">
                                Status Pesan
                            </th>
                            <th scope="col" class="py-2 px-6 text-center">
                                Tanggal Pesan
                            </th>
                            <th scope="col" colspan="2" class="py-2 px-6 text-center">
                                Aksi
                            </th>

                        </tr>
                    </thead>
                    <tbody>
                        <tr class="bg-white border-b hover:bg-gray-50 text-black">
                            <th class="border m-auto text-center px-2">
                                1
                            </th>
                            <td class="py-2 px-6 text-center">
                                38482857
                            </td>
                            <td class="py-2 px-6 text-center">
                                Ardianto
                            </td>
                            <td class="py-2 px-6 text-center">
                                08888938572
                            </td>
                            <td class="py-2 px-6 text-center">
                                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Velit, vel?
                            </td>
                            <td class="py-2 px-6 text-center">
                                Rp. 200.000
                            </td>
                            <td class="py-2 px-6 text-center">
                                3
                            </td>
                            <td class="py-2 px-6 text-center">
                                Dikirim
                            </td>
                            <td class="py-2 px-6 text-center">
                                31 / 2 / 1945
                            </td>
                            <td class="py-2 text-center">
                                <a href="#" class="p-2 bg-green-500 rounded-lg text-white">Pesanan</a>
                            </td>
                            <td class="py-2 px-6 text-center">
                                <a href="#" class="p-2 bg-green-500 rounded-lg text-white">Setujui</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        {{-- Diterima --}}
        <div class="hidden p-4 bg-gray-50 rounded-lg dark:bg-gray-800" id="contacts" role="tabpanel"
            aria-labelledby="contacts-tab">
            <div class="overflow-x-auto relative shadow-md sm:rounded-lg">
                <table class="w-full text-sm text-left text-white bg-[#bb1724]">
                    <thead class="text-xs uppercase text-white dark:bg-gray-700 bg-[#bb1724]">
                        <tr>
                            <th scope="col" class="py-2 px-6">
                                #
                            </th>
                            <th scope="col" class="py-2 px-6">
                                No. Order
                            </th>
                            <th scope="col" class="py-2 px-6">
                                Nama Penerima
                            </th>
                            <th scope="col" class="py-2 px-6">
                                No. Telepon
                            </th>
                            <th scope="col" class="py-2 px-6">
                                Alamat
                            </th>
                            <th scope="col" class="py-2 px-6 text-center">
                                Total Harga Beli
                            </th>
                            <th scope="col" class="py-2 px-6 text-center">
                                Total QTY
                            </th>
                            <th scope="col" class="py-2 px-6 text-center">
                                Status Pesan
                            </th>
                            <th scope="col" class="py-2 px-6 text-center">
                                Tanggal Pesan
                            </th>
                            <th scope="col" colspan="2" class="py-2 px-6 text-center">
                                Aksi
                            </th>

                        </tr>
                    </thead>
                    <tbody>
                        <tr class="bg-white border-b hover:bg-gray-50 text-black">
                            <th class="border m-auto text-center px-2">
                                1
                            </th>
                            <td class="py-2 px-6 text-center">
                                38482857
                            </td>
                            <td class="py-2 px-6 text-center">
                                Ardianto
                            </td>
                            <td class="py-2 px-6 text-center">
                                08888938572
                            </td>
                            <td class="py-2 px-6 text-center">
                                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Velit, vel?
                            </td>
                            <td class="py-2 px-6 text-center">
                                Rp. 200.000
                            </td>
                            <td class="py-2 px-6 text-center">
                                3
                            </td>
                            <td class="py-2 px-6 text-center">
                                Sampai
                            </td>
                            <td class="py-2 px-6 text-center">
                                31 / 2 / 1945
                            </td>
                            <td class="py-2 text-center">
                                <a href="#" class="p-2 bg-green-500 rounded-lg text-white">Pesanan</a>
                            </td>
                            <td class="py-2 px-6 text-center">
                                <a href="#" class="p-2 bg-green-500 rounded-lg text-white">Setujui</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
