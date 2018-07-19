@extends('main')
@section('content')

@include('keuangan.laporanhutangpiutang.tambah_laporanhutangpiutang')


<!-- partial -->
<div class="content-wrapper">
	<div class="col-lg-12">	
		<nav aria-label="breadcrumb" role="navigation">
			<ol class="breadcrumb bg-dark">
				<li class="breadcrumb-item"><i class="fa fa-home"></i>&nbsp;<a href="#">Home</a></li>
				<li class="breadcrumb-item">Keuangan</li>
				<li class="breadcrumb-item active" aria-current="page">Laporan Hutang Piutang</li>
			</ol>
		</nav>
	</div>

	<div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
	                <h4 class="card-title">Laporan Hutang Piutang</h4>
		                <div class="col-md-12 col-sm-12 col-xs-12" align="right" style="margin-bottom: 15px;">
		                  	<button type="button" class="btn btn-info" data-toggle="modal" data-target="#tambah"><i class="fa fa-plus"></i>&nbsp;&nbsp;Tambah Data</button>
		                </div>
                  <div class="table-responsive">
                          <table class="table table-hover table-bordered data-table" cellspacing="0">
                            <thead class="bg-gradient-secondary">
                                <tr>
                                  <th class="wd-15p" width="5%">Kode Barang</th>
                                  <th class="wd-15p">Nama Barang</th>
                                  <th class="wd-15p" width="5%">Satuan</th>
                                  <th class="wd-15p">Kategori Barang</th>
                                  <th width="15%">Aksi</th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  <td>BRG0218/001</td>
                                  <td>Tepung Beras</td>
                                  <td>Kg</td>
                                  <td></td>
                                  <td>
                                    <div class="">    
                                      <a href="#" class="btn btn-outline-info btn-sm" title="Edit"><i class="fa fa-pencil"></i></a>
                                      <a href="#" class="btn btn-outline-danger btn-sm" title="Hapus"><i class="fa fa-trash"></i></a>
                                    </div>  
                                  </td>
                                </tr>
                                <tr>
                                  <td>BRG0218/002</td>
                                  <td>Tepung Kanji</td>
                                  <td>Kg</td>
                                  <td></td>
                                  <td>
                                    <div class="">    
                                      <a href="#" class="btn btn-outline-info btn-sm" title="Edit"><i class="fa fa-pencil"></i></a>
                                      <a href="#" class="btn btn-outline-danger btn-sm" title="Hapus"><i class="fa fa-trash"></i></a>
                                    </div>  
                                  </td>
                                </tr>
                                <tr>
                                  <td>BRG0218/003</td>
                                  <td>Tepung Terigu</td>
                                  <td>Kg</td>
                                  <td></td>
                                  <td>
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