<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AplikasiController extends Controller
{
    public function infoperusahaan()
    {
    	return view("aplikasi/infoperusahaan/infoperusahaan");
    }
    public function konsultasi()
    {
    	return view("aplikasi/konsultasi/konsultasi");
    }
    public function outlet()
    {
    	return view("aplikasi/outlet/outlet");
    }
    public function perawatan()
    {
    	return view("aplikasi/perawatan/perawatan");
    }
    public function pesanproduk()
    {
    	return view("aplikasi/pesanproduk/pesanproduk");
    }
    public function profil()
    {
    	return view("aplikasi/profil/profil");
    }
    public function promo()
    {
    	return view("aplikasi/promo/promo");
    }
    public function reservasi()
    {
    	return view("aplikasi/reservasi/reservasi");
    }
    
}
