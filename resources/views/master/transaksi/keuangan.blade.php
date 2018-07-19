@extends('main')
@section('content')

@include('master.transaksi.tambah')


<!-- partial -->
<div class="content-wrapper">

<div class="col-lg-12">	
	<nav aria-label="breadcrumb" role="navigation">
		<ol class="breadcrumb bg-dark">
			<li class="breadcrumb-item"><i class="fa fa-home"></i>&nbsp;<a href="#">Home</a></li>
			<li class="breadcrumb-item">Master</li>
			<li class="breadcrumb-item active" aria-current="page">Master Data Transaksi Keuangan</li>
		</ol>
	</nav>
</div>

	<div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Master Data Transaksi Keuangan</h4>
                  <div class="col-md-12 col-sm-12 col-xs-12" align="right" style="margin-bottom: 15px;">
                  	<button type="button" class="btn btn-info" data-toggle="modal" data-target="#tambah"><i class="fa fa-plus"></i>&nbsp;&nbsp;Tambah Data</button>
                  </div>
                  <div class="table-responsive">
	               <table class="table  table-hover table-bordered data-table" cellspacing="0" >
                          <thead class="bg-gradient-secondary">
                            <tr>
                              <th class="wd-15p">Kode</th>
                              <th class="wd-15p">Nama Transaksi</th>
                              <th class="wd-15p">Nama Sub Transaksi</th>
                              <th class="wd-15p">Cashtype Transaksi</th>
                              <th class="wd-15p">Akun 1</th>
                              <th class="wd-15p">Akun 2</th>
                              <th class="wd-15p">Aksi</th>
                            </tr>
                          </thead>

                          <tbody>
                            <tr>
                              <td>1111</td>
                              <td>Penjualan Alpha</td>
                              <td></td>
                              <td>Operating Cash Flow</td>
                              <td>Akun BCA P</td>
                              <td>Laba Berjalan</td>
                             <td class="text-center">
                               <div class="">    
                               <a href="#" class="btn btn-outline-info btn-sm" title="Edit"><i class="fa fa-pencil"></i></a>
                               <a href="#" class="btn btn-outline-danger btn-sm" title="Hapus"><i class="fa fa-trash"></i></a>
                              </div>                              
                              </td>
                            </tr>
                            <tr>
                              <td>1112</td>
                              <td>Penjualan Bravo</td>
                              <td></td>
                              <td>Operating Cash Flow</td>
                              <td>Akun BCA</td>
                              <td>Laba Berjalan</td>
                             <td class="text-center">
                               <div class="">    
                               <a href="#" class="btn btn-outline-info btn-sm" title="Edit"><i class="fa fa-pencil"></i></a>
                               <a href="#" class="btn btn-outline-danger btn-sm" title="Hapus"><i class="fa fa-trash"></i></a>
                              </div>                              
                              </td>
                            </tr>
                            <tr>
                              <td>1113</td>
                              <td>Penjualan Charlie</td>
                              <td></td>
                              <td>Operating Cash Flow</td>
                              <td>Akun Pusat</td>
                              <td>Laba Berjalan</td>
                             <td class="text-center">
                               <div class="">    
                               <a href="#" class="btn btn-outline-info btn-sm" title="Edit"><i class="fa fa-pencil"></i></a>
                               <a href="#" class="btn btn-outline-danger btn-sm" title="Hapus"><i class="fa fa-trash"></i></a>
                              </div>                           
                              </td>
                            </tr>
                          </tbody>

                         
            </table> 
	              </div>
                </div>
              </div>
            </div>
</div>
<!-- content-wrapper ends -->
@endsection
@section('extra_script')

@endsection