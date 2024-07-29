<x-layout>
  
    <h1 class="mb-4 text-4xl font-extrabold leading-none tracking-tight text-gray-900 dark:text-white">
      Data Administrator
    </h1>
    <hr class="h-px my-8 bg-gray-200 border-0 dark:bg-gray-700">
    <div class="p-4 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700">
      {{-- Table --}}
      <div class="my-5">
        {{-- Form Tambah Data --}}
        <form action="" method="post">
          <div class="grid gap-6 mb-6 md:grid-cols-5">
            <div>
                <label for="first_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama Pengguna</label>
                <input type="text" id="first_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Masukan Nama Pengguna..." required />
            </div>
            <div>
                <label for="last_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Alamat Email</label>
                <input type="email" id="last_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Masukan Alamat Email..." required />
            </div>
            <div>
                <label for="company" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Password</label>
                <input type="password" id="company" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Masukan Password..." required />
            </div>  
            <div>
                <label for="phone" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Pilih Role</label>
                <select id="countries" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                  <option selected>Pilih Role</option>
                  <option value="absen">absen</option>
                  <option value="Informan">Informan</option>
                  <option value="Penjual">Penjual</option>
                </select>
            </div>
            <div>
              <button type="submit" class="text-white mt-7 bg-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Tambah Data</button>
            </div>
        </div>
        </form>
      </div>
      <hr class="my-5">
      <table id="myTable" class="display">
        <thead>
            <tr>
                <th>ID Admin</th>
                <th>Nama Pengguna</th>
                <th>Alamat Email</th>
                {{-- <th>Password</th> --}}
                <th>Role</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @for ($i = 1; $i < 3; $i++)
              <tr>
                <td>1029341244{{$i}}</td>
                  <td class="">
                    Admin absensi {{$i}}
                  </td>
                  <td>admin_absensi{{$i}}@pdkt.com</td>
                  {{-- <td><input type="password" name="pass" id="pass" value="Nurjaman" readonly></td> --}}
                  <td>absen</td>
                  <td class="text-center">
                    <a href="#" class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">Hapus</a>
                    <!-- Modal toggle -->
                    <button data-modal-target="authentication-modal" data-modal-toggle="authentication-modal" class="focus:outline-none text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-900" type="button">
                      Edit
                    </button>
                  </td>
              </tr>
              <tr>
                <td>1029341244{{$i}}</td>
                  <td class="">
                    Admin Informasi {{$i}}
                  </td>
                  <td>admin_informasi{{$i}}@pdkt.com</td>
                  {{-- <td><input type="password" name="pass" id="pass" value="Nurjaman" readonly></td> --}}
                  <td>Informan</td>
                  <td class="text-center">
                    <a href="#" class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">Hapus</a>
                     <!-- Modal toggle -->
                     <button data-modal-target="authentication-modal" data-modal-toggle="authentication-modal" class="focus:outline-none text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-900" type="button">
                      Edit
                    </button>
                  </td>
              </tr>
              <tr>
                <td>1029341245{{$i}}</td>
                  <td class="">
                    Admin Penjualan {{$i}}
                  </td>
                  <td>admin_penjualan{{$i}}@pdkt.com</td>
                  {{-- <td><input type="password" name="pass" id="pass" value="Nurjaman" readonly></td> --}}
                  <td>Penjual</td>
                  <td class="text-center">
                    <a href="#" class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">Hapus</a>
                    <!-- Modal toggle -->
                    <button data-modal-target="authentication-modal" data-modal-toggle="authentication-modal" class="focus:outline-none text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-900" type="button">
                      Edit
                    </button>
                  </td>
              </tr>
            @endfor
        </tbody>
    </table>
    </div>
</x-layout>

<!-- Main modal Edit Data-->
<div id="authentication-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative p-4 w-full max-w-md max-h-full">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <!-- Modal header -->
            <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                    Sign in to our platform
                </h3>
                <button type="button" class="end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="authentication-modal">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <!-- Modal body -->
            <div class="p-4 md:p-5">
                <form class="space-y-4" action="#">
                  <div class="grid gap-6 mb-6 md:grid-cols-1">
                    <div>
                        <label for="first_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama Pengguna</label>
                        <input type="text" id="first_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Masukan Nama Pengguna..." required 
                        value="Admin Informasi 1"/>
                    </div>
                    <div>
                        <label for="last_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Alamat Email</label>
                        <input type="email" id="last_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Masukan Alamat Email..." required 
                        value="admin_informasi1@pdkt.com"/>
                    </div>
                    <div>
                        <label for="company" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Password</label>
                        <input type="password" id="company" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Masukan Password..." required 
                        value="password_Informan"/>
                    </div>  
                    <div>
                        <label for="phone" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Pilih Role</label>
                        <select id="countries" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                          <option selected>Informan</option>
                          <option value="absen">absen</option>
                          <option value="Informan">Informan</option>
                          <option value="Penjual">Penjual</option>
                        </select>
                    </div>
                    <div>
                      <button type="submit" class="text-white mt-7 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Edit Data</button>
                    </div>
                  </div>
                </form>
            </div>
        </div>
    </div>
</div> 
