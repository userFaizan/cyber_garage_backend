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
<script src="{{asset('assets/asset/libs/jquery/jquery/dist/jquery.js')}}"></script>
<!-- Bootstrap -->
<script src="{{asset('assets/asset/libs/jquery/tether/dist/js/tether.min.js')}}"></script>
<script src="{{asset('assets/asset/libs/jquery/bootstrap/dist/js/bootstrap.js')}}"></script>
<!-- core -->
<script src="{{asset('assets/asset/libs/jquery/underscore/underscore-min.js')}}"></script>
<script src="{{asset('assets/asset/libs/jquery/jQuery-Storage-API/jquery.storageapi.min.js')}}"></script>
<script src="{{asset('assets/asset/libs/jquery/PACE/pace.min.js')}}"></script>

<script src="{{asset('assets/asset/scripts/config.lazyload.js')}}"></script>

<script src="{{asset('assets/asset/scripts/palette.js')}}"></script>
<script src="{{asset('assets/asset/scripts/ui-load.js')}}"></script>
<script src="{{asset('assets/asset/scripts/ui-jp.js')}}"></script>
<script src="{{asset('assets/asset/scripts/ui-include.js')}}"></script>
<script src="{{asset('assets/asset/scripts/ui-device.js')}}"></script>
<script src="{{asset('assets/asset/scripts/ui-form.js')}}"></script>
<script src="{{asset('assets/asset/scripts/ui-nav.js')}}"></script>
<script src="{{asset('assets/asset/scripts/ui-screenfull.js')}}"></script>
<script src="{{asset('assets/asset/scripts/ui-scroll-to.js')}}"></script>
<script src="{{asset('assets/asset/scripts/ui-toggle-class.js')}}"></script>

<script src="{{asset('assets/asset/scripts/app.js')}}"></script>

<!-- ajax -->
<script src="{{asset('assets/asset/libs/jquery/jquery-pjax/jquery.pjax.js')}}"></script>
<script src="{{asset('assets/asset/scripts/ajax.js')}}"></script>

<script src="//cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script type="text/javascript">
$(document).ready( function () {
    $('.myTable').DataTable();
});
</script>
<!-- endbuild -->
<script src="https://cdn.ckeditor.com/4.20.0/standard/ckeditor.js"></script>
<script>
$(document).ready(function () {
      $('.ckeditor').ckeditor();
  });
  </script>
{{-- @yield('script') --}}

</body>
</html>
