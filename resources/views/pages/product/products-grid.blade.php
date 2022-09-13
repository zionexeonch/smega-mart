<div class="grid grid-cols-2 md:grid-cols-4 grid-flow-row gap-2 xs:gap-4 sm:gap-6 lg:gap-4">
  @foreach ($products as $product)
  <div class="w-full h-full bg-white rounded shadow-md p-2 mb-2 overflow-hidden">
    <a href="/products/{{ $product->slug }}" class="overflow-hidden relative">
      <img src="{{ $product->image_urls }}" alt="Image" class="p-1 bg-white border border-gray-300 rounded-md max-w-full h-auto">
    </a>
    <div class="p-2">
      <span class="text-xs text-slate-600">{{ $product->category->name }}</span>
        <a href="/products/{{ $product->slug }}">
          <h5 class="text-sm uppercase font-medium tracking-tight hover:text-red-800">
            {{ $product->name }}
          </h5>
        </a>
      <div class="mt-1">
        <span class="text-lg font-semibold inline-block text-red-800">Rp.{{ number_format($product->sold_price, 0, ',', '.') }}</span>
      </div>
    </div>
  </div>
  @endforeach
</div>
<div class="mt-4 mx-10 sm:mx-7">
  {!! $products->onEachSide(1)->links() !!}
</div>
