<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return redirect('home');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
// Master
Route::get('/master/suplier/suplier', 'MasterController@suplier')->middleware('auth');
Route::get('/master/customer/cust', 'MasterController@customer')->middleware('auth');
Route::get('/master/bahanbaku/bahanbaku', 'MasterController@bahanbaku')->middleware('auth');
Route::get('/master/jenisproduksi/jenisproduksi', 'MasterController@jenisproduksi')->middleware('auth');
Route::get('/master/pegawai/pegawai', 'MasterController@pegawai')->middleware('auth');
Route::get('/master/akun/a_keuangan', 'MasterController@keuangan')->middleware('auth');
Route::get('/master/transaksi/t_keuangan', 'MasterController@t_keuangan')->middleware('auth');
Route::get('/master/barang/barang', 'MasterController@barang')->middleware('auth');

// Manajemen Pembelian
Route::get('/m_pembelian/rencana/rencana', 'PembelianController@rencana')->middleware('auth');
Route::get('/m_pembelian/notapembelian/notapembelian', 'PembelianController@notapembelian')->middleware('auth');
Route::get('/m_pembelian/purchaseorder/purchaseorder', 'PembelianController@purchaseorder')->middleware('auth');

// Manajemen Stok
Route::get('/m_stok/mutasistok/mutasistok', 'StokController@mutasistok')->middleware('auth');
Route::get('/m_stok/opnamestock/opnamestock', 'StokController@opnamestock')->middleware('auth');
Route::get('/m_stok/pencatatanbarangkeluar/pencatatanbarangkeluar', 'StokController@pencatatanbarangkeluar')->middleware('auth');
Route::get('/m_stok/penerimaanbarangmasuk/penerimaanbarangmasuk', 'StokController@penerimaanbarangmasuk')->middleware('auth');
Route::get('/m_stok/returnbarangsuplier/returnbarangsuplier', 'StokController@returnbarangsuplier')->middleware('auth');
Route::get('/m_stok/terimareturnsuplier/terimareturnsuplier', 'StokController@terimareturnsuplier')->middleware('auth');

// Manajemen Karyawan
Route::get('/m_karyawan/cashbonkaryawan/cashbonkaryawan', 'KaryawanController@cashbonkaryawan')->middleware('auth');
Route::get('/m_karyawan/absensikaryawan/absensikaryawan', 'KaryawanController@absensikaryawan')->middleware('auth');
Route::get('/m_karyawan/datakaryawan/datakaryawan', 'KaryawanController@datakaryawan')->middleware('auth');
Route::get('/m_karyawan/penggajian/penggajian', 'KaryawanController@penggajian')->middleware('auth');

// Manajemen Penjualan
Route::get('/m_penjualan/datacustomer/datacustomer', 'PenjualanController@datacustomer')->middleware('auth');
Route::get('/m_penjualan/m_diskon/m_diskon', 'PenjualanController@m_diskon')->middleware('auth');
Route::get('/m_penjualan/m_penjualanonline/m_penjualanonline', 'PenjualanController@m_penjualanonline')->middleware('auth');
Route::get('/m_penjualan/masterpaket/masterpaket', 'PenjualanController@masterpaket')->middleware('auth');
Route::get('/m_penjualan/notaperawatan/notaperawatan', 'PenjualanController@notaperawatan')->middleware('auth');
Route::get('/m_penjualan/notapenjualan/notapenjualan', 'PenjualanController@notapenjualan')->middleware('auth');

// Aplikasi Customer Apk / Ios
Route::get('/aplikasi/infoperusahaan/infoperusahaan', 'AplikasiController@infoperusahaan')->middleware('auth');
Route::get('/aplikasi/reservasi/reservasi', 'AplikasiController@reservasi')->middleware('auth');
Route::get('/aplikasi/konsultasi/konsultasi', 'AplikasiController@konsultasi')->middleware('auth');
Route::get('/aplikasi/outlet/outlet', 'AplikasiController@outlet')->middleware('auth');
Route::get('/aplikasi/perawatan/perawatan', 'AplikasiController@perawatan')->middleware('auth');
Route::get('/aplikasi/pesanproduk/pesanproduk', 'AplikasiController@pesanproduk')->middleware('auth');
Route::get('/aplikasi/profil/profil', 'AplikasiController@profil')->middleware('auth');
Route::get('/aplikasi/promo/promo', 'AplikasiController@promo')->middleware('auth');

// Layanan Respon Publik
Route::get('/respon/edit_dataperusahaan/edit_dataperusahaan', 'ResponController@edit_dataperusahaan')->middleware('auth');
Route::get('/respon/edit_outlet/edit_outlet', 'ResponController@edit_outlet')->middleware('auth');
Route::get('/respon/edit_promo/edit_promo', 'ResponController@edit_promo')->middleware('auth');
Route::get('/respon/layananreservasi/layananreservasi', 'ResponController@layananreservasi')->middleware('auth');
Route::get('/respon/layanankonsultasi/layanankonsultasi', 'ResponController@layanankonsultasi')->middleware('auth');

// Keuangan
Route::get('/keuangan/a_roe/a_roe', 'KeuanganController@a_roe')->middleware('auth');
Route::get('/keuangan/laporankeuangan/laporankeuangan', 'KeuanganController@laporankeuangan')->middleware('auth');
Route::get('/keuangan/laporanhutangpiutang/laporanhutangpiutang', 'KeuanganController@laporanhutangpiutang')->middleware('auth');
Route::get('/keuangan/budgeting/budgeting', 'KeuanganController@budgeting')->middleware('auth');
Route::get('/keuangan/prosestransaksi/prosestransaksi', 'KeuanganController@prosestransaksi')->middleware('auth');
Route::get('/keuangan/a_netprofit/a_netprofit', 'KeuanganController@a_netprofit')->middleware('auth');
Route::get('/keuangan/a_pertumbuhanaset/a_pertumbuhanaset', 'KeuanganController@a_pertumbuhanaset')->middleware('auth');
Route::get('/keuangan/a_cashflow/a_cashflow', 'KeuanganController@a_cashflow')->middleware('auth');
Route::get('/keuangan/a_commonsize/a_commonsize', 'KeuanganController@a_commonsize')->middleware('auth');
Route::get('/keuangan/a_rasiokeuangan/a_rasiokeuangan', 'KeuanganController@a_rasiokeuangan')->middleware('auth');
Route::get('/keuangan/a_3bottomline/a_3bottomline', 'KeuanganController@a_3bottomline')->middleware('auth');
