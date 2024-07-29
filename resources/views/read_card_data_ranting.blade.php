<x-layout_landing_page>
    {{-- Navbar --}}
    <x-nav_landing_page></x-nav_landing_page>
    <div class="relative w-full z-0 top-16 start-0">
        <div class="grid lg:grid-rows-1 grid-rows-1 bg-white border border-gray-300 rounded-lg shadow mt-1">
            <h1 class="m-5 text-3xl underline font-bold tracking-tight text-gray-900 dark:text-white text-center">
                Ranting Perisai Diri Cabang Kota Tasikmalaya
            </h1>
            <div class="grid lg:grid-cols-5 grid-cols-1 gap-4">
                @for ($i = 0; $i < 50; $i++)     
                    <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 m-5">
                        <div class="flex justify-end px-4 pt-4">
                            {{--  --}}
                        </div>
                        <div class="flex flex-col items-center pb-10">
                            <img class="w-24 h-24 mb-3 rounded-lg shadow-lg" src="img/logo-smp10.png" alt="Bonnie image"/>
                            <h5 class=" mx-5 text-center mb-1 text-xl font-medium text-gray-900 dark:text-white">SMP Negeri {{ $i+1 }}</h5>
                            <span class="text-sm text-gray-500 dark:text-gray-400">Nama Pelatih Ranting</span>
                            <span class="text-sm text-gray-500 dark:text-gray-400">Nama Pembina Ranting</span>
                            <div class="flex mt-4 md:mt-6">
                                <a href="#" class="py-2 px-4 ms-2 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100">100 Anggota</a>
                            </div>
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