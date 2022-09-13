@extends('admin.layouts.template')
@section('content')
<div class="overflow-x-auto relative shadow-md sm:rounded-lg">
  <table class="w-full text-sm text-left text-white bg-[#bb1724]">
      <thead class="text-xs uppercase text-white dark:bg-gray-700 bg-[#bb1724]">
          <tr>
              <th scope="col" class="py-3 px-6">
                  #
              </th>
              <th scope="col" class="py-3 px-6 text-center">
                  Nama suplier
              </th>
              <th scope="col" colspan="3" class="py-3 px-1 text-center">
                  Aksi
              </th>
          </tr>
      </thead>
      <tbody>
              <tr class="bg-white border-b hover:bg-gray-50 text-black">
                  <th class="m-auto text-center w-auto">
                      1
                  </th>
                  <td class="py-3 px-6 text-center">
                      CV. Mekar Cutting Digital
                  </td>
                  <td class="py-3 px-1 items-center md:px-auto text-center">
                      <a href="{{ route('suplier.show', [1]) }}"
                          class="bg-blue-700 text-white font-bold p-2 rounded-lg hover:bg-blue-800 text-sm w-full">Detail</a>
                  </td>
                  <td class="py-3 px-1 items-center md:px-auto text-center">
                      <a href="{{ route('suplier.edit', [1]) }}"
                          class="bg-yellow-300 text-black font-bold hover:bg-yellow-400 p-2 rounded-lg text-sm w-full">Edit</a>
                  </td>
                  <td class="py-3 px-1 items-center md:px-auto text-center">
                      <a href="#" onclick="return confirm('Yakin dihapus?')"
                          class="bg-red-600 text-white hover:bg-red-700 p-2 rounded-lg text-sm w-full">
                          Hapus</a>
                  </td>
              </tr>
      </tbody>
  </table>
</div>
@endsection
