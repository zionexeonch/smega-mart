@extends('layouts.layout-main')
@section('content')
    <div
        class="w-full h-[200px] max-w-screen-xl bg-[url('/assets/img/tampak-depan.jpg')] bg-cover bg-center bg-blend-multiply bg-black/[0.5] mx-auto rounded-lg">
        <div class="flex items-start justify-center">
            <div class="text-4xl text-white font-bold my-3">Tentang Kami</div>
        </div>
    </div>
    <div class="container mx-auto mt-5 w-full max-w-screen-xl">
        <article
            class="bg-white text-center text-black rounded-lg shadow-md hover:border-r-8 hover:border-b-8 hover:border-[#bb1724]">
            <div class="container items-center">
                <i class="fa fa-quote-left"></i> <b>Smega Mart</b> adalah toko retail yang berada di
                lingkungan
                SMK N 1
                Purbalingga. Smega Mart menyediakan
                berbagai macam kebutuhan sehari-hari. Disini bukan hanya makanan saja yang diperjual belikan ada juga yang
                lain
                seperti sepatu dan pakaian. Smega Mart bekerja sama dengan Alfamart untuk membangun trafik ekonomi yang
                menjanjikan. Memberi kemudahan bagi masyarakat terdekat dan juga siswa SMK N 1 Purbalingga. <i
                    class="fa fa-quote-right"></i><br>

                <b class="mt-3">- Ardianto [Alumni SMK N 1 PURBALINGGA] -</b>
            </div>
        </article>
    </div>

    <h1 class="text-center m-5 mt-10 text-4xl">Layanan Kami :</h1>
    <div class="mx-auto h-[2px] w-[100px] bg-black -mt-4"></div>
    <div
        class="mx-auto container w-full max-w-screen-xl grid gap-6 grid-cols-1 md:grid-cols-4 shadow-lg bg-white hover:border-r-8 hover:border-b-8 hover:border-[#bb1724] rounded-lg mt-5 items-center justify-center">
        <div class="mx-2 md:mx-2">
            1. Menjual berbagai makanan, minuman dan lainnya
        </div>
        <div class="mx-2 md:mx-2">
            2. Melayani pembayaran token listrik
        </div>
        <div class="mx-2 md:mx-2">
            3. Menjual token listrik prabayar
        </div>
        <div class="mx-2 md:mx-2">
            4. Melayani pembayaran BPJS
        </div>
    </div>

    <h1 class="text-center m-5 mt-10 text-4xl">Mitra Kami :</h1>
    <div class="mx-auto h-[2px] w-[100px] bg-black -mt-4"></div>
    <div
        class="mx-auto container w-full max-w-screen-xl grid gap-6 grid-cols-3 md:grid-cols-5 rounded-lg mt-5 m-3 items-center">
        <div class="m-3 bg-white shadow-lg w-ful h-auto md:w-40 items-center justify-center rounded-lg">
            <img src="/assets/img/HELM-FULLFACE-KYT-RC-SEVEN-14-YELLOW-FLUO.jpeg" alt=""
                class="rounded-lg border-4 border-[#bb1724] hover:border-gray-400 shadow-lg">
        </div>
        <div class="m-3 bg-white shadow-lg w-ful h-auto md:w-40 items-center justify-center rounded-lg">
            <img src="/assets/img/HELM-FULLFACE-KYT-RC-SEVEN-14-YELLOW-FLUO.jpeg" alt=""
                class="rounded-lg border-4 border-[#bb1724] hover:border-gray-400 shadow-lg">
        </div>
        <div class="m-3 bg-white shadow-lg w-ful h-auto md:w-40 items-center justify-center rounded-lg">
            <img src="/assets/img/HELM-FULLFACE-KYT-RC-SEVEN-14-YELLOW-FLUO.jpeg" alt=""
                class="rounded-lg border-4 border-[#bb1724] hover:border-gray-400 shadow-lg">
        </div>
        <div class="m-3 bg-white shadow-lg w-ful h-auto md:w-40 items-center justify-center rounded-lg">
            <img src="/assets/img/HELM-FULLFACE-KYT-RC-SEVEN-14-YELLOW-FLUO.jpeg" alt=""
                class="rounded-lg border-4 border-[#bb1724] hover:border-gray-400 shadow-lg">
        </div>
        <div class="m-3 bg-white shadow-lg w-ful h-auto md:w-40 items-center justify-center rounded-lg">
            <img src="/assets/img/HELM-FULLFACE-KYT-RC-SEVEN-14-YELLOW-FLUO.jpeg" alt=""
                class="rounded-lg border-4 border-[#bb1724] hover:border-gray-400 shadow-lg">
        </div>
    </div>
@endsection
