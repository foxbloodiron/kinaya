<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StokController extends Controller
{
    public function opnamestock()
    {
    	return view('m_stok/opnamestock/opnamestock');
    }
    public function mutasistok()
    {
    	return view('m_stok/mutasistok/mutasistok');
    }
    public function pencatatanbarangkeluar()
    {
    	return view('m_stok/pencatatanbarangkeluar/pencatatanbarangkeluar');
    }
    public function penerimaanbarangmasuk()
    {
    	return view('m_stok/penerimaanbarangmasuk/penerimaanbarangmasuk');
    }
    public function terimareturnsuplier()
    {
    	return view('m_stok/terimareturnsuplier/terimareturnsuplier');
    }
    public function returnbarangsuplier()
    {
    	return view('m_stok/returnbarangsuplier/returnbarangsuplier');
    }
}
