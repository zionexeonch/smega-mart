@extends('layouts.layout-main')
@section('content')
    <div
        class="w-full h-[200px] max-w-screen-xl bg-[url('/assets/img/tampak-depan.jpg')] bg-cover bg-center bg-blend-multiply bg-black/[0.5] mx-auto rounded-lg">
        <div class="flex items-start md:justify-center">
            <div class="text-sm md:text-4xl text-white font-bold ml-3 my-[50%] md:ml-0 md:my-3">Smega Mart
            </div>
        </div>
    </div>
    <div class="container mx-auto mt-5 w-full max-w-screen-xl">
        <article
            class="hover:bg-white text-center text-black rounded-lg hover:shadow-md hover:border-r-8 hover:border-b-8 hover:border-[#bb1724]">
            <div class="container items-center text-center">
                <i class="fa fa-quote-left"></i> <b>Smega Mart</b> adalah toko retail yang berada di
                lingkungan
                SMK N 1
                Purbalingga. Smega Mart menyediakan
                berbagai macam kebutuhan sehari-hari. Disini bukan hanya makanan saja yang diperjual belikan ada juga yang
                lain
                seperti sepatu dan alat tulis ada juga layanan pembelian pulsa. Smega Mart bekerja sama dengan Alfamart
                untuk membangun trafik ekonomi yang
                menjanjikan. Memberi kemudahan bagi masyarakat terdekat dan juga siswa siswi SMK N 1 Purbalingga. <i
                    class="fa fa-quote-right"></i><br>

            </div>
        </article>
    </div>

    <div class="container mx-auto w-full max-w-screen-xl mt-5">
        <div class="m-3">
            <h1 class="text-center m-5 mt-10 text-2xl text-[#bb1724]">Area Pelayanan</h1>
            <div class="mx-auto h-[2px] w-[100px] bg-black -mt-4"></div>
            <article class="mt-3">
                Kami menyediakan produk sehari-hari seperti makanan ringan, minumah, alat tulis dan lainnya.
                Kami melayani warga SMK N 1 PURBALINGGA dan masyarakat sekitar dan juga melayani secara online
                untuk wilayah Kabupaten Purbalingga khususnya kecamatan Kalimanah.
            </article>
        </div>
    </div>

    <h1 class="text-center m-5 mt-10 text-2xl text-[#bb1724]">Beberapa produk kami</h1>
    <div class="mx-auto h-[2px] w-[100px] bg-black -mt-4"></div>
    <div
        class="mx-auto container w-full max-w-screen-xl grid gap-6 grid-cols-1 md:grid-cols-3 rounded-lg mt-5 items-center">
        <div class="mx-auto bg-white shadow-lg w-ful h-auto items-center justify-center rounded-lg">
            <img src="/assets/img/HELM-FULLFACE-KYT-RC-SEVEN-14-YELLOW-FLUO.jpeg" alt=""
                class="rounded-lg border-4 border-[#bb1724] hover:border-gray-400 shadow-lg">
        </div>
        <div class="mx-auto bg-white shadow-lg w-ful h-auto items-center justify-center rounded-lg">
            <img src="/assets/img/HELM-FULLFACE-KYT-RC-SEVEN-14-YELLOW-FLUO.jpeg" alt=""
                class="rounded-lg border-4 border-[#bb1724] hover:border-gray-400 shadow-lg">
        </div>
        <div class="mx-auto bg-white shadow-lg w-ful h-auto items-center justify-center rounded-lg">
            <img src="/assets/img/HELM-FULLFACE-KYT-RC-SEVEN-14-YELLOW-FLUO.jpeg" alt=""
                class="rounded-lg border-4 border-[#bb1724] hover:border-gray-400 shadow-lg">
        </div>
    </div>

    <div class="bg-gray-100">
        <h1 class="text-center m-5 mt-10 text-2xl text-[#bb1724]">Mitra kami</h1>
        <div class="mx-auto h-[2px] w-[100px] bg-black -mt-4"></div>
        <div class="grid grid-cols-3 justify-items-center">
            <div class="mx-auto my-5">
                <a target="_blank" href="https://alfamart.co.id/">
                    <img src="/assets/img/alfamart.png" alt="" class="w-20 h-auto md:w-40 md:h-auto"></a>
            </div>
            <div class="mx-auto my-5">
                <a target="_blank" href="https://smkn1purbalingga.sch.id/">
                    <img src="/assets/img/smk.png" alt="" class="w-20 h-auto md:w-40 md:h-auto">
                </a>
            </div>
            <div class="mx-auto my-5">
                <a target="_blank" href="https://softdev.akriliklasercutting.com"><img src="/assets/img/softdev.png"
                        alt="" class="w-20 h-auto md:w-40 md:h-auto mt-3"></a>
            </div>
        </div>
    </div>
@endsection
