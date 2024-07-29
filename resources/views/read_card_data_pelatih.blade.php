<x-layout_landing_page>
    {{-- Navbar --}}
    <x-nav_landing_page></x-nav_landing_page>
    <div class="relative w-full z-0 top-16 start-0">
        <div class="grid lg:grid-rows-1 grid-rows-1 bg-white border border-gray-300 rounded-lg shadow mt-1">
            <h1 class="m-5 text-3xl underline font-bold tracking-tight text-gray-900 dark:text-white text-center">
                Pelatih Cabang Perisai Diri Cabang Kota Tasikmalaya
            </h1>
            <div class="grid lg:grid-cols-6 grid-cols-1 gap-4">
                @for ($i = 0; $i < 12; $i++)
                <div class="max-w-sm bg-white border border-gray-400 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 m-5">
                    <a href="#">
                        <img class="rounded-t-lg" src="img/pak_dirjo.jpg" alt="" width="100%"/>
                    </a>
                    <div class="p-5">
                        <a href="#">
                            <h5 class="mb-2 text-1xl font-bold tracking-tight text-gray-900 dark:text-white text-wrap">Nama Pelatih</h5>
                        </a>
                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">
                            305-235-4345-236 <br>
                            Keluarga Strip **** <br>
                            PJ: Keluarga Strip Putih Hijau<br>
                        </p>
                        <span class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-green-700 rounded-lg hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            Cabang
                        </span>
                        
                    </div>
                </div>
                @endfor
                {{-- <a href="/read_data_sejarah" class="flex w-fit m-5 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    <span class="mr-5">Selengkapnya</span>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
                        <path fill-rule="evenodd" d="M12.97 3.97a.75.75 0 0 1 1.06 0l7.5 7.5a.75.75 0 0 1 0 1.06l-7.5 7.5a.75.75 0 1 1-1.06-1.06l6.22-6.22H3a.75.75 0 0 1 0-1.5h16.19l-6.22-6.22a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd" />
                    </svg>
                </a> --}}
            </div>
        </div>  
        
        <div class="grid lg:grid-rows-1 grid-rows-1 bg-white border border-gray-300 rounded-lg shadow mt-1">
            <h1 class="m-5 text-3xl underline font-bold tracking-tight text-gray-900 dark:text-white text-center">
                Pelatih Ranting Perisai Diri Cabang Kota Tasikmalaya
            </h1>
            <div class="grid lg:grid-cols-6 grid-cols-1 gap-4">
                @for ($i = 0; $i < 12; $i++)
                <div class="max-w-sm bg-white border border-gray-400 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 m-5">
                    <a href="#">
                        <img class="rounded-t-lg" src="img/pak_dirjo.jpg" alt="" width="100%"/>
                    </a>
                    <div class="p-5">
                        <a href="#">
                            <h5 class="mb-2 text-1xl font-bold tracking-tight text-gray-900 dark:text-white text-wrap">Nama Pelatih</h5>
                        </a>
                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">
                            305-235-4345-236 <br>
                            Keluarga Strip **** <br>
                            PJ: SMP Negeri 10 Kota Tasikmalaya<br>
                        </p>
                        <span class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-orange-700 rounded-lg hover:bg-orange-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            Ranting
                        </span>
                        
                    </div>
                </div>
                @endfor
                {{-- <a href="/read_data_sejarah" class="flex w-fit m-5 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    <span class="mr-5">Selengkapnya</span>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
                        <path fill-rule="evenodd" d="M12.97 3.97a.75.75 0 0 1 1.06 0l7.5 7.5a.75.75 0 0 1 0 1.06l-7.5 7.5a.75.75 0 1 1-1.06-1.06l6.22-6.22H3a.75.75 0 0 1 0-1.5h16.19l-6.22-6.22a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd" />
                    </svg>
                </a> --}}
            </div>
        </div> 
    </div>
  
</x-layout_landing_page>