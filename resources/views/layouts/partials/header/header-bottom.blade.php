<div class="bg-white  border-y border-gray-200">
  <div class="container">
    <nav class="px-3">
      <div class="container flex flex-wrap justify-between items-center relative">
        <div class="flex">
          <button type="button" class="inline-flex items-center p-2 text-sm text-gray-500 rounded-lg hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 md:hidden"
            data-collapse-toggle="navbar-menu" aria-controls="navbar-menu" aria-expanded="false">
            <span class="sr-only">Open Menu</span>
            <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path>
            </svg>
          </button>
        </div>
        <div id="navbar-menu" class="absolute z-10 md:z-0 top-9 left-0 md:relative md:top-0 hidden justify-between items-center w-full mx-auto md:flex md:w-auto md:order-1">
          <ul class="flex flex-col p-3 md:p-2 mt-4 bg-gray-50 rounded-lg border border-gray-100 shadow-lg md:shadow-none md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium md:border-0 md:bg-white">
            <li>
              <a href="/" class="block py-2 pr-4 pl-3 {{ request()->is('/') ? 'text-white bg-[#bb1724]' : 'text-gray-700 hover:bg-gray-100'}} rounded">
                Beranda
              </a>
            </li>
            <li>
              <a href="/products" class="block py-2 pr-4 pl-3 {{ request()->is('products') || request()->is('products/*') ? 'text-white bg-[#bb1724]' : 'text-gray-700 hover:bg-gray-100'}} rounded">
                Produk
              </a>
            </li>
            <li>
              <a href="/about" class="block py-2 pr-4 pl-3 {{ request()->is('about') ? 'text-white bg-[#bb1724]' : 'text-gray-700 hover:bg-gray-100'}} rounded">
                Tentang Kami
              </a>
            </li>
            <li>
              <a href="/gallery" class="block py-2 pr-4 pl-3 {{ request()->is('gallery') ? 'text-white bg-[#bb1724]' : 'text-gray-700 hover:bg-gray-100'}} rounded">
                Galeri
              </a>
            </li>
          </ul>
        </div>
        <div class="flex items-center absolute right-0">
          <div class="relative">
            <i class="fa-brands fa-instagram fa-xl"></i>
          </div>
        </div>
      </div>
    </nav>
  </div>
</div>
