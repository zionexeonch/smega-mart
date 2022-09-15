@extends('admin.layouts.template')
@section('content')
    <div class="container">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-center bg-white border rounded-lg p-8">
            <div class="lg:col-span-4">
                <main id="gallery">
                    <div id="main-image">
                        <img src="{{ $product->image_urls }}" alt="Image"
                            class="object-contain max-w-full h-[314px] mt-2 p-1 bg-gray-50 border border-gray-300 rounded-md">
                    </div>
                    <div id="images" class="grid grid-cols-4 gap-x-4 mt-3">
                        <img src="/assets/img/roma-wafello-chocoblast-depan.jpg" alt="Image"
                            class="max-w-full h-auto mt-2 p-1 bg-gray-50 border border-gray-300 rounded-md">
                        <img src="/assets/img/roma-wafello-chocoblast-belakang.jpg" alt="Image"
                            class="max-w-full h-auto mt-2 p-1 bg-white border border-gray-300 rounded-md">
                    </div>
                    <script>
                        let images = document.querySelectorAll("#gallery > #images > img");
                        images.forEach((image) =>
                            image.addEventListener("click", function() {
                                let imagesSrc = image.getAttribute("src");
                                document.querySelector("#gallery > #main-image > img").setAttribute("src", imagesSrc);
                            })
                        );
                    </script>
                </main>
            </div>
            <div class="lg:col-span-4">
                <div class="mt-7 lg:mt-0 p-1 lg:p-0 lg:pl-5">
                    <h2 class="mb-3 text-xl text-gray-600 font-semibold uppercase tracking-wide">
                        {{ $product->name }}
                    </h2>
                    <p class="mb-3 text-sm text-slate-600">
                        Makanan Kecil
                    </p>
                    <h3 class="mb-3 text-xl font-semibold text-red-800">Rp.{{ number_format(600000, 0, ',', '.') }}</h3>
                    <p class="mb-3 text-sm text-slate-600">
                        Stok Gudang: <span>8</span>
                    </p>
                    <p class="mb-3 text-sm text-slate-600">
                        Stok Toko: <span>8</span>
                    </p>
                </div>
            </div>
            <div class="lg:col-span-4">
                <div class="mt-7 lg:mt-0 p-1 lg:p-0 lg:pl-5">
                    <h1 class="text-2xl">Bahan Pembuat:</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Numquam possimus rem sed, eum deleniti
                        minus ad, at veniam maxime accusamus qui officia suscipit molestiae. Dolores alias eius similique!
                        Nisi, at.</p>
                </div>
            </div>
        </div>
        <div class="grid grid-cols-1 mt-7 bg-white border rounded-lg p-4 lg:p-8">
            <div>
                <h4 class="text-base font-medium mb-3">Informasi Produk</h4>
                <div class="overflow-x-auto relative">
                    <table class="table-auto w-full text-sm text-left text-gray-700">
                        <tbody>
                            <tr>
                                <td class="text-gray-900 whitespace-nowrap">Merek</td>
                                <td>Roma</td>
                            </tr>
                            <tr>
                                <td class="text-gray-900 whitespace-nowrap">Varian</td>
                                <td>Coklat</td>
                            </tr>
                            <tr>
                                <td class="text-gray-900 whitespace-nowrap">Berat</td>
                                <td>135 gram</td>
                            </tr>
                            <tr>
                                <td class="text-gray-900 whitespace-nowrap">Manufaktur</td>
                                <td>PT Mayora Indah TBK</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
