<div class="bg-white pt-2 lg:pt-0">
  <div class="container">
    <nav class="px-3 py-2 lg:py-3">
      <div class="container flex flex-wrap justify-between items-center relative mx-auto">
        <a href="/" class="px-2">
          <span class="self-center text-3xl font-oswald font-semibold whitespace-nowrap">SMEGA MART</span>
        </a>
        <div class="md:basis-3/5 px-2">
          <button type="button" class="md:hidden tex-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-4 focus:ring-gray-200 rounded-lg text-sm p-2.5 mr-1"
            data-collapse-toggle="navbar-search" aria-controls="navbar-search" aria-expanded="false">
            <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                clip-rule="evenodd"></path>
            </svg>
            <span class="sr-only">Cari</span>
          </button>
          <div class="hidden relative items-center md:block">
            <div class="relative mt-3 md:mt-0">
              <form>
                <div class="flex">
                  <label for="search-dropdown" class="mb-2 text-sm font-medium text-gray-500 sr-only">Kategori</label>
                  <button type="button" id="dropdown-button" class="hidden flex-shrink-0 z-10 sm:inline-flex items-center py-2.5 px-4 text-sm font-medium text-center text-gray-900 bg-gray-100 border sm:border-r-0 border-gray-300 rounded-l-lg hover:bg-gray-200 focus:ring-4 focus:outline-none focus:ring-gray-100"
                  data-dropdown-toggle="dropdown">
                    Kategori <svg aria-hidden="true" class="ml-1 w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                  </button>
                  <div id="dropdown" class="hidden z-10 w-44 bg-white rounded divide-y divide-gray-100 shadow-lg" data-propper-reference-hidden="" data-propper-escaped="" data-propper-placement="top" style="position: absolute; inset: auto auto 0px 0px; margin: 0px; transform: translate3d(897px, 5637px, 0px);">
                    <ul class="py-1 text-sm text-gray-700" aria-labelledby="dropdown-button">
                      <li>
                        <button type="button" class="inline-flex py-2 px-4 w-full hover:bg-gray-100">Semua</button>
                      </li>
                      <li>
                        <button type="button" class="inline-flex py-2 px-4 w-full hover:bg-gray-100">Sepatu</button>
                      </li>
                    </ul>
                  </div>
                  <div class="relative w-full">
                    <input type="search" id="search-dropdown" class="block p-2.5 w-full z-20 text-sm text-gray-900 bg-gray-50 rounded-lg sm:rounded-l-none border border-gray-300 focus:ring-[#c51826] focus:border-[#c51826]" placeholder="Cari produk...">
                    <button type="submit" class="absolute top-0 right-0 p-2.5 text-sm font-medium text-white bg-[#bb1724] rounded-r-lg border border-[#bb1724] hover:bg-[#ac1521] focus:ring-4 focus:outline-none focus:ring-red-300">
                      <svg aria-hidden="true" class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                      <span class="sr-only">Cari</span>
                    </button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
        <div id="navbar-search" class="absolute z-10 top-9 left-0 hidden justify-between items-center w-full md:hidden">
          <div class="relative mt-3">
            <form>
              <div class="flex">
                <label for="search-dropdown" class="mb-2 text-sm font-medium text-gray-500 sr-only">Kategori</label>
                <button type="button" id="dropdown-button" class="hidden flex-shrink-0 z-10 sm:inline-flex items-center py-2.5 px-4 text-sm font-medium text-center text-gray-900 bg-gray-100 border sm:border-r-0 border-gray-300 rounded-l-lg hover:bg-gray-200 focus:ring-4 focus:outline-none focus:ring-gray-100"
                data-dropdown-toggle="dropdown">
                  Kategori <svg aria-hidden="true" class="ml-1 w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                </button>
                <div id="dropdown" class="hidden z-10 w-44 bg-white rounded divide-y divide-gray-100 shadow" data-propper-reference-hidden="" data-propper-escaped="" data-propper-placement="top" style="position: absolute; inset: auto auto 0px 0px; margin: 0px; transform: translate3d(897px, 5637px, 0px);">
                  <ul class="py-1 text-sm text-gray-700" aria-labelledby="dropdown-button">
                    <li>
                      <button type="button" class="inline-flex py-2 px-4 w-full hover:bg-gray-100">Semua</button>
                    </li>
                    <li>
                      <button type="button" class="inline-flex py-2 px-4 w-full hover:bg-gray-100">Sepatu</button>
                    </li>
                  </ul>
                </div>
                <div class="relative w-full">
                  <input type="search" id="search-dropdown" class="block p-2.5 w-full z-20 text-sm text-gray-900 bg-gray-50 rounded-lg sm:rounded-l-none border border-gray-300 focus:ring-[#c51826] focus:border-[#c51826] shadow-lg" placeholder="Cari produk...">
                  <button type="submit" class="absolute top-0 right-0 p-2.5 text-sm font-medium text-white bg-[#bb1724] rounded-r-lg border border-[#bb1724] hover:bg-[#ac1521] focus:ring-4 focus:outline-none focus:ring-red-300">
                    <svg aria-hidden="true" class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                    <span class="sr-only">Cari</span>
                  </button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </nav>
  </div>
</div>
