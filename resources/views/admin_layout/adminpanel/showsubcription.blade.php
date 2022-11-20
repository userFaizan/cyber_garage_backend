@include('admin_layout.header')
@include('admin_layout.sidebar')
<div style="padding-top: 100px;">
    <div class="padding">
        <div class="box">
          <div class="box-header">
            <h2>User Lists</h2>
            {{-- <small>Make HTML tables on smaller devices look awesome</small> --}}
          </div>
          {{-- <div class="box-body">
            Search: <input id="filter" type="text" class="form-control input-sm w-auto inline m-r"/>
          </div> --}}
          <div style="margin: 23px;">
            <table  class="table m-b-none myTable" ui-jp="footable" data-filter="#filter" data-page-size="5">
              <thead>
                <tr>
                    <th data-toggle="true">
                       id
                    </th>
                    <th>Company name</th>
                    <th>C Address</th>
                    <th>City</th>
                    <th>State</th>
                    <th>Code</th>
                    <th>C Phone</th>
                    <th>C Email</th>
                    <th>Number</th>
                    <th>F Name</th>
                    <th>L Name</th>
                    <th>Phone</th>
                    <th>Email</th>
                    <th>Username</th>
                    <th data-hide="phone">
                        Action
                    </th>
                </tr>
              </thead>
              <tbody>
                {{-- @if ($user->count() == 0)
                <tr>
                    <td colspan="5">No products to display.</td>
                </tr>
                @endif --}}

               
                @foreach ($users as $user)
                <tr>
                    <td>{{$user['id']}}</td>
                    <td>{{$user['c_name']}}</td>
                    <td>{{$user['c_address']}}</td>
                    <td>{{$user['city']}}</td>
                    <td>{{$user['state']}}</td>
                    <td>{{$user['code']}}</td>
                    <td>{{$user['c_phone']}}</td>
                    <td>{{$user['c_email']}}</td>
                    <td>{{$user['number']}}</td>
                    <td>{{$user['f_name']}}</td>
                    <td>{{$user['l_name']}}</td>
                    <td>{{$user['phone']}}</td>
                    <td>{{$user['email']}}</td>
                    <td>{{$user['username']}}</td>
                    <td>
                        <a href="{{route('usersdetail.destroy', $user->id)}}"><span><i class="fa-solid fa-trash"></i></span></a>
                    </td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
</div>

{{-- @section('script')
<script src="//cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script type="text/javascript">
$(document).ready( function () {
    $('.newTable').DataTable();
});
</script>
@endsection --}}
@include('admin_layout.footer')