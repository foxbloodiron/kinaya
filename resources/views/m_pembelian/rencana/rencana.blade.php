@extends('main')
@section('content')

@include('m_pembelian.rencana.tambah')


<!-- partial -->
<div class="content-wrapper">
  <div class="col-lg-12">
    <nav aria-label="breadcrumb" role="navigation">
      <ol class="breadcrumb bg-dark">
        <li class="breadcrumb-item"><i class="fa fa-home"></i>&nbsp;<a href="#">Home</a></li>
        <li class="breadcrumb-item">Manajemen Pembelian</li>
        <li class="breadcrumb-item active" aria-current="page">Rencana Pembelian</li>
      </ol>
    </nav>
  </div>

  <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">

                  <div class="card-title">
                    <ul class="nav nav-tabs tab-solid  tab-solid-primary" role="tablist">
                      <li class="nav-item">
                        <a class="nav-link active" id="tab-6-1" data-toggle="tab" href="#daftar" role="tab" aria-controls="daftar" aria-selected="true"><i class="fa fa-list"></i>Daftar Rencana Pembelian</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" id="tab-6-2" data-toggle="tab" href="#history" role="tab" aria-controls="history" aria-selected="false"><i class="mdi mdi-history"></i>History Rencana Pembelian</a>
                      </li>
                      <!-- <li class="nav-item">
                        <a class="nav-link" id="tab-6-3" data-toggle="tab" href="#tab-ke-3" role="tab" aria-controls="tab-ke-3" aria-selected="false"><i class="mdi mdi-message-text-outline"></i>Contact</a>
                      </li> -->
                    </ul>
                  </div>

                      <div class="col-md-12 col-sm-12 col-xs-12" align="right" style="margin-bottom: 15px;">
                        <button type="button" class="btn btn-info" data-toggle="modal" data-target="#tambah"><i class="fa fa-plus"></i>&nbsp;&nbsp;Tambah Data</button>
                      </div>

                  <div class="tab-content tab-content-solid">
                    <div class="tab-pane fade show active" id="daftar" role="tabpanel" aria-labelledby="tab-6-1">

                      <div class="table-responsive">
                        <table class="table data-table table-hover table-bordered" cellspacing="0">
                          <thead class="bg-gradient-secondary">
                              <tr>
                                <th class="wd-15p">No</th>
                                <th class="wd-15p">Nama Barang</th>
                                <th class="wd-20p">Suplier</th>
                                <th class="wd-15p">Permintaan Kuantitas</th>
                                <th class="wd-10p">Kuantitas Disetujui</th>
                                <th class="wd-15p">Status</th>
                                <th class="wd-15p">Aksi</th>
                              </tr>
                            </thead>
                            <tbody>
                                <tr>
                                  <td>1</td>
                                  <td>Tepung Terigu</td>
                                  <td><i class="fa fa-check"></i></td>
                                  <td>10</td>
                                  <td></td>
                                  <td>
                                    <span class="badge badge-info">Menunggu</span>
                                  </td>
                                  <td>
                                    <div class="">    
                                      <a href="#" class="btn btn-outline-info btn-sm" title="Setuju"><i class="fa fa-check"></i></a>
                                      <a href="#" class="btn btn-outline-danger btn-sm" title="Pending"><i class="fa fa-times"></i></a>
                                    </div> 
                                  </td>
                                </tr>
                                <tr>
                                  <td>2</td>
                                  <td>Tepung Beras</td>
                                  <td><i class="fa fa-times"></i></td>
                                  <td>10</td>
                                  <td></td>
                                  <td>
                                    <span class="badge badge-info">Menunggu</span>
                                  </td>
                                  <td>
                                    <div class="">    
                                      <a href="#" class="btn btn-outline-info btn-sm" title="Setuju"><i class="fa fa-check"></i></a>
                                      <a href="#" class="btn btn-outline-danger btn-sm" title="Pending"><i class="fa fa-times"></i></a>
                                    </div> 
                                  </td>
                                </tr>
                                <tr>
                                  <td>3</td>
                                  <td>Tepung Jagung</td>
                                  <td><i class="fa fa-check"></i></td>
                                  <td>10</td>
                                  <td></td>
                                  <td>
                                    <span class="badge badge-warning">Dapat di edit</span>
                                  </td>
                                  <td>
                                    <div class="">    
                                      <a href="#" class="btn btn-outline-info btn-sm" title="Setuju"><i class="fa fa-check"></i></a>
                                      <a href="#" class="btn btn-outline-danger btn-sm" title="Pending"><i class="fa fa-times"></i></a>
                                    </div> 
                                  </td>
                                </tr>
                            </tbody>
                                       
                          </table> 
                      </div>

                    </div> <!-- end div daftar -->

                    <div class="tab-pane fade" id="history" role="tabpanel" aria-labelledby="tab-6-2">
                      <div class="table-responsive">
                        <table class="table table-hover table-bordered data-table" cellspacing="0">
                          <thead class="bg-gradient-secondary">
                            <tr>
                              <th class="wd-15p">No</th>
                              <th class="wd-15p">Nama Barang</th>
                              <th class="wd-20p">Suplier</th>
                              <th class="wd-15p">Permintaan Kuantitas</th>
                              <th class="wd-10p">Kuantitas Disetujui</th>
                              <th class="wd-15p">Status</th>
                              <th class="wd-15p">Aksi</th>
                            </tr>
                          </thead>

                          <tbody>
                            <tr>
                                <td>1</td>
                                <td>Tepung Terigu</td>
                                <td><i class="fa fa-check"></i></td>
                                <td>10</td>
                                <td></td>
                                <td>
                                  <span class="badge badge-success">Disetujui</span>
                                </td>
                                <td align="center">
                                 .. 
                                </td>
                              </tr>
                              <tr>
                                <td>2</td>
                                <td>Tepung Beras</td>
                                <td><i class="fa fa-times"></i></td>
                                <td>10</td>
                                <td></td>
                                <td>
                                  <span class="badge badge-success">Disetujui</span>
                                </td>
                                <td align="center">
                                  ..
                                </td>
                              </tr>
                              <tr>
                                <td>3</td>
                                <td>Tepung Jagung</td>
                                <td><i class="fa fa-check"></i></td>
                                <td>10</td>
                                <td></td>
                                <td>
                                  <span class="badge badge-success">Disetujui</span>
                                </td>
                                <td align="center">
                                  ..
                                </td>
                              </tr>

                          </tbody>
                        
                        </table> 
                      </div>
                    </div>
                    <div class="tab-pane fade" id="tab-ke-3" role="tabpanel" aria-labelledby="tab-6-3">
                      <!-- content -->
                    </div>

                  </div> <!-- end div tab-content -->

                </div><!-- end div card --> 
              </div>
            </div>
</div>
<!-- content-wrapper ends -->
@endsection
@section('extra_script')

@endsection