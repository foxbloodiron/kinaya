<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ResponController extends Controller
{
    public function edit_dataperusahaan()
    {
    	return view('respon/edit_dataperusahaan/edit_dataperusahaan');
    }
    public function edit_outlet()
    {
    	return view('respon/edit_outlet/edit_outlet');
    }
    public function edit_promo()
    {
    	return view('respon/edit_promo/edit_promo');
    }
    public function layananreservasi()
    {
    	return view('respon/layananreservasi/layananreservasi');
    }
    public function layanankonsultasi()
    {
    	return view('respon/layanankonsultasi/layanankonsultasi');
    }
}
