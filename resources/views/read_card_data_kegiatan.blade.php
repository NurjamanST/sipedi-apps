<x-layout_landing_page>
    {{-- Navbar --}}
    <x-nav_landing_page></x-nav_landing_page>
    <div class="relative w-full z-0 top-16 start-0">
        <div class="grid lg:grid-rows-1 grid-rows-1 bg-white border border-gray-300 rounded-lg shadow mt-1">
            <h1 class="m-5 text-3xl underline font-bold tracking-tight text-gray-900 dark:text-white text-center">
                Kegiatan Perisai Diri Cabang Kota Tasikmalaya
            </h1>
            
            <div class="grid lg:grid-cols-4 grid-cols-1 gap-4">
                @for ($i = 0; $i < 20; $i++)
                    <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 m-5">
                        <a href="#">
                            <img class="rounded-t-lg" src="img/kegiatan_1.png" alt="" />
                        </a>
                        <div class="p-5">
                            <a href="#">
                                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">LDK2PD - 202{{ $i+1 }}</h5>
                            </a>
                            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
                            <a href="read_detail_data_kegiatan" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                Detail Kegiatan
                                <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                @endfor
            </div>
        </div>        
    </div>
  
</x-layout_landing_page>

