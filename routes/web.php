<?php

use Illuminate\Support\Facades\Route;

// Rules
    // create_nama_halaman = Halaman dengan fungsi utama tambah data
    // read_nama_halaman = Halaman dengan fungsi utama lihat data
    // update_nama_halaman = Halaman dengan fungsi utama ubah data
    // delete_nama_halaman = Halaman dengan fungsi utama hapus data
    // nama_halaman = Halaman yang memiliki double fungsi


// UMUM
Route::get('/', function () {
    return view('landing_page');
});
Route::get('/signin', function () {
    return view('signin');
});

// Admin
Route::get('/dashboard', function () {
    return view('dashboard');
});

// Admin Penjualan
Route::get('/read_data_admin_penjualan', function () {
    return view('read_admin_penjualan');
});

// Admin Informasi
Route::get('/read_data_admin_informasi', function () {
    return view('read_admin_informasi');
});

// Profil
    Route::get('/read_data_profil_cabang', function () {
        return view('read_cabang');
    });

    Route::get('/read_data_profil_pengurus', function () {
        return view('read_pengurus');
    });

    Route::get('/read_data_profil_ranting', function () {
        return view('read_ranting');
    });

    Route::get('/read_data_profil_pelatih', function () {
        return view('read_pelatih');
    });

    Route::get('/read_data_profil_anggota', function () {
        return view('read_anggota');
    });

// Prestasi
Route::get('/read_data_prestasi', function () {
    return view('read_prestasi');
});

// Kegiatan
Route::get('/read_data_kegiatan', function () {
    return view('read_kegiatan');
});

// Pendaftaran Kegiatan
Route::get('/read_data_pendafataran_kegiatan', function () {
    return view('read_pendaftaran_kegiatan');
});

// Testimoni
Route::get('/read_data_testinomi', function () {
    return view('read_testimoni');
});

// Info Khusus
Route::get('/read_data_info_khusus', function () {
    return view('read_info_khusus');
});



// ========================================================================================================

// Home Page: Ranting & Anggota
Route::get('/read_data_sejarah', function () {
    echo "Data Sejarah Perisai Diri";
});

Route::get('/read_data_struktur_organ', function () {
    echo "Data Struktur Organisasi";
});

Route::get('/read_data_produk', function () {
    echo "Data Produk Danus Perisai Diri";
});