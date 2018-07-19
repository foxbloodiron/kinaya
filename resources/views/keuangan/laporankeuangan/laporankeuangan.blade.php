@extends('main')
@section('content')


<!-- partial -->
<div class="content-wrapper">
	<div class="col-lg-12">	
		<nav aria-label="breadcrumb" role="navigation">
			<ol class="breadcrumb bg-dark">
				<li class="breadcrumb-item"><i class="fa fa-home"></i>&nbsp;<a href="#">Home</a></li>
				<li class="breadcrumb-item">Keuangan</li>
				<li class="breadcrumb-item active" aria-current="page">Laporan Keuangan</li>
			</ol>
		</nav>
	</div>

	<div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
	                <div class="card-title">
                    <ul class="nav nav-tabs tab-solid  tab-solid-primary" role="tablist">
                      <li class="nav-item">
                        <a class="nav-link active" id="tab-6-3" data-toggle="tab" href="#aruskas" role="tab" aria-controls="aruskas" aria-selected="false">Arus Kas</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" id="tab-6-1" data-toggle="tab" href="#labarugi" role="tab" aria-controls="labarugi" aria-selected="true">Laba Rugi</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" id="tab-6-2" data-toggle="tab" href="#neraca" role="tab" aria-controls="neraca" aria-selected="false">Neraca</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" id="tab-6-4" data-toggle="tab" href="#jurnal" role="tab" aria-controls="jurnal" aria-selected="false">Jurnal</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" id="tab-6-5" data-toggle="tab" href="#bukubesar" role="tab" aria-controls="bukubesar" aria-selected="false">Buku Besar</a>
                      </li>
                    </ul>
                  </div>


                  <div class="tab-content tab-content-solid">

                    @include('keuangan.laporankeuangan.labarugi')

                    @include('keuangan.laporankeuangan.neraca')

                    @include('keuangan.laporankeuangan.aruskas')

                    @include('keuangan.laporankeuangan.jurnal')

                    @include('keuangan.laporankeuangan.bukubesar')
                  </div> <!-- end div tab-content -->
                </div>
            </div>
    </div>
</div>
<!-- content-wrapper ends -->
@endsection
@section('extra_script')

<script type="text/javascript">
  function myFunction()
  {
    var pilih_per = $('#pilih_per');
    var tahun     = $('.152mm');
    var bulan     = $('.122mm');
    var pilih_bln = $('#pilih_bln');
    var pilih_tahun = $('#pilih_tahun');

    if(pilih_per.val()=='bln')
    {
      bulan.removeClass('d-none');
    } else {
      bulan.addClass('d-none');
      pilih_bln.prop('selectedIndex', 0);
    }

    if(pilih_per.val()=='prd')
    {
      tahun.removeClass('d-none');
    } else {
      tahun.addClass('d-none');
      pilih_tahun.prop('selectedIndex', 0);
    }

  }
  function callMe()
  {
    var pilih_per_neraca = $('#pilih_per_neraca');
    var n_tahun     = $('.105mm');
    var n_bulan     = $('.90mm');
    var pilih_bln_neraca = $('#pilih_bln_neraca');
    var pilih_tahun_neraca = $('#pilih_tahun_neraca');

    if(pilih_per_neraca.val()=='bln')
    {
      n_bulan.removeClass('d-none');
    } else {
      n_bulan.addClass('d-none');
      pilih_bln_neraca.prop('selectedIndex', 0);
    }

    if(pilih_per_neraca.val()=='prd')
    {
      n_tahun.removeClass('d-none');
    } else {
      n_tahun.addClass('d-none');
      pilih_tahun_neraca.prop('selectedIndex', 0);
    }

  }
</script>

@endsection