<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

class MasterController extends Controller
{
    public function suplier()
    {
    	return view('master/suplier/suplier');
    }
    public function customer()
    {
    	return view('master/customer/cust');
    }
    public function bahanbaku()
    {
    	return view('master/bahanbaku/bahanbaku');
    }
    public function jenisproduksi()
    {
    	return view('master/jenisproduksi/jenisproduksi');
    }
    public function pegawai()
    {
    	return view('master/pegawai/pegawai');
    }
    public function keuangan()
    {
        return view('master/akun/keuangan');
    }
    public function t_keuangan()
    {
        return view('master/transaksi/keuangan');
    }
    public function barang()
    {
        return view('master/barang/barang');
    }
}
