<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PembelianController extends Controller
{
    public function rencana()
    {
    	return view('m_pembelian/rencana/rencana');
    }
    public function notapembelian()
    {
    	return view('m_pembelian/notapembelian/notapembelian');
    }
    public function purchaseorder()
    {
    	return view('m_pembelian/purchaseorder/purchaseorder');
    }
}
