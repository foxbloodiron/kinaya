<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KeuanganController extends Controller
{
    public function a_roe()
    {
    	return view('keuangan/a_roe/a_roe');
    }
    public function laporankeuangan()
    {
    	return view('keuangan/laporankeuangan/laporankeuangan');
    }
    public function laporanhutangpiutang()
    {
    	return view('keuangan/laporanhutangpiutang/laporanhutangpiutang');
    }
    public function budgeting()
    {
    	return view('keuangan/budgeting/budgeting');
    }
    public function prosestransaksi()
    {
    	return view('keuangan/prosestransaksi/prosestransaksi');
    }
    public function a_netprofit()
    {
    	return view('keuangan/a_netprofit/a_netprofit');
    }
    public function a_pertumbuhanaset()
    {
    	return view('keuangan/a_pertumbuhanaset/a_pertumbuhanaset');
    }
    public function a_cashflow()
    {
    	return view('keuangan/a_cashflow/a_cashflow');
    }
    public function a_commonsize()
    {
    	return view('keuangan/a_commonsize/a_commonsize');
    }
    public function a_rasiokeuangan()
    {
    	return view('keuangan/a_rasiokeuangan/a_rasiokeuangan');
    }
    public function a_3bottomline()
    {
    	return view('keuangan/a_3bottomline/a_3bottomline');
    }
}
