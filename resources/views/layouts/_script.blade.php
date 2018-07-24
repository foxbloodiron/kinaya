 <!-- plugins:js -->
  <script src="{{asset('assets/node_modules/jquery/dist/jquery.min.js')}}"></script>
  <script src="{{asset('assets/node_modules/popper.js/dist/umd/popper.min.js')}}"></script>
  <script src="{{asset('assets/node_modules/bootstrap/dist/js/bootstrap.min.js')}}"></script>
  <script src="{{asset('assets/node_modules/perfect-scrollbar/dist/js/perfect-scrollbar.jquery.min.js')}}"></script>
  <script src="{{asset('assets/node_modules/select2/dist/js/select2.min.js')}}"></script>
  <script src="{{asset('assets/node_modules/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js')}}"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <script src="{{asset('assets/node_modules/chart.js/dist/Chart.min.js')}}"></script>

  <script src="{{asset('assets/bower_components/typeahead.js/dist/typeahead.bundle.min.js')}}" tppabs="http://www.bootstrapdash.com/demo/purple/bower_components/typeahead.js/dist/typeahead.bundle.min.js"></script>
  <script src="{{asset('assets/bower_components/x-editable/dist/bootstrap3-editable/js/bootstrap-editable.js')}}"></script>
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="{{asset('assets/js/off-canvas.js')}}"></script>
  <script src="{{asset('assets/js/misc.js')}}"></script>
  <script src="{{asset('assets/js/hoverable-collapse.js')}}" tppabs="http://www.bootstrapdash.com/demo/purple/js/hoverable-collapse.js"></script>
  <script src="{{asset('assets/js/settings.js')}}" tppabs="http://www.bootstrapdash.com/demo/purple/js/settings.js"></script>
  <script src="{{asset('assets/js/todolist.js')}}" tppabs="http://www.bootstrapdash.com/demo/purple/js/todolist.js"></script>
  <script src="{{asset('assets/js/tabs.js')}}"></script>
  <script src="{{asset('assets/js/select2.js')}}"></script>
  <script src="{{asset('assets/js/file-upload.js')}}"></script>

  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="{{asset('assets/js/dashboard.js')}}"></script>
  <!-- End custom js for this page-->

  <script src="{{asset('assets/datatables/datatables.min.js')}}"></script>
  <script src="{{asset('assets/js-cookie/js.cookie.js')}}"></script>
  
  <script type="text/javascript">
  $(document).ready(function(){
    $('select').select2({ 
      width: '100%' 
    });
    $('.data-table').dataTable({
          "responsive":true,

          "pageLength": 10,
        "lengthMenu": [[10, 20, 50, - 1], [10, 20, 50, "All"]],
        "language": {
            "searchPlaceholder": "Cari Data",
            "emptyTable": "Tidak ada data",
            "sInfo": "Menampilkan _START_ - _END_ Dari _TOTAL_ Data",
            "sSearch": '<i class="fa fa-search"></i>',
            "sLengthMenu": "Menampilkan &nbsp; _MENU_ &nbsp; Data",
            "infoEmpty": "",
            "paginate": {
                    "previous": "Sebelumnya",
                    "next": "Selanjutnya",
                 }
          }

        });
    var datepicker = $('.datepicker').datepicker({
      format:"dd-mm-yyyy"
    });
  });

    // Get Cookie
    var sidebar = Cookies.get('sidebar_kinaya');

    // Cookie Sidebar Exists
    if (sidebar){
        $('body').addClass(sidebar);

        if (sidebar=='sidebar-light') 
        {
          $('#sidebar-light-theme').addClass('selected');
          $('#sidebar-default-theme').removeClass('selected');

        }
        if (sidebar=='sidebar-default') 
        {
          $('#sidebar-default-theme').addClass('selected');
          $('#sidebar-light-theme').removeClass('selected');

        }
    }
    // Cookie Sidebar Doesn't Exist
    else {
        $('body').addClass();
    }

    // Sidebar Option Cookie
    $('#sidebar-light-theme').on('click', function(){
        $('body').addClass('sidebar-light');
        $('#sidebar-light-theme').addClass('sidebar-light selected');
        Cookies.set('sidebar_kinaya', 'sidebar-light',{ expires : 365});

    });

    $('#sidebar-default-theme').on('click', function(){
        $('body').removeClass('sidebar-light');
        Cookies.set('sidebar_kinaya', 'sidebar-default',{ expires : 365});
    });

    // Get Cookie
    var navbar  = Cookies.get('navbar_kinaya');
    // Cookie Navbar Exists
    if (navbar){
        $('.navbar').addClass(navbar);
        if(navbar=='navbar-primary')
        {
          $('div.tiles.primary').addClass('selected');
        }
        if(navbar=='navbar-success')
        {
          $('div.tiles.success').addClass('selected');
        }
        if(navbar=='navbar-warning')
        {
          $('div.tiles.warning').addClass('selected');
        }
        if(navbar=='navbar-danger')
        {
          $('div.tiles.danger').addClass('selected');
        }
        if(navbar=='navbar-pink')
        {
          $('div.tiles.pink').addClass('selected');
        }
        if(navbar=='navbar-dark')
        {
          $('div.tiles.dark').addClass('selected');
        }
        if(navbar=='navbar-light')
        {
          $('div.tiles.light').addClass('selected');
        }
    }
    // Cookie Navbar Doesn't Exist
    else {
        $('.navbar').addClass('navbar-light');
        $('div.tiles.light').addClass('selected');
    }
    // Navbar Option Cookie
    $('div.tiles.primary').on('click', function(){
        $('.navbar').addClass('navbar-primary');
        Cookies.set('navbar_kinaya', 'navbar-primary', {expires : 365});
    });
    $('div.tiles.success').on('click', function(){
        $('.navbar').addClass('navbar-success');
        Cookies.set('navbar_kinaya', 'navbar-success', {expires : 365});
    });
    $('div.tiles.warning').on('click', function(){
        $('.navbar').addClass('navbar-warning');
        Cookies.set('navbar_kinaya', 'navbar-warning', {expires : 365});
    });
    $('div.tiles.danger').on('click', function(){
        $('.navbar').addClass('navbar-danger');
        Cookies.set('navbar_kinaya', 'navbar-danger', {expires : 365});
    });
    $('div.tiles.pink').on('click', function(){
        $('.navbar').addClass('navbar-pink');
        Cookies.set('navbar_kinaya', 'navbar-pink', {expires : 365});
    });
    $('div.tiles.info').on('click', function(){
        $('.navbar').addClass('navbar-info');
        Cookies.set('navbar_kinaya', 'navbar-info', {expires : 365});
    });
    $('div.tiles.dark').on('click', function(){
        $('.navbar').addClass('navbar-dark');
        Cookies.set('navbar_kinaya', 'navbar-dark', {expires : 365});
    });
    $('div.tiles.light').on('click', function(){
        $('.navbar').addClass('navbar-light');
        Cookies.set('navbar_kinaya', 'navbar-light', {expires : 365});
    });

</script>
