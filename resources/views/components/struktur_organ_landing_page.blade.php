<div class="grid lg:grid-rows-1 grid-rows-1 bg-white border border-gray-300 rounded-lg shadow mt-1">
    <h1 class="m-5 text-3xl underline font-bold tracking-tight text-gray-900 dark:text-white">
        Pengurus Perisai Diri Cabang Kota Tasikmalaya
    </h1>
    
    <div class="grid lg:grid-cols-4 grid-cols-1 gap-4">
        @for ($i = 0; $i < 4; $i++)
        <div class="max-w-sm bg-white border border-gray-400 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 m-5">
            <a href="#">
                <img class="rounded-t-lg" src="img/pengurus_1.jpg" alt="" width="100%"/>
            </a>
            <div class="p-5">
                <a href="#">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white text-wrap">Gun Gun Anantaguna</h5>
                </a>
                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">
                    305-235-4345-236 <br>
                    Ketua Cabang <br>
                    Keluarga Strip **** <br>
                </p>
                {{-- <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    Read more
                    <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                    </svg>
                </a> --}}
            </div>
        </div>
        @endfor
        <a href="/read_card_data_struktur_organ" class="flex w-fit m-5 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
            <span class="mr-5">Selengkapnya</span>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
                <path fill-rule="evenodd" d="M12.97 3.97a.75.75 0 0 1 1.06 0l7.5 7.5a.75.75 0 0 1 0 1.06l-7.5 7.5a.75.75 0 1 1-1.06-1.06l6.22-6.22H3a.75.75 0 0 1 0-1.5h16.19l-6.22-6.22a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd" />
            </svg>
        </a>
    </div>
</div>
