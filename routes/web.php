<?php

use Illuminate\Support\Facades\Route;

// Rules
    // create_nama_halaman = Halaman dengan fungsi utama tambah data
    // read_nama_halaman = Halaman dengan fungsi utama lihat data
    // update_nama_halaman = Halaman dengan fungsi utama ubah data
    // delete_nama_halaman = Halaman dengan fungsi utama hapus data
    // nama_halaman = Halaman yang memiliki double fungsi

// Landing Page
Route::get('/', function () {
    return view('landing_page');
});
    // Sejarah Perisai Diri
    Route::get('/read_detail_data_sejarah', function () {
        return view('read_detail_data_sejarah');
    });
    // Struktur Perisai Diri Cabang
    Route::get('/read_card_data_struktur_organ', function () {
        return view('read_card_data_struktur_organ');
    });
    // Data Pelatih 
    Route::get('/read_card_data_pelatih', function () {
        return view('read_card_data_pelatih');
    });
    // Data Ranting
    Route::get('/read_card_data_ranting', function () {
        return view('read_card_data_ranting');


    });
    // Data Anggota
    Route::get('/read_grafik_data_anggota', function () {
        return view('read_grafik_data_anggota');
    });
    // Data Prestasi
    Route::get('/read_card_data_prestasi', function () {
        return view('read_card_data_prestasi');
    });
    // Data Kegiatan
    Route::get('/read_card_data_kegiatan', function () {
        return view('read_card_data_kegiatan');
    });
        // Detail Kegiatan
        Route::get('/read_detail_data_kegiatan', function () {
            return view('read_detail_data_kegiatan');
        });
        // Form Registrasi
        Route::get('/create_registrasi_kegiatan', function () {
            return view('create_registrasi_kegiatan');
        });
    // Danus
    Route::get('/read_data_produk', function () {
        return view('read_data_produk');
    });
        // Form Pemesanan

// Autentikasi Admin
Route::get('/signin', function () {
    return view('signin');
});

// Fitur Admin Utama
Route::get('/dashboard', function () {
    return view('dashboard');
});
    // Fitur Admin
    Route::get('/read_data_admin', function () {
        return view('read_admin');
    });

// Fitur Admin Absensi
Route::get('/dashboard_admin_absensi', function () {
    return view('dashboard_admin_absensi');
});
    // Fitur Generate Barcode
    Route::get('/read_data_barcode', function () {
        return view('maintenance');
    });
    // Fitur Riwayat Absensi Pengurus
    Route::get('/read_data_absensi_pengurus', function () {
        return view('maintenance');
    });
    // Fitur Riwayat Absensi Pelatih (C)
    Route::get('/read_data_absensi_pelatih_c', function () {
        return view('maintenance');
    });
    // Fitur Riwayat Absensi Pelatih (R)
    Route::get('/read_data_absensi_pelatih_r', function () {
        return view('maintenance');
    });
    // Fitur Riwayat Absensi Anggota
    Route::get('/read_data_absensi_anggota', function () {
        return view('maintenance');
    });

// Fitur Admin Icon
Route::get('/dashboard_admin_icon', function () {
    return view('dashboard_admin_icon');
});
    // Fitur Naskah Sejarah
    Route::get('/read_data_sejarah', function () {
        return view('read_data_sejarah');
    });
    // Fitur Profil Cabang
    Route::get('/read_data_profil_cabang', function () {
        return view('read_cabang');
    });
    // Fitur Profil Pengurus
    Route::get('/read_data_profil_pengurus', function () {
        return view('read_pengurus');
    });
    // Fitur Profil Pelatih
    Route::get('/read_data_profil_pelatih', function () {
        return view('read_pelatih');
    });
    // Fitur Profil Ranting
    Route::get('/read_data_profil_ranting', function () {
        return view('read_ranting');
    });
    // Fitur Profil Anggota
    Route::get('/read_data_profil_anggota', function () {
        return view('read_anggota');
    });

    // Fitur Prestasi
    Route::get('/read_data_prestasi', function () {
        return view('read_prestasi');
    });
    // Fitur Kegiatan
    Route::get('/read_data_kegiatan', function () {
        return view('read_kegiatan');
    });
    // Fitur Pendaftaran Kegiatan
    Route::get('/read_data_pendafataran_kegiatan', function () {
        return view('read_pendaftaran_kegiatan');
    });
    // Fitur Testimoni
    Route::get('/read_data_testinomi', function () {
        return view('read_testimoni');
    });
    // Fitur Info Khusus
    Route::get('/read_data_info_khusus', function () {
        return view('read_info_khusus');
    });

// Fitur Admin Niaga
Route::get('/dashboard_admin_niaga', function () {
    return view('dashboard_admin_niaga');
});
    // Fitur Produk
    // Fitur Pesanan
    // Fitur Metode Pembayaran
    // Fitur Profil Toko

// Autentikasi Ranting dan Anggota
Route::get('/signin_ra', function () {
    return view('signin_ra');
});

// Fitur Ranting
    // Fitur Profil Ranting
    // Fitur Pengurus Ranting
    // Fitur Anggota Ranting

// Fitur Anggota
    // Fitur Profil Anggota
    // Fitur Kegiatan Anggota
    // Fitur Transaksi Anggota

// ========================================================================================================