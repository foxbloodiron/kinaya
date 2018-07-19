<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PenjualanController extends Controller
{
    public function datacustomer()
    {
    	return view('m_penjualan/datacustomer/datacustomer');
    }
    public function m_diskon()
    {
    	return view('m_penjualan/m_diskon/m_diskon');
    }
    public function m_penjualanonline()
    {
    	return view('m_penjualan/m_penjualanonline/m_penjualanonline');
    }
    public function masterpaket()
    {
    	return view('m_penjualan/masterpaket/masterpaket');
    }
    public function notapenjualan()
    {
        return view('m_penjualan/notapenjualan/notapenjualan');
    }
    public function notaperawatan()
    {
        return view('m_penjualan/notaperawatan/notaperawatan');
    }

}
