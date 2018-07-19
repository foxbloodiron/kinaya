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
</script>