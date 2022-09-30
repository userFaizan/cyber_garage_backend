{{-- <script type="text/javascript">
    $(function () {

      var table = $('.data-table').DataTable({
          processing: true,
          serverSide: true,
          ajax: "{{ route('data') }}",
          columns: [
              {data: 'id', name: 'id'},
              {data: 'name', name: 'name'},
              {data: 'email', name: 'email'},
              {data: 'action', name: 'action', orderable: false, searchable: false},
          ]
      });

    });
  </script> --}}






</div>
</div>
<!-- build:js scripts/app.html.js -->
<!-- jQuery -->
<script src="{{asset('assets/libs/jquery/jquery/dist/jquery.js')}}"></script>
<!-- Bootstrap -->
<script src="{{asset('assets/libs/jquery/tether/dist/js/tether.min.js')}}"></script>
<script src="{{asset('assets/libs/jquery/bootstrap/dist/js/bootstrap.js')}}"></script>
<!-- core -->
<script src="{{asset('assets/libs/jquery/underscore/underscore-min.js')}}"></script>
<script src="{{asset('assets/libs/jquery/jQuery-Storage-API/jquery.storageapi.min.js')}}"></script>
<script src="{{asset('assets/libs/jquery/PACE/pace.min.js')}}"></script>

<script src="{{asset('assets/scripts/config.lazyload.js')}}"></script>

<script src="{{asset('assets/scripts/palette.js')}}"></script>
<script src="{{asset('assets/scripts/ui-load.js')}}"></script>
<script src="{{asset('assets/scripts/ui-jp.js')}}"></script>
<script src="{{asset('assets/scripts/ui-include.js')}}"></script>
<script src="{{asset('assets/scripts/ui-device.js')}}"></script>
<script src="{{asset('assets/scripts/ui-form.js')}}"></script>
<script src="{{asset('assets/scripts/ui-nav.js')}}"></script>
<script src="{{asset('assets/scripts/ui-screenfull.js')}}"></script>
<script src="{{asset('assets/scripts/ui-scroll-to.js')}}"></script>
<script src="{{asset('assets/scripts/ui-toggle-class.js')}}"></script>

<script src="{{asset('assets/scripts/app.js')}}"></script>

<!-- ajax -->
<script src="{{asset('assets/libs/jquery/jquery-pjax/jquery.pjax.js')}}"></script>
<script src="{{asset('assets/scripts/ajax.js')}}"></script>
<!-- endbuild -->
<script src="//cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script type="text/javascript">
$(document).ready( function () {
    $('#myTable').DataTable();
} );
</script>

</body>
</html>
