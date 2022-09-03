@extends('layouts.layout-main')
@section('content')
    <div class="container">
        <div
            class="w-full h-40 bg-[url('/assets/img/tampak-depan.jpg')] bg-cover bg-center bg-blend-multiply bg-black/[0.2]">
            <div class="flex items-start justify-center">
            </div>
        </div>
    </div>

    <h1 class="text-center m-5 mt-10 text-4xl text-[#bb1724]">Tentang Kami</h1>
    <div class="mx-auto h-[2px] w-[100px] bg-black -mt-4"></div>
    <p class="text-center mx-3 mt-3">
        <i class="fa fa-quote-left"></i> <b><i>Smega Mart</i></b> adalah toko retail yang ada di SMK N 1 PURBALINGGA. Toko
        retail yang menyediakan berbagai layanan yang sangat lengkap seperti jual makanan ringan, sepatu ada juga pembayaran
        secara online. Toko yang berdiri untuk memenuhi kebutuhan masyarakat
        disekitar dan juga memenuhi kebutuhan siswa dan siswi SMK N 1 PURBALINGGA. Bekerjasama dengan Alfamart dan SMK N 1
        Purbalingga untuk membuat trafik ekonomi yang memadai banyak kalangan. <i class="fa fa-quote-right"></i>
    </p>

    <h1 class="text-center m-5 mt-10 text-4xl text-[#bb1724]">Layanan Kami</h1>
    <div class="mx-auto h-[2px] w-[100px] bg-black -mt-4"></div>

    <div class="mb-4 border-b border-gray-200 dark:border-gray-700 mt-2">
        <ul class="flex flex-wrap items-center justify-center -mb-px text-sm font-medium text-center" id="myTab"
            data-tabs-toggle="#myTabContent" role="tablist">
            <li class="mr-2" role="presentation">
                <button
                    class="inline-block p-4 rounded-t-lg border-b-2 text-blue-600 hover:text-blue-600 dark:text-blue-500 dark:hover:text-blue-500 border-blue-600 dark:border-blue-500"
                    id="profile-tab" data-tabs-target="#profile" type="button" role="tab" aria-controls="profile"
                    aria-selected="true">Uang Elektronik</button>
            </li>
            <li class="mr-2" role="presentation">
                <button
                    class="inline-block p-4 rounded-t-lg border-b-2 border-transparent hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300 dark:border-transparent text-gray-500 dark:text-gray-400 border-gray-100 dark:border-gray-700"
                    id="dashboard-tab" data-tabs-target="#dashboard" type="button" role="tab" aria-controls="dashboard"
                    aria-selected="false">Agen Tiket Online</button>
            </li>
            <li class="mr-2" role="presentation">
                <button
                    class="inline-block p-4 rounded-t-lg border-b-2 border-transparent hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300 dark:border-transparent text-gray-500 dark:text-gray-400 border-gray-100 dark:border-gray-700"
                    id="settings-tab" data-tabs-target="#settings" type="button" role="tab" aria-controls="settings"
                    aria-selected="false">Voucher</button>
            </li>
            <li role="presentation">
                <button
                    class="inline-block p-4 rounded-t-lg border-b-2 border-transparent hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300 dark:border-transparent text-gray-500 dark:text-gray-400 border-gray-100 dark:border-gray-700"
                    id="contacts-tab" data-tabs-target="#contacts" type="button" role="tab" aria-controls="contacts"
                    aria-selected="false">Contacts</button>
            </li>
        </ul>
    </div>
    <div id="myTabContent">
        <div class="p-4 bg-gray-50 rounded-lg dark:bg-gray-800" id="profile" role="tabpanel"
            aria-labelledby="profile-tab">
            <div class="grid grid-cols-2 gap-4 md:grid-cols-5 items-center justify-center mx-auto rounded-2xl">
                <div class="bg-white w-28 shadow-lg rounded-lg borer-b hover:border-[#bb1724]">
                    <img class="w-full rounded-md aspect-video" src="/assets/img/smk.png" />
                    <h6 class="text-center ">Dana</h6>
                </div>
                <div class="bg-white w-28 shadow-lg rounded-lg borer-b hover:border-[#bb1724]">
                    <img class="w-full rounded-md aspect-video" src="/assets/img/smk.png" />
                    <h6 class="text-center ">Dana</h6>
                </div>
                <div class="bg-white w-28 shadow-lg rounded-lg borer-b hover:border-[#bb1724]">
                    <img class="w-full rounded-md aspect-video" src="/assets/img/smk.png" />
                    <h6 class="text-center ">Dana</h6>
                </div>
                <div class="bg-white w-28 shadow-lg rounded-lg borer-b hover:border-[#bb1724]">
                    <img class="w-full rounded-md aspect-video" src="/assets/img/smk.png" />
                    <h6 class="text-center ">Dana</h6>
                </div>
                <div class="bg-white w-28 shadow-lg rounded-lg borer-b hover:border-[#bb1724]">
                    <img class="w-full rounded-md aspect-video" src="/assets/img/smk.png" />
                    <h6 class="text-center ">Dana</h6>
                </div>
            </div>
        </div>
        <div class="hidden p-4 bg-gray-50 rounded-lg dark:bg-gray-800" id="dashboard" role="tabpanel"
            aria-labelledby="dashboard-tab">
            <p class="text-sm text-gray-500 dark:text-gray-400">This is some placeholder content the <strong
                    class="font-medium text-gray-800 dark:text-white">Dashboard tab's associated content</strong>. Clicking
                another tab will toggle the visibility of this one for the next. The tab JavaScript swaps classes to control
                the content visibility and styling.</p>
        </div>
        <div class="hidden p-4 bg-gray-50 rounded-lg dark:bg-gray-800" id="settings" role="tabpanel"
            aria-labelledby="settings-tab">
            <p class="text-sm text-gray-500 dark:text-gray-400">This is some placeholder content the <strong
                    class="font-medium text-gray-800 dark:text-white">Settings tab's associated content</strong>. Clicking
                another tab will toggle the visibility of this one for the next. The tab JavaScript swaps classes to control
                the content visibility and styling.</p>
        </div>
        <div class="hidden p-4 bg-gray-50 rounded-lg dark:bg-gray-800" id="contacts" role="tabpanel"
            aria-labelledby="contacts-tab">
            <p class="text-sm text-gray-500 dark:text-gray-400">This is some placeholder content the <strong
                    class="font-medium text-gray-800 dark:text-white">Contacts tab's associated content</strong>. Clicking
                another tab will toggle the visibility of this one for the next. The tab JavaScript swaps classes to control
                the content visibility and styling.</p>
        </div>
    </div>
@endsection
