<!-- partial:partials/_navbar.html -->
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
        <a class="navbar-brand brand-logo" href="{{url('/home')}}"><!-- <img src="{{asset('assets/images/logo.svg')}}" alt="logo"/> --><h1 style="margin:auto; color: darkviolet !important;">Kinaya</h1></a>
        <a class="navbar-brand brand-logo-mini" href="{{url('/home')}}"><!-- <img src="{{asset('assets/images/logo-mini.svg')}}" alt="logo"/> --><h1 style="margin:auto; ">K</h1></a>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-stretch">
        <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
          <span class="mdi mdi-menu"></span>
        </button>
        <div class="search-field ml-4 d-none d-md-block">
          <form class="d-flex align-items-stretch h-100" action="#">
            <div class="input-group">
              <input id="filterInput" type="text" class="form-control bg-transparent border-0" onchange="myFunction()" onfocus="myFunction()" onkeyup="myFunction()" placeholder="Cari Menu">
              <button id="btn-reset" type="button" class="btn bg-transparent px-0 d-none" onclick="btnReset()" style="cursor: pointer;"><i class="fa fa-times"></i></button>
             <!--  <div class="input-group-btn">
                <button type="button" class="btn bg-transparent dropdown-toggle px-0" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="mdi mdi-earth"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-right">
                  <a class="dropdown-item" href="#">Today</a>
                  <a class="dropdown-item" href="#">This week</a>
                  <a class="dropdown-item" href="#">This month</a>
                  <div role="separator" class="dropdown-divider"></div>
                  <a class="dropdown-item" href="#">Month and older</a>
                </div>
              </div> -->
              <div class="input-group-addon bg-transparent border-0 search-button"  onclick="javascript : document.getElementById('filterInput').focus();" style="cursor: pointer;">
                <button type="button" class="btn btn-sm bg-transparent px-0"  style="cursor: pointer;">
                  <i class="mdi mdi-magnify"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
        <ul class="navbar-nav navbar-nav-right">
          <li class="nav-item d-none d-lg-block full-screen-link">
            <a class="nav-link">
              <i class="mdi mdi-fullscreen" id="fullscreen-button"></i>
            </a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link count-indicator dropdown-toggle" id="messageDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
              <i class="mdi mdi-email-outline"></i>
              <span class="count"></span>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="messageDropdown">
              <h6 class="p-3 mb-0">Messages</h6>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                    <img src="{{asset('assets/images/faces/face4.jpg')}}" alt="image" class="profile-pic">
                </div>
                <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                  <h6 class="preview-subject ellipsis mb-1 font-weight-normal">Mark send you a message</h6>
                  <p class="text-gray mb-0">
                    1 Minutes ago
                  </p>
                </div>
              </a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                    <img src="{{asset('assets/images/faces/face2.jpg')}}" alt="image" class="profile-pic">
                </div>
                <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                  <h6 class="preview-subject ellipsis mb-1 font-weight-normal">Cregh send you a message</h6>
                  <p class="text-gray mb-0">
                    15 Minutes ago
                  </p>
                </div>
              </a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                    <img src="{{asset('assets/images/faces/face3.jpg')}}" alt="image" class="profile-pic">
                </div>
                <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                  <h6 class="preview-subject ellipsis mb-1 font-weight-normal">Profile picture updated</h6>
                  <p class="text-gray mb-0">
                    18 Minutes ago
                  </p>
                </div>
              </a>
              <div class="dropdown-divider"></div>
              <h6 class="p-3 mb-0 text-center">4 new messages</h6>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#" data-toggle="dropdown">
              <i class="mdi mdi-bell-outline"></i>
              <span class="count"></span>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="notificationDropdown">
              <h6 class="p-3 mb-0">Notifications</h6>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <div class="preview-icon bg-success">
                    <i class="mdi mdi-calendar"></i>
                  </div>
                </div>
                <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                  <h6 class="preview-subject font-weight-normal mb-1">Event today</h6>
                  <p class="text-gray ellipsis mb-0">
                    Just a reminder that you have an event today
                  </p>
                </div>
              </a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <div class="preview-icon bg-warning">
                    <i class="mdi mdi-settings"></i>
                  </div>
                </div>
                <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                  <h6 class="preview-subject font-weight-normal mb-1">Settings</h6>
                  <p class="text-gray ellipsis mb-0">
                    Update dashboard
                  </p>
                </div>
              </a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <div class="preview-icon bg-info">
                    <i class="mdi mdi-link-variant"></i>
                  </div>
                </div>
                <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                  <h6 class="preview-subject font-weight-normal mb-1">Launch Admin</h6>
                  <p class="text-gray ellipsis mb-0">
                    New admin wow!
                  </p>
                </div>
              </a>
              <div class="dropdown-divider"></div>
              <h6 class="p-3 mb-0 text-center">See all notifications</h6>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle nav-profile" id="profileDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
              <img src="{{asset('assets/images/faces/face1.jpg')}}" alt="image">
              <span class="d-none d-lg-inline">{{Auth::user()->name}}</span>
            </a>
            <div class="dropdown-menu navbar-dropdown w-100" aria-labelledby="profileDropdown">
              <a class="dropdown-item" href="#">
                <i class="mdi mdi-cached mr-2 text-success"></i>
                Activity Log
              </a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                <i class="mdi mdi-logout mr-2 text-primary"></i>
                Signout
              </a>
            </div>
          </li>
          <li class="nav-item nav-logout d-none d-lg-block">
            <a class="nav-link" href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
              <i class="mdi mdi-power"></i>
            </a>
          </li>
          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
              {{ csrf_field() }}
          </form>
          <li class="nav-item nav-settings d-none d-lg-block">
            <a class="nav-link" href="#">
              <i class="mdi mdi-format-line-spacing"></i>
            </a>
          </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
        <span class="mdi mdi-menu"></span>
      </button>
      </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <div class="row row-offcanvas row-offcanvas-right">
        <!-- partial:partials/_sidebar.html -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
          <ul class="nav" id="ayaysir">
            <li class="nav-item {{
            Request::is('home') ? 'active' : '' 
            || Request::is('home/*') ? 'active' : '' }}">
              <a class="nav-link" href="{{url('/home')}}">
                <span class="menu-title">Dashboard</span>
                <span class="menu-sub-title">( 2 new updates )</span>
                <i class="mdi mdi-home menu-icon"></i>
              </a>
            </li>
            <li class="nav-item {{
            Request::is('master') ? 'active' : '' 
            || Request::is('master/*') ? 'active' : '' }}">
              <a class="nav-link" data-toggle="collapse" href="#master" aria-expanded="false" aria-controls="ui-basic">
                <span class="menu-title">Master</span>
                <span class="d-none">
                  Master Data Suplier
                  Master Data Customer
                  Master Data Pegawai
                  Master Data Akun Keuangan
                  Master Data Transaksi Keuangan
                  Master Data Barang
                </span>
                <i class="menu-arrow"></i>
                <i class="mdi mdi-crosshairs-gps menu-icon"></i>
              </a>
              <div class="collapse {{
              Request::is('master') ? 'show' : '' 
              || Request::is('master/*') ? 'show' : '' }}" id="master">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link {{
                    Request::is('master/suplier/suplier') ? 'active' : '' 
                    || Request::is('master/suplier/*') ? 'active' : '' }}" href="{{url('master/suplier/suplier')}}">Master Data Suplier</a></li>
                  <li class="nav-item"> <a class="nav-link {{
                    Request::is('master/customer/cust') ? 'active' : '' 
                    || Request::is('master/customer/*') ? 'active' : '' }}" href="{{url('master/customer/cust')}}">Master Data Customer</a></li>
                  <li class="nav-item"> <a class="nav-link {{
                    Request::is('master/pegawai/pegawai') ? 'active' : '' 
                    || Request::is('master/pegawai/*') ? 'active' : '' }}" href="{{url('master/pegawai/pegawai')}}">Master Data Pegawai</a></li>
                  <li class="nav-item"> <a class="nav-link {{
                    Request::is('master/akun/a_keuangan') ? 'active' : '' 
                    || Request::is('master/akun/*') ? 'active' : '' }}" href="{{url('master/akun/a_keuangan')}}">Master Data Akun Keuangan</a></li>
                  <li class="nav-item"> <a class="nav-link {{
                    Request::is('master/transaksi/t_keuangan') ? 'active' : '' 
                    || Request::is('master/transaksi/*') ? 'active' : '' }}" href="{{url('master/transaksi/t_keuangan')}}">Master Data Transaksi<br> Keuangan</a></li>
                  <li class="nav-item"> <a class="nav-link {{
                    Request::is('master/barang/barang') ? 'active' : '' 
                    || Request::is('master/barang/*') ? 'active' : '' }}" href="{{url('master/barang/barang')}}">Master Data Barang</a></li>
                </ul>
                </div>
            </li>
            <li class="nav-item {{
                    Request::is('m_pembelian/') ? 'active' : '' 
                    || Request::is('m_pembelian/*') ? 'active' : '' }}">
              <a class="nav-link" data-toggle="collapse" href="#m_pembelian" aria-expanded="false" aria-controls="ui-basic">
                <span class="menu-title">Manajemen Pembelian</span>
                <span class="d-none">
                  Rencana Pembelian
                  Purchase Order
                  Nota Pembelian
                </span>
                <i class="menu-arrow"></i>
                <i class="mdi mdi-credit-card menu-icon"></i>
              </a>
              <div class="collapse {{
                    Request::is('m_pembelian') ? 'show' : '' 
                    || Request::is('m_pembelian/*') ? 'show' : '' }}" id="m_pembelian">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link {{
                    Request::is('m_pembelian/rencana/rencana') ? 'active' : '' 
                    || Request::is('m_pembelian/rencana/*') ? 'active' : '' }}" href="{{url('m_pembelian/rencana/rencana')}}">Rencana Pembelian<span class="d-none">Manajemen Pembelian</span></a></li>
                  <li class="nav-item"> <a class="nav-link {{
                    Request::is('m_pembelian/purchaseorder/purchaseorder') ? 'active' : '' 
                    || Request::is('m_pembelian/purchaseorder/*') ? 'active' : '' }}" href="{{url('m_pembelian/purchaseorder/purchaseorder')}}">Purchase Order<span class="d-none">Manajemen Pembelian</span></a></li>
                  <li class="nav-item"> <a class="nav-link {{
                    Request::is('m_pembelian/notapembelian/notapembelian') ? 'active' : '' 
                    || Request::is('m_pembelian/notapembelian/*') ? 'active' : '' }}" href="{{url('m_pembelian/notapembelian/notapembelian')}}">Nota Pembelian<span class="d-none">Manajemen Pembelian</span></a></li>
                </ul>
                </div>
            </li>
            <li class="nav-item {{
                    Request::is('m_stok') ? 'active' : '' 
                    || Request::is('m_stok/*') ? 'active' : '' }}">
              <a class="nav-link" data-toggle="collapse" href="#m_stock" aria-expanded="false" aria-controls="ui-basic">
                <span class="menu-title">Manajemen Stok</span>
                <span class="d-none">
                  Penerimaan Barang Masuk
                  Pencatatan Barang Keluar
                  Return Barang Suplier
                  Terima Return Suplier
                  Mutasi Stok Antar Barang
                  Opname Stock
                </span>
                <i class="menu-arrow"></i>
                <i class="mdi mdi-arrow-up-bold-box menu-icon"></i>
              </a>
              <div class="collapse {{
                    Request::is('m_stok/') ? 'show' : '' 
                    || Request::is('m_stok/*') ? 'show' : '' }}" id="m_stock">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link {{
                    Request::is('m_stok/penerimaanbarangmasuk/penerimaanbarangmasuk') ? 'active' : '' 
                    || Request::is('m_stok/penerimaanbarangmasuk/*') ? 'active' : '' }}" href="{{url('m_stok/penerimaanbarangmasuk/penerimaanbarangmasuk')}}">Penerimaan Barang Masuk<span class="d-none">Manajemen Stok</span></a></li>
                  <li class="nav-item"> <a class="nav-link {{
                    Request::is('m_stok/pencatatanbarangkeluar/pencatatanbarangkeluar') ? 'active' : '' 
                    || Request::is('m_stok/pencatatanbarangkeluar/*') ? 'active' : '' }}" href="{{url('m_stok/pencatatanbarangkeluar/pencatatanbarangkeluar')}}">Pencatatan Barang Keluar<span class="d-none">Manajemen Stok</span></a></li>
                  <li class="nav-item"> <a class="nav-link {{
                    Request::is('m_stok/returnbarangsuplier/returnbarangsuplier') ? 'active' : '' 
                    || Request::is('m_stok/returnbarangsuplier/*') ? 'active' : '' }}" href="{{url('m_stok/returnbarangsuplier/returnbarangsuplier')}}">Return Barang Suplier<span class="d-none">Manajemen Stok</span></a></li>
                  <li class="nav-item"> <a class="nav-link {{
                    Request::is('m_stok/terimareturnsuplier/terimareturnsuplier') ? 'active' : '' 
                    || Request::is('m_stok/terimareturnsuplier/*') ? 'active' : '' }}" href="{{url('m_stok/terimareturnsuplier/terimareturnsuplier')}}">Terima Return Suplier<span class="d-none">Manajemen Stok</span></a></li>
                  <li class="nav-item"> <a class="nav-link {{
                    Request::is('m_stok/mutasistok/mutasistok') ? 'active' : '' 
                    || Request::is('m_stok/mutasistok/*') ? 'active' : '' }}" href="{{url('m_stok/mutasistok/mutasistok')}}">Mutasi Stok Antar Barang<span class="d-none">Manajemen Stok</span></a></li>
                  <li class="nav-item"> <a class="nav-link {{
                    Request::is('m_stok/opnamestock/opnamestock') ? 'active' : '' 
                    || Request::is('m_stok/opnamestock/*') ? 'active' : '' }}" href="{{url('m_stok/opnamestock/opnamestock')}}">Opname Stock<span class="d-none">Manajemen Stok</span></a></li>
                </ul>
                </div>
            </li>
            <li class="nav-item {{
                    Request::is('m_penjualan/') ? 'active' : '' 
                    || Request::is('m_penjualan/*') ? 'active' : '' }}">
              <a class="nav-link" data-toggle="collapse" href="#m_penjualan" aria-expanded="false" aria-controls="ui-basic">
                <span class="menu-title">Manajemen Penjualan</span>
                <span class="d-none">
                  Data Customer
                  Master Paket
                  Nota Penjualan
                  Nota Perawatan
                  Manajemen Penjualan Online
                  Manajemen Diskon
                </span>
                <i class="menu-arrow"></i>
                <i class="mdi mdi-truck menu-icon"></i>
              </a>
              <div class="collapse {{
                    Request::is('m_penjualan/') ? 'show' : '' 
                    || Request::is('m_penjualan/*') ? 'show' : '' }}"" id="m_penjualan">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link {{
                    Request::is('m_penjualan/datacustomer/datacustomer') ? 'active' : '' 
                    || Request::is('m_penjualan/datacustomer/*') ? 'active' : '' }}" href="{{url('m_penjualan/datacustomer/datacustomer')}}">Data Customer<span class="d-none">Manajemen Penjualan</span></a></li>
                  <li class="nav-item"> <a class="nav-link {{
                    Request::is('m_penjualan/masterpaket/masterpaket') ? 'active' : '' 
                    || Request::is('m_penjualan/masterpaket/*') ? 'active' : '' }}" href="{{url('m_penjualan/masterpaket/masterpaket')}}">Master Paket<span class="d-none">Manajemen Penjualan</span></a></li>
                  <li class="nav-item"> <a class="nav-link {{
                    Request::is('m_penjualan/notapenjualan/notapenjualan') ? 'active' : '' 
                    || Request::is('m_penjualan/notapenjualan/*') ? 'active' : '' }}" href="{{url('m_penjualan/notapenjualan/notapenjualan')}}">Nota Penjualan<span class="d-none">Manajemen Penjualan</span></a></li>
                  <li class="nav-item"> <a class="nav-link {{
                    Request::is('m_penjualan/notaperawatan/notaperawatan') ? 'active' : '' 
                    || Request::is('m_penjualan/notaperawatan/*') ? 'active' : '' }}" href="{{url('m_penjualan/notaperawatan/notaperawatan')}}">Nota Perawatan<span class="d-none">Manajemen Penjualan</span></a></li>
                  <li class="nav-item"> <a class="nav-link {{
                    Request::is('m_penjualan/m_penjualanonline/m_penjualanonline') ? 'active' : '' 
                    || Request::is('m_penjualan/m_penjualanonline/*') ? 'active' : '' }}" href="{{url('m_penjualan/m_penjualanonline/m_penjualanonline')}}">Manajemen Penjualan<br> Online<span class="d-none">Manajemen Penjualan</span></a></li>
                  <li class="nav-item"> <a class="nav-link {{
                    Request::is('m_penjualan/m_diskon/m_diskon') ? 'active' : '' 
                    || Request::is('m_penjualan/m_diskon/*') ? 'active' : '' }}" href="{{url('m_penjualan/m_diskon/m_diskon')}}">Manajemen Diskon<span class="d-none">Manajemen Penjualan</span></a></li>
                </ul>
                </div>
            </li>
            <li class="nav-item {{
                    Request::is('aplikasi/') ? 'active' : '' 
                    || Request::is('aplikasi/*') ? 'active' : '' }}">
              <a class="nav-link" data-toggle="collapse" href="#apk_cus" aria-expanded="false" aria-controls="ui-basic">
                <span class="menu-title">Aplikasi Customer Apk / Ios</span>
                <span class="d-none">
                  Profil
                  Info Perusahaan
                  Outlet
                  Promo
                  Reservasi
                  Konsultasi
                  Perawatan
                  Pesan Produk
                </span>
                <i class="menu-arrow"></i>
                <i class="mdi mdi-tablet-android menu-icon"></i>
              </a>
              <div class="collapse {{
                    Request::is('aplikasi/') ? 'show' : '' 
                    || Request::is('aplikasi/*') ? 'show' : '' }}" id="apk_cus">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link {{
                    Request::is('aplikasi/profil/profil') ? 'active' : '' 
                    || Request::is('aplikasi/profil/*') ? 'active' : '' }}" href="{{url('aplikasi/profil/profil')}}">Profil<span class="d-none">Aplikasi Customer Apk / Ios</span></a></li>
                  <li class="nav-item"> <a class="nav-link {{
                    Request::is('aplikasi/infoperusahaan/infoperusahaan') ? 'active' : '' 
                    || Request::is('aplikasi/infoperusahaan/*') ? 'active' : '' }}" href="{{url('aplikasi/infoperusahaan/infoperusahaan')}}">Info Perusahaan<span class="d-none">Aplikasi Customer Apk / Ios</span></a></li>
                  <li class="nav-item"> <a class="nav-link {{
                    Request::is('aplikasi/outlet/outlet') ? 'active' : '' 
                    || Request::is('aplikasi/outlet/*') ? 'active' : '' }}" href="{{url('aplikasi/outlet/outlet')}}">Outlet<span class="d-none">Aplikasi Customer Apk / Ios</span></a></li>
                  <li class="nav-item"> <a class="nav-link {{
                    Request::is('aplikasi/promo/promo') ? 'active' : '' 
                    || Request::is('aplikasi/promo/*') ? 'active' : '' }}" href="{{url('aplikasi/promo/promo')}}">Promo<span class="d-none">Aplikasi Customer Apk / Ios</span></a></li>
                  <li class="nav-item"> <a class="nav-link {{
                    Request::is('aplikasi/reservasi/reservasi') ? 'active' : '' 
                    || Request::is('aplikasi/reservasi/*') ? 'active' : '' }}" href="{{url('aplikasi/reservasi/reservasi')}}">Reservasi<span class="d-none">Aplikasi Customer Apk / Ios</span></a></li>
                  <li class="nav-item"> <a class="nav-link {{
                    Request::is('aplikasi/konsultasi/konsultasi') ? 'active' : '' 
                    || Request::is('aplikasi/konsultasi/*') ? 'active' : '' }}" href="{{url('aplikasi/konsultasi/konsultasi')}}">Konsultasi<span class="d-none">Aplikasi Customer Apk / Ios</span></a></li>
                  <li class="nav-item"> <a class="nav-link {{
                    Request::is('aplikasi/perawatan/perawatan') ? 'active' : '' 
                    || Request::is('aplikasi/perawatan/*') ? 'active' : '' }}" href="{{url('aplikasi/perawatan/perawatan')}}">Perawatan<span class="d-none">Aplikasi Customer Apk / Ios</span></a></li>
                  <li class="nav-item"> <a class="nav-link {{
                    Request::is('aplikasi/pesanproduk/pesanproduk') ? 'active' : '' 
                    || Request::is('aplikasi/pesanproduk/*') ? 'active' : '' }}" href="{{url('aplikasi/pesanproduk/pesanproduk')}}">Pesan Produk<span class="d-none">Aplikasi Customer Apk / Ios</span></a></li>
                </ul>
                </div>
            </li>
            <li class="nav-item {{
                    Request::is('respon/') ? 'active' : '' 
                    || Request::is('respon/*') ? 'active' : '' }}">
              <a class="nav-link" data-toggle="collapse" href="#r_pelayanan" aria-expanded="false" aria-controls="ui-basic">
                <span class="menu-title">Respon Pelayanan Publik</span>
                <span class="d-none">
                  Edit Data Perusahaan
                  Edit Outlet
                  Edit Promo
                  Layanan Reservasi
                  Layanan Konsultasi
                </span>
                <i class="menu-arrow"></i>
                <i class="mdi mdi-earth menu-icon"></i>
              </a>
              <div class="collapse {{
                    Request::is('respon/') ? 'show' : '' 
                    || Request::is('respon/*') ? 'show' : '' }}" id="r_pelayanan">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link {{
                    Request::is('respon/edit_perusahaan/edit_perusahaan') ? 'active' : '' 
                    || Request::is('respon/edit_perusahaan/*') ? 'active' : '' }}" href="{{url('respon/edit_dataperusahaan/edit_dataperusahaan')}}">Edit Data Perusahaan <span class="d-none">Respon Pelayanan Publik</span></a></li>
                  <li class="nav-item"> <a class="nav-link {{
                    Request::is('respon/edit_outlet/edit_outlet') ? 'active' : '' 
                    || Request::is('respon/edit_outlet/*') ? 'active' : '' }}" href="{{url('respon/edit_outlet/edit_outlet')}}">Edit Outlet <span class="d-none">Respon Pelayanan Publik</span></a></li>
                  <li class="nav-item"> <a class="nav-link {{
                    Request::is('respon/edit_promo/edit_promo') ? 'active' : '' 
                    || Request::is('respon/edit_promo/*') ? 'active' : '' }}" href="{{url('respon/edit_promo/edit_promo')}}">Edit Promo <span class="d-none">Respon Pelayanan Publik</span></a></li>
                  <li class="nav-item"> <a class="nav-link {{
                    Request::is('respon/layananreservasi/layananreservasi') ? 'active' : '' 
                    || Request::is('respon/layananreservasi/*') ? 'active' : '' }}" href="{{url('respon/layananreservasi/layananreservasi')}}">Layanan Reservasi <span class="d-none">Respon Pelayanan Publik</span></a></li>
                  <li class="nav-item"> <a class="nav-link {{
                    Request::is('respon/layanankonsultasi/layanankonsultasi') ? 'active' : '' 
                    || Request::is('respon/layanankonsultasi/*') ? 'active' : '' }}" href="{{url('respon/layanankonsultasi/layanankonsultasi')}}">Layanan Konsultasi <span class="d-none">Respon Pelayanan Publik</span></a></li>
                </ul>
                </div>
            </li>
            <li class="nav-item {{
                    Request::is('keuangan/') ? 'active' : '' 
                    || Request::is('keuangan/*') ? 'active' : '' }}">
              <a class="nav-link" data-toggle="collapse" href="#keuangan" aria-expanded="false" aria-controls="ui-basic">
                <span class="menu-title">Keuangan</span>
                <span class="d-none">Budgeting
                Proses Transaksi
                Laporan Hutang Piutang
                Laporang (Jurnal, Buku Besar, Neraca, Laba Rugi, Arus Kas)
                Analisa Net Profit Terhadap >OCF
                Analisa Pertumbuhan Aset
                Analisa Cashflow
                Analisa Common Size dan Index
                Analisa Rasio Keuangan
                Analisa Three Bottom Line
                Analisa ROE
                </span>
                <i class="menu-arrow"></i>
                <i class="mdi mdi-currency-usd menu-icon"></i>
              </a>
              <div class="collapse {{
                    Request::is('keuangan/') ? 'show' : '' 
                    || Request::is('keuangan/*') ? 'show' : '' }}" id="keuangan">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link {{
                    Request::is('keuangan/budgeting/budgeting') ? 'active' : '' 
                    || Request::is('keuangan/budgeting/*') ? 'active' : '' }}" href="{{url('keuangan/budgeting/budgeting')}}">Budgeting<span class="d-none">Keuangan</span></a></li>
                  <li class="nav-item"> <a class="nav-link {{
                    Request::is('keuangan/prosestransaksi/prosestransaksi') ? 'active' : '' 
                    || Request::is('keuangan/prosestransaksi/*') ? 'active' : '' }}" href="{{url('keuangan/prosestransaksi/prosestransaksi')}}">Proses Transaksi<span class="d-none">Keuangan</span></a></li>
                  <li class="nav-item"> <a class="nav-link {{
                    Request::is('keuangan/laporanhutangpiutang/laporanhutangpiutang') ? 'active' : '' 
                    || Request::is('keuangan/laporanhutangpiutang/*') ? 'active' : '' }}" href="{{url('keuangan/laporanhutangpiutang/laporanhutangpiutang')}}">Laporan Hutang Piutang<span class="d-none">Keuangan</span></a></li>
                  <li class="nav-item"> <a class="nav-link {{
                    Request::is('keuangan/laporankeuangan/laporankeuangan') ? 'active' : '' 
                    || Request::is('keuangan/laporankeuangan/*') ? 'active' : '' }}" href="{{url('keuangan/laporankeuangan/laporankeuangan')}}">Laporan (Jurnal, Buku Besar<br>, Neraca, Laba Rugi,<br> Arus Kas)<span class="d-none">Keuangan</span></a></li>
                  <li class="nav-item"> <a class="nav-link {{
                    Request::is('keuangan/a_netprofit/a_netprofit') ? 'active' : '' 
                    || Request::is('keuangan/a_netprofit/*') ? 'active' : '' }}" href="{{url('keuangan/a_netprofit/a_netprofit')}}">Analisa Net Profit Terhadap <br>OCF<span class="d-none">Keuangan</span></a></li>
                  <li class="nav-item"> <a class="nav-link {{
                    Request::is('keuangan/a_pertumbuhanaset/a_pertumbuhanaset') ? 'active' : '' 
                    || Request::is('keuangan/a_pertumbuhanaset/*') ? 'active' : '' }}" href="{{url('keuangan/a_pertumbuhanaset/a_pertumbuhanaset')}}">Analisa Pertumbuhan Aset<span class="d-none">Keuangan</span></a></li>
                  <li class="nav-item"> <a class="nav-link {{
                    Request::is('keuangan/a_cashflow/a_cashflow') ? 'active' : '' 
                    || Request::is('keuangan/a_cashflow/*') ? 'active' : '' }}" href="{{url('keuangan/a_cashflow/a_cashflow')}}">Analisa Cashflow<span class="d-none">Keuangan</span></a></li>
                  <li class="nav-item"> <a class="nav-link {{
                    Request::is('keuangan/a_commonsize/a_commonsize') ? 'active' : '' 
                    || Request::is('keuangan/a_commonsize/*') ? 'active' : '' }}" href="{{url('keuangan/a_commonsize/a_commonsize')}}">Analisa Common Size dan <br> Index<span class="d-none">Keuangan</span></a></li>
                  <li class="nav-item"> <a class="nav-link {{
                    Request::is('keuangan/a_rasiokeuangan/a_rasiokeuangan') ? 'active' : '' 
                    || Request::is('keuangan/a_rasiokeuangan/*') ? 'active' : '' }}" href="{{url('keuangan/a_rasiokeuangan/a_rasiokeuangan')}}">Analisa Rasio Keuangan<span class="d-none">Keuangan</span></a></li>
                  <li class="nav-item"> <a class="nav-link {{
                    Request::is('keuangan/a_3bottomline/a_3bottomline') ? 'active' : '' 
                    || Request::is('keuangan/a_3bottomline/*') ? 'active' : '' }}" href="{{url('keuangan/a_3bottomline/a_3bottomline')}}">Analisa Three Bottom Line<span class="d-none">Keuangan</span></a></li>
                  <li class="nav-item"> <a class="nav-link {{
                    Request::is('keuangan/a_roe/a_roe') ? 'active' : '' 
                    || Request::is('keuangan/a_roe/*') ? 'active' : '' }}" href="{{url('keuangan/a_roe/a_roe')}}">Analisa ROE<span class="d-none">Keuangan</span></a></li>
                </ul>
                </div>
            </li>
            <li class="nav-item {{
                    Request::is('m_karyawan/') ? 'active' : '' 
                    || Request::is('m_karyawan/*') ? 'active' : '' }}">
              <a class="nav-link" data-toggle="collapse" href="#m_harga" aria-expanded="false" aria-controls="ui-basic">
                <span class="menu-title">Manajemen Karyawan</span>
                <span class="d-none">Data Karyawan
                  Absensi Karyawan
                  Penggajian
                  Cashbon Karyawan
                </span>
                <i class="menu-arrow"></i>
                <i class="mdi mdi-account-multiple menu-icon"></i>
              </a>
              <div class="collapse {{
                    Request::is('m_karyawan') ? 'active' : '' 
                    || Request::is('m_karyawan/*') ? 'active' : '' }}" id="m_harga">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link {{
                    Request::is('m_karyawan/datakaryawan/datakaryawan') ? 'active' : '' 
                    || Request::is('m_karyawan/datakaryawan/*') ? 'active' : '' }}" href="{{url('m_karyawan/datakaryawan/datakaryawan')}}">Data Karyawan <span class="d-none">Manajemen Karyawan</span></a></li>
                  <li class="nav-item"> <a class="nav-link {{
                    Request::is('m_karyawan/absensikaryawan/absensikaryawan') ? 'active' : '' 
                    || Request::is('m_karyawan/absensikaryawan/*') ? 'active' : '' }}" href="{{url('m_karyawan/absensikaryawan/absensikaryawan')}}">Absensi Karyawan <span class="d-none">Manajemen Karyawan</span></a></li>
                  <li class="nav-item"> <a class="nav-link {{
                    Request::is('m_karyawan/penggajian/penggajian') ? 'active' : '' 
                    || Request::is('m_karyawan/penggajian/*') ? 'active' : '' }}" href="{{url('m_karyawan/penggajian/penggajian')}}">Penggajian <span class="d-none">Manajemen Karyawan</span></a></li>
                  <li class="nav-item"> <a class="nav-link {{
                    Request::is('m_karyawan/cashbonkaryawan/cashbonkaryawan') ? 'active' : '' 
                    || Request::is('m_karyawan/cashbonkaryawan/*') ? 'active' : '' }}" href="{{url('m_karyawan/cashbonkaryawan/cashbonkaryawan')}}">Cashbon Karyawan <span class="d-none">Manajemen Karyawan</span></a></li>
                </ul>
                </div>
            </li>
          </ul>
          <!-- <div class="sidebar-progress">
            <p>Total Sales</p>
            <div class="progress progress-sm">
              <div class="progress-bar bg-gradient-success" role="progressbar" style="width: 72%" aria-valuenow="72" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            <p>50 Items sold</p>
          </div>
          <div class="sidebar-progress">
            <p>Customer Target</p>
            <div class="progress progress-sm">
              <div class="progress-bar bg-gradient-primary" role="progressbar" style="width: 90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            <p>200 Items sold</p>
          </div>
          <div class="wrapper upgrade-button">
            <a href="https://www.bootstrapdash.com/product/purple-bootstrap-4-admin-template/" target="_blank" class="btn btn-lg btn-block purchase-button">Upgrade To Pro</a>
          </div> -->
        </nav>


<script>
  
  function myFunction() {
    var input, filter, ul, li, a, i;
    input = document.getElementById("filterInput");
    filter = input.value.toUpperCase();
    ul = document.getElementById("ayaysir");
    li = ul.getElementsByTagName("li");
    button = document.getElementById("btn-reset");
    for (i = 0; i < li.length; i++) {
        a = li[i].getElementsByTagName("a")[0];
        if (a.innerHTML.toUpperCase().indexOf(filter) > -1) {
            li[i].style.display = "";
        } else {
            li[i].style.display = "none";

        }
    }
    if (input.value != 0 ) {
      button.classList.remove('d-none');
    } else {
      button.classList.add('d-none');
    }
}
  function btnReset() {
    input = document.getElementById("filterInput");
    input.value=null;
    input.focus();
  }

</script>
