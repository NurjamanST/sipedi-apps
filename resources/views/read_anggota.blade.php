<x-layout>
  
    <h1 class="mb-4 text-4xl font-extrabold leading-none tracking-tight text-gray-900 dark:text-white">
      Profil Anggota
    </h1>
    <hr class="h-px my-8 bg-gray-200 border-0 dark:bg-gray-700">
    <div class="p-4 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700">
      {{-- Table --}}
      <div class="my-5">
        <a href="#" class="focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-900">Tambah Data</a>
      </div>
      <table id="myTable" class="display">
        <thead>
            <tr>
                <th>Photo</th>
                <th>NRA</th>
                <th>Nama</th>
                <th>Tingkatan</th>
                <th>Ranting/Unit</th>
                <th>Email</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
          @for ($i=1; $i < 100 ; $i++)
            <tr>
                <td class="">
                  <img src="img/logo-pdkt.png" alt="" class="w-20">
                </td>
                <td>102934124{{$i}}</td>
                <td>Anantaguna</td>
                <td>Keluarga Strip Kuning</td>
                <td>SMP Negeri 10 Kota Tasik…</td>
                <td>Ananta@pdkt.com</td>
                <td class="text-center">
                  <a href="#" class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">Hapus</a>
                  <a href="#" class="focus:outline-none text-white bg-gray-700 hover:bg-gray-800 focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-gray-600 dark:hover:bg-gray-700 dark:focus:ring-gray-900">Detail</a>
                </td>
            </tr>
          @endfor
        </tbody>
    </table>
    </div>
</x-layout>