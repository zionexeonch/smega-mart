@extends('admin.layouts.template')
@section('content')
    <div class="overflow-x-auto relative shadow-md sm:rounded-lg">
        <div class="m-5">
            <table class="w-full text-sm text-left text-white bg-[#bb1724] rounded-lg" id="table-datatables">
                <thead class="text-xs uppercase text-white dark:bg-gray-700 bg-[#bb1724] text-center">
                    <tr>
                        <th scope="col" class="py-2 px-6">
                            #
                        </th>
                        <th scope="col" class="py-2 px-6">
                            Username
                        </th>
                        <th scope="col" class="py-2 px-6">
                            Email
                        </th>
                        <th scope="col" class="py-2 px-6">
                            Level
                        </th>
                        <th scope="col" class="py-2 px-6 text-center">
                            Aksi
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $key => $user)
                        <tr class="bg-white border-b hover:bg-gray-50 text-black text-center">
                            <th class="border m-auto text-center w-auto">
                                {{ $key + 1 }}
                            </th>
                            <td>
                                {{ $user->namaUser }}
                            </td>
                            <td>
                                {{ $user->email }}
                            </td>
                            <td>
                                @if ($user->level == 'admin')
                                    <span class="bg-blue-600 text-white p-1 rounded-lg">{{ $user->level }}</span>
                                @elseif ($user->level == 'kasir')
                                    <span class="bg-yellow-400 text-black p-1 rounded-lg">{{ $user->level }}</span>
                                @else
                                    <span class="bg-green-500 text-white p-1 rounded-lg">{{ $user->level }}</span>
                                @endif
                            </td>
                            <td class="flex py-2 px-1 items-center md:px-auto text-center">
                                <button
                                    class="bg-yellow-300 text-black font-bold hover:bg-yellow-400 p-2 rounded-lg text-sm mx-auto"
                                    type="button" data-modal-toggle="edit{{ $user->kdUser }}">
                                    Edit
                                </button>
                                {{-- <a href="{{ route('unit.edit', [$user->kdUser]) }}"
                            class="bg-yellow-300 text-black font-bold hover:bg-yellow-400 p-2 rounded-lg text-sm w-full">Edit</a> --}}
                                <form action="{{ route('user.destroy', [$user->kdUser]) }}" method="post"
                                    class="justify-center mx-auto">
                                    @csrf
                                    @method('delete')
                                    <button onclick="return confirm('Yakin dihapus?')"
                                        class="bg-red-600 text-white hover:bg-red-700 p-2 rounded-lg text-sm">
                                        Hapus</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    {{-- modal untuk tambah --}}
    <div id="tambah" tabindex="-1" aria-hidden="true"
        class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-modal md:h-full justify-center items-center">
        <div class="relative p-4 w-full max-w-2xl h-full md:h-auto">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                <!-- Modal header -->
                <div class="flex justify-between items-start p-4 rounded-t border-b dark:border-gray-600">
                    <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                        Tambah Akun
                    </h3>
                    <button type="button"
                        class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white"
                        data-modal-toggle="tambah">
                        <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                clip-rule="evenodd"></path>
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>
                <!-- Modal body -->
                <div class="p-6 space-y-6">
                    <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400">
                    <form action="{{ route('user.store') }}" method="post">
                        @csrf
                        <div>
                            <label for="name">Nama Akun</label>
                            <input type="text" name="namaUser" class="w-full border rounded-lg" id="namaUser"
                                placeholder="Nama Akun" required>
                        </div>
                        <div>
                            <label for="leve">Level</label>
                            <select name="level" id="level" class="w-full border rounded-lg">
                                <option value="">Pilih Level Akun</option>
                                <option value="admin">Admin</option>
                                <option value="kasir">Kasir</option>
                                <option value="pelanggan">Pelanggan</option>
                            </select>
                        </div>
                        </p>
                </div>
                <!-- Modal footer -->
                <div class="flex items-center p-6 space-x-2 rounded-b border-t border-gray-200 dark:border-gray-600">
                    <button data-modal-toggle="tambah" type="submit"
                        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Simpan</button>
                    <button data-modal-toggle="tambah" type="button"
                        class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">Batal</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    {{-- modal untuk edit --}}
    @foreach ($users as $user)
        <div id="edit{{ $user->kdUser }}" tabindex="-1" aria-hidden="true"
            class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-modal md:h-full justify-center items-center">
            <div class="relative p-4 w-full max-w-2xl h-full md:h-auto">
                <!-- Modal content -->
                <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                    <!-- Modal header -->
                    <div class="flex justify-between items-start p-4 rounded-t border-b dark:border-gray-600">
                        <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                            Edit Suplier
                        </h3>
                        <button type="button"
                            class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white"
                            data-modal-toggle="edit{{ $user->kdUser }}">
                            <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            <span class="sr-only">Close modal</span>
                        </button>
                    </div>
                    <!-- Modal body -->
                    <div class="p-6 space-y-6">
                        <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400">
                        <form action="{{ route('user.update', [$user->kdUser]) }}" method="post">
                            @csrf
                            @method('put')
                            <div>
                                <label for="namaUser">Nama user</label>
                                <input type="text" name="namaUser" class="w-full border rounded-lg" id="namaUser"
                                    placeholder="Nama Suplier" value="{{ $user->namaUser }}" required>
                                <input type="hidden" name="slug" class="w-full border rounded-lg" id="slug"
                                    value="{{ $user->slug }}" required>
                            </div>
                            </p>
                    </div>
                    <!-- Modal footer -->
                    <div class="flex items-center p-6 space-x-2 rounded-b border-t border-gray-200 dark:border-gray-600">
                        <button data-modal-toggle="edit{{ $user->kdUser }}" type="submit"
                            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Simpan</button>
                        <button data-modal-toggle="edit{{ $user->kdUser }}" type="button"
                            class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">Batal</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
@endsection
