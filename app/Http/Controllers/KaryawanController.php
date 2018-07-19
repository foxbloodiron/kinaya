<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KaryawanController extends Controller
{
    public function cashbonkaryawan()
    {
    	return view('/m_karyawan/cashbonkaryawan/cashbonkaryawan');
    }
    public function absensikaryawan()
    {
    	return view('/m_karyawan/absensikaryawan/absensikaryawan');
    }
    public function datakaryawan()
    {
    	return view('/m_karyawan/datakaryawan/datakaryawan');
    }
    public function penggajian()
    {
    	return view('/m_karyawan/penggajian/penggajian');
    }
}
