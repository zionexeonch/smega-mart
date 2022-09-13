@extends('layouts.layout-main')
@section('content')
    <div class="container">
      <div class="bg-white border rounded-lg p-4 lg:p-8">
        <div class="grid grid-cols-1 md:grid-cols-12 lg:grid-cols-12 gap-2 md:gap-4 lg:gap-6 items-center">
            <div class="md:col-span-5 lg:col-span-5">
                <main id="gallery">
                    <div id="main-image">
                        <img src="{{ $product->image_urls }}" alt="Image"
                            class="object-contain w-full sm:w-10/12 md:w-full sm:mx-auto md:m-0 mt-2 p-1 bg-gray-50 border border-gray-300 rounded-md">
                    </div>
                    <div id="images" class="grid grid-cols-4 gap-x-4 mt-3">
                        <img src="{{ $product->image_urls }}" alt="Image"
                            class="max-w-full h-auto mt-2 p-1 bg-gray-50 border border-gray-300 rounded-md">
                        <img src="{{ $product->image_urls }}" alt="Image"
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
            <div class="md:col-span-7 lg:col-span-7">
                <div class="mt-7 lg:mt-0 p-1 lg:p-0 lg:pl-5">
                    <h2 class="mb-3 text-xl text-gray-600 font-semibold uppercase tracking-wide">
                        {{ $product->name }}
                    </h2>
                    <p class="mb-3 text-sm text-slate-600">
                      {{ $product->category->name }}
                    </p>
                    <h3 class="mb-3 text-xl font-semibold text-red-800">Rp.{{ number_format($product->sold_price, 0, ',', '.') }}</h3>
                    <p class="mb-3 text-sm text-slate-600">
                        Stok : <span>{{ $product->store_stock }}</span>
                    </p>
                </div>
            </div>
        </div>
        <div class="mt-4">
          {{-- <h1 class="text-2xl text-center">Bahan pembuat</h1> --}}
          <p>{{ $product->description }}</p>
        </div>
      </div>
        <div class="grid grid-cols-1 mt-7 bg-white border rounded-lg p-4 lg:p-8">
            <div>
                <h4 class="text-base font-medium mb-3">Informasi Produk</h4>
                <div class="overflow-x-auto relative">
                    <table class="table-auto w-full text-sm text-left text-gray-700">
                        <tbody>
                            {{-- <tr>
                                <td class="text-gray-900 whitespace-nowrap">Merek</td>
                                <td>Roma</td>
                            </tr> --}}
                            <tr>
                                <td class="text-gray-900 whitespace-nowrap">Varian</td>
                                <td>{{ $product->variant }}</td>
                            </tr>
                            <tr>
                                <td class="text-gray-900 whitespace-nowrap">Berat</td>
                                <td>{{ $product->weight }} gram</td>
                            </tr>
                            {{-- <tr>
                                <td class="text-gray-900 whitespace-nowrap">Manufaktur</td>
                                <td>PT Mayora Indah TBK</td>
                            </tr> --}}
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
