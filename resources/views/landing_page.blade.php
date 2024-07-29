<x-layout_landing_page>
    {{-- Navbar --}}
    <x-nav_landing_page></x-nav_landing_page>
    {{-- Slider --}}
    <x-slider_landing_page></x-slider_landing_page>
    <div class="relative w-full z-0 top-16 start-0">
        {{-- Sejarah Perisai Diri --}}
        <x-about_landing_page></x-about_landing_page>
        {{-- Struktur Organisasi --}}
        <x-struktur_organ_landing_page></x-struktur_organ_landing_page>
        {{-- Data Pelatih --}}
        <x-card_data_pelatih_landing_page></x-card_data_pelatih_landing_page>
        {{-- Data Ranting --}}
        <x-card_data_ranting_landing_page></x-card_data_ranting_landing_page>
        {{-- Data Anggota --}}
        <x-grafik_data_anggota_landing_page></x-grafik_data_anggota_landing_page>
        {{-- Data Prestasi --}}
        <x-card_data_prestasi_landing_page></x-card_data_prestasi_landing_page>
        {{-- Data Kegiatan --}}
        <x-card_data_kegiatan_landing_page></x-card_data_kegiatan_landing_page>    

        {{-- Marketplace Danus >> Versi 2--}}
        <x-card_data_katalog_danus_landing_page></x-card_data_katalog_danus_landing_page>    

    </div>
  
</x-layout_landing_page>

<!-- Main modal -->
<div id="pesan_produk" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative p-4 w-full max-w-md max-h-full">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <!-- Modal header -->
            <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                    Formulir Pemesanan
                </h3>
                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="pesan_produk">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <!-- Modal body -->
            <form class="p-4 md:p-5">
                <div class="grid gap-4 mb-4 grid-cols-2">
                    <div class="col-span-2">
                        <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama Pembeli</label>
                        <input type="text" name="nama_peserta" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Type product name" required=""
                        value="Nurjaman" readonly>
                    </div>
                    <div class="col-span-2">
                        <label for="ting" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tingkatan</label>
                        <input type="text" name="tingkatan" id="price" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="$2999" required=""
                        value="Keluarga Strip Hijau Biru">
                    </div>
                    <div class="col-span-2">
                        <label for="ranting" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Ranting</label>
                        <input type="text" name="ranting" id="price" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="$2999" required=""
                        value="SMP Negeri 10 Kota Tasikmalaya" readonly>
                    </div>
                    <div class="col-span-2">
                        <label for="kegiatan" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Produk</label>
                        <input type="text" name="kegiatan" id="kegiatan" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Type product name" required=""
                        value="Body Protector" readonly>
                    </div>
                    <div class="col-span-2 w-1/2">
                        <label for="kegiatan" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Qty Produk</label>
                        <input type="number" name="kegiatan" id="kegiatan" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Type product name" required=""
                        value="1">
                    </div>
                    {{-- <div class="col-span-2">
                        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="user_avatar">Upload Surat Izin Orang Tua</label>
                        <input class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" aria-describedby="user_avatar_help" id="user_avatar" type="file">
                        <div class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="user_avatar_help">Upload dengan Format Pdf | Max size 10 MB</div>
                    </div> --}}
                    
  
                </div>
                <button type="submit" class="text-white inline-flex items-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    <svg class="me-1 -ms-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd"></path></svg>
                    Daftar Kegiatan Sekarang
                </button>
            </form>
        </div>
    </div>
</div> 
  