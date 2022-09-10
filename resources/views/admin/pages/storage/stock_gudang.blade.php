@extends('admin.layouts.template')
@section('content')
    <div class="container">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-center bg-white border rounded-lg p-8">
            <div class="lg:col-span-4">
                <main id="gallery">
                    <div id="main-image">
                        <img src="/assets/img/roma-wafello-chocoblast-depan.jpg" alt="Image"
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
                    <p class="mb-2 text-sm text-slate-600">
                        Makanan Kecil
                    </p>
                    <h3 class="mb-2 text-xl font-semibold text-red-800">Rp.{{ number_format(600000, 0, ',', '.') }}</h3>
                    <p class="text-sm font-bold text-slate-600">
                        Stok Gudang: <span>8</span>
                    </p>
                    <p class="text-sm font-bold text-slate-600">
                        Stok Toko: <span>8</span>
                    </p>
                    <p class="text-sm text-slate-600">
                        Merk: <span>Roma</span>
                    </p>
                    <p class="text-sm text-slate-600">
                        Varian: <span>Coklat</span>
                    </p>
                    <p class="text-sm text-slate-600">
                        Berat: <span>1000 gram</span>
                    </p>
                    <p class="text-sm text-slate-600">
                        Manufaktur: <span>PT. Mayora Indah TBK</span>
                    </p>
                </div>
            </div>
            <div class="lg:col-span-4">
                <div class="mt-7 lg:mt-0 p-1 lg:p-0 lg:pl-5">
                    <h1 class="text-2xl">Tambah stok ke Gudang:</h1>
                    <form action="{{ route('storage.update', [$product->id]) }}" method="post">
                        @csrf
                        @method('put')
                        <input type="number" min="1" name="stock_gudang" placeholder="Jumlah ?"
                            class="p-2 rounded-lg border w-full">
                        <button type="submit" class="p-2 mt-3 bg-blue-500 hover:bg-blue-600 text-white rounded-lg"><i
                                class="fa fa-plus"></i> Tambah ke
                            Toko</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="grid grid-cols-1 mt-7 bg-white border rounded-lg p-4 lg:p-8">
            <div>
                <h4 class="text-base font-medium mb-3">Bahan Pembuat:</h4>
                <div class="overflow-x-auto relative">
                    <div class="table-auto w-full text-sm text-left text-gray-700">
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quas minima quo, a enim eius repellendus
                        accusantium voluptate sequi provident reiciendis vel ducimus impedit placeat, nesciunt consequatur
                        voluptates quidem? Commodi, qui.
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
