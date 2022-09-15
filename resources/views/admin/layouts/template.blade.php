<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ $title }} | Admin Smega Mart</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }
    </style>

    <link href="/css/app.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.5.6/css/buttons.dataTables.min.css">
</head>

<body class="antialiased">


    <nav
        class="sm:px-4 py-2.5 bg-[#bb1724] text-white fixed w-full z-20 top-0 left-0 border-b border-gray-200 dark:border-gray-600">
        <div class="container flex flex-wrap justify-between items-center mx-auto">
            <a href="/admin-dashboard" class="flex items-center ml-3 sm:ml-0">
                {{-- <img src="https://flowbite.com/docs/images/logo.svg" class="mr-3 h-6 sm:h-9" alt="Flowbite Logo"> --}}
                <span class="self-center text-xl font-semibold whitespace-nowrap dark:text-white">ADMIN | Smega
                    Mart</span>
            </a>
            <div class="flex md:order-2">
                <a href="/logout" type="submit"
                    class="text-white bg-yellow-400 hover:bg-yellow-500 focus:ring-4 focus:outline-none focus:ring-yellow-200 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-3 md:mr-0 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Logout</a>
                <button data-collapse-toggle="navbar-sticky" type="button"
                    class="inline-flex items-center p-2 text-sm text-gray-500 rounded-lg md:hidden bg-gray-100 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                    aria-controls="navbar-sticky" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                            clip-rule="evenodd"></path>
                    </svg>
                </button>
            </div>
            <div class="hidden justify-between items-center w-full md:flex md:w-auto md:order-1" id="navbar-sticky">
                <ul
                    class="flex flex-col p-4 mt-4 bg-white text-black rounded-lg border border-gray-100 md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium md:border-0 md:bg-[#bb1724]">
                    <li>
                        <a href="/dashboard"
                            class="block py-2 pr-4 pl-3 text-black rounded hover:text-black md:hover:bg-transparent md:hover:text-white md:hover:bg-blue-800 md:p-2 {{ request()->is('/dashboard') ? 'text-black bg-white md:bg-white md:text-black p-3' : 'md:text-white' }}"
                            aria-current="page">Dashboard</a>
                    </li>
                    <li>
                        <a href="/dashboard/products"
                            class="block py-2 pr-4 pl-3 text-black rounded hover:text-black md:hover:bg-transparent md:hover:text-white md:hover:bg-blue-800 md:p-2 {{ request()->is('/dashboard/products') ? 'text-black bg-white md:bg-white md:text-black p-3' : 'md:text-white' }}"
                            aria-current="page">Produk</a>
                    </li>
                    <li>
                        <a href="/storage"
                            class="block py-2 pr-4 pl-3 text-black rounded hover:text-black md:hover:bg-transparent md:hover:text-white md:hover:bg-blue-800 md:p-2 {{ request()->is('admin-storage') ? 'text-black bg-white md:bg-white md:text-black p-3' : 'md:text-white' }}"
                            aria-current="page">Gudang</a>
                    </li>
                    <li>
                        <button id="dropdownDefault" data-dropdown-toggle="dropdown"
                            class="block py-2 pr-4 pl-3 text-black rounded hover:text-black md:hover:bg-transparent md:hover:text-white md:hover:bg-blue-800 md:p-2 {{ request()->is('admin-storage') ? 'text-black bg-white md:bg-white md:text-black p-3' : 'md:text-white' }}"
                            type="button">Lainnya<svg class="ml-2 w-4 h-4 inline" aria-hidden="true" fill="none"
                                stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 9l-7 7-7-7"></path>
                            </svg></button>

                        <!-- Dropdown menu -->
                        <div id="dropdown"
                            class="hidden z-10 w-44 bg-white rounded divide-y divide-gray-100 shadow dark:bg-gray-700">
                            <ul class="py-1 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDefault">
                                <li>
                                    <a href="{{ route('suplier.index') }}"
                                        class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Suplier</a>
                                </li>
                                <li>
                                    <a href="{{ route('unit.index') }}"
                                        class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Satuan</a>
                                </li>
                                <li>
                                    <a href="{{ route('user.index') }}"
                                        class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Akun</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    {{-- <div class="mx-10 max-w-lg">
        <div role="status">
            <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8 mt-20 my-7">
                <h1 class="text-3xl tracking-tight font-bold text-gray-900">{{ $title }}</h1>
            </div>
            <div class="max-w-lg shadow-md ml-7">
                @yield('content')
            </div>
        </div>
    </div> --}}
    <header class="bg-white shadow mt-16 sm:mt-20">
        @if ($title == 'Produk')
            <div
                class="container flex flex-wrap justify-between items-center max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                <h1 class="flex text-3xl tracking-tight font-bold text-gray-900">{{ $title }}</h1>

                <a href="/dashboard/products/create" class="bg-red-600 text-white hover:bg-red-700 p-3 rounded-lg"><i
                        class="fa fa-plus"></i> Tambah
                    Produk</a>
            </div>
        @elseif ($title == 'Tambah Produk')
            <div
                class="container flex flex-wrap justify-between items-center max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                <h1 class="flex text-3xl tracking-tight font-bold text-gray-900">{{ $title }}</h1>
                <a href="/dashboard/products" class="bg-gray-500 text-white hover:bg-gray-600 p-3 rounded-lg"><i
                        class="fa fa-circle-left"></i> Kembali</a>
            </div>
        @elseif ($title == 'Detail')
            <div
                class="container flex flex-wrap justify-between items-center max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                <h1 class="flex text-3xl tracking-tight font-bold text-gray-900">{{ $title }}</h1>
                <a href="/dashboard/products" class="bg-gray-500 text-white hover:bg-gray-600 p-3 rounded-lg"><i
                        class="fa fa-circle-left"></i> Kembali</a>
            </div>
        @elseif ($title == 'Gudang')
            <div
                class="container flex flex-wrap justify-between items-center max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                <h1 class="flex text-3xl tracking-tight font-bold text-gray-900">{{ $title }}</h1>

            </div>
        @elseif ($title == 'Tambah stok ke toko')
            <div
                class="container flex flex-wrap justify-between items-center max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                <h1 class="flex text-2xl md:text-3xl tracking-tight font-bold text-gray-900">{{ $title }}</h1>
                <a href="/storage" class="bg-gray-500 text-white hover:bg-gray-600 p-3 rounded-lg"><i
                        class="fa fa-circle-left"></i> Kembali</a>
            </div>
        @elseif ($title == 'Tambah stok ke gudang')
            <div
                class="container flex flex-wrap justify-between items-center max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                <h1 class="flex text-2xl md:text-3xl tracking-tight font-bold text-gray-900">{{ $title }}</h1>
                <a href="/storage" class="bg-gray-500 text-white hover:bg-gray-600 p-3 rounded-lg"><i
                        class="fa fa-circle-left"></i> Kembali</a>
            </div>
        @elseif ($title == 'Detail Suplier')
            <div
                class="container flex flex-wrap justify-between items-center max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                <h1 class="flex text-3xl tracking-tight font-bold text-gray-900">{{ $title }}</h1>
                <a href="{{ route('suplier.index') }}"
                    class="bg-gray-500 text-white hover:bg-gray-600 p-3 rounded-lg"><i class="fa fa-circle-left"></i>
                    Kembali</a>
            </div>
        @elseif ($title == 'Suplier')
            <div
                class="container flex flex-wrap justify-between items-center max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                <h1 class="flex text-3xl tracking-tight font-bold text-gray-900">{{ $title }}</h1>
                <button class="bg-red-600 text-white hover:bg-red-700 p-3 rounded-lg" type="button"
                    data-modal-toggle="tambah">
                    <i class="fa fa-plus"></i> Tambah Suplier
                </button>
            </div>
        @elseif ($title == 'Satuan')
            <div
                class="container flex flex-wrap justify-between items-center max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                <h1 class="flex text-3xl tracking-tight font-bold text-gray-900">{{ $title }}</h1>
                <button class="bg-red-600 text-white hover:bg-red-700 p-3 rounded-lg" type="button"
                    data-modal-toggle="tambah">
                    <i class="fa fa-plus"></i> Tambah Satuan
                </button>
            </div>
        @elseif ($title == 'Akun')
            <div
                class="container flex flex-wrap justify-between items-center max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                <h1 class="flex text-3xl tracking-tight font-bold text-gray-900">{{ $title }}</h1>
                <button class="bg-red-600 text-white hover:bg-red-700 p-3 rounded-lg" type="button"
                    data-modal-toggle="tambah">
                    <i class="fa fa-plus"></i> Tambah Satuan
                </button>
            </div>
        @else
            <div
                class="container flex flex-wrap justify-between items-center max-w-7xl mx-auto py-6 px-4 sm:px-6 md:-mt-3 lg:px-8 lg:mt-0">
                <h1 class="flex text-3xl tracking-tight font-bold text-gray-900">{{ $title }}</h1>
            </div>
        @endif
    </header>
    <main>
        <div class="max-w-7xl mx-auto py-6 sm:px-6 lg:px-8">
            <!-- Replace with your content -->
            <div class="px-4 py-6 sm:px-0">
                <div class="rounded-lg h-96">
                    @yield('content')
                </div>
            </div>
            <!-- /End replace -->
        </div>
    </main>

    {{-- <div class="bg-gray-200">
        <div class="container">
            <div class="py-6 px-3" style="bottom: 0;">
                <p class="text-sm text-center text-gray-500"><b>&copy 2022</b> Dibuat oleh <a
                        href="https://softdev.akriliklasercutting.com" target="_blank" class="font-bold">SOFTDEV
                        COMMUNITY</a> dengan sepenuh &#10084;&#65039;</p>
            </div>
        </div>
    </div> --}}
    {{-- export pdf dll --}}

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.6/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.flash.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.print.min.js"></script>

    <script type="text/javascript">
        $(document).ready(function() {
            $('#table-datatables').DataTable({
                // dom: 'Bfrtip',
                // buttons: ['copy', 'csv', 'excel', 'pdf', 'print']
            });
        });
    </script>


    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/flowbite.js') }}"></script>
    <script defer src="{{ asset('assets/fontawesome/js/all.min.js') }}"></script>
</body>

</html>
