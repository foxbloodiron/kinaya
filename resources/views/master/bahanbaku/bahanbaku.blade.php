@extends('main')
@section('content')

@include('master.bahanbaku.tambah')

<div class="content-breadcrumb">
	<h3>Master Data Bahan Baku</h3>
	<i class="fa fa-home"></i>&nbsp;&nbsp;<a href="{{url('/home')}}">Home</a>&nbsp;&nbsp;
	<i class="fa fa-angle-right"></i>&nbsp;&nbsp;<span>Master</span>&nbsp;&nbsp;
	<i class="fa fa-angle-right"></i>&nbsp;&nbsp;<span style="font-weight: bold;">Master Data Bahan Baku</span>
</div>
<!-- partial -->
<div class="content-wrapper">
	<div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  	<h4 class="card-title">Master Data Bahan Baku</h4>
                  	<div class="col-md-12 col-sm-12 col-xs-12" align="right" style="margin-bottom: 15px;">
                  		<button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#tambah"><i class="fa fa-plus"></i>&nbsp;&nbsp;Tambah Data</button>
                  	</div>
                  	<div class="table-responsive">
                        <table class="table table-hover table-bordered data-table" cellspacing="0">
                            <thead class="bg-gradient-secondary">
                                <tr>
                                  <th width="5%">ID</th>
                                  <th>Nama Bahan</th>
                                  <th width="5%">Jumlah</th>
                                  <th width="5%">Satuan</th>
                                  <th>Harga</th>
                                  <th width="10%">Aksi</th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  <td>BB-01</td>
                                  <td>Tepung Beras</td>
                                  <td>2</td>
                                  <td>Kg</td>
                                  <td>Rp. <?php echo number_format(2000,0,'','.'); ?>,-</td>
                                  <td>
                                    <div class="">    
                                      <a href="#" class="btn btn-outline-info btn-sm" title="Edit"><i class="fa fa-pencil"></i></a>
                                      <a href="#" class="btn btn-outline-danger btn-sm" title="Hapus"><i class="fa fa-trash-o"></i></a>
                                    </div>  
                                  </td>
                                </tr>
                                <tr>
                                  <td>BB-02</td>
                                  <td>Tepung Kanji</td>
                                  <td>3</td>
                                  <td>Kg</td>
                                  <td>Rp. <?php echo number_format(3000,0,'','.'); ?>,-</td>
                                  <td>
                                    <div class="">    
                                      <a href="#" class="btn btn-outline-info btn-sm" title="Edit"><i class="fa fa-pencil"></i></a>
                                      <a href="#" class="btn btn-outline-danger btn-sm" title="Hapus"><i class="fa fa-trash-o"></i></a>
                                    </div>  
                                  </td>
                                </tr>
                                <tr>
                                  <td>BB-03</td>
                                  <td>Gula</td>
                                  <td>1</td>
                                  <td>Kg</td>
                                  <td>Rp. <?php echo number_format(10000,0,'','.'); ?>,-</td>
                                  <td>
                                    <div class="">    
                                      <a href="#" class="btn btn-outline-info btn-sm" title="Edit"><i class="fa fa-pencil"></i></a>
                                      <a href="#" class="btn btn-outline-danger btn-sm" title="Hapus"><i class="fa fa-trash-o"></i></a>
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