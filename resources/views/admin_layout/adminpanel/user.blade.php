@include('admin_layout.header')
@include('admin_layout.sidebar')
<div style="padding-top: 100px;">
    <div class="padding">
        <div class="box">
          <div class="box-header">
            <h2>Blog Lists</h2>
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
                    <th>image</th>
                    <th>Date</th>
                    <th>Title</th>
                    <th>Sub_Title</th>
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
                    <td><img src="{{asset('uploads/posts/'.$user['avatar'])}}" height="50px" width="50px"></td>

                    <td>{{$user['dob']}}</td>
                    <td>{{$user['title']}}</td>
                    <td>{{$user['sub_title']}}</td>
                    <td>
                        <a href="{{route('user.edit', $user->id)}}"><span><i class="fa-solid fa-pen"></i></span></a>
                        <a href="{{route('users.destroy', $user->id)}}"><span><i class="fa-solid fa-trash"></i></span></a>
                    </td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
</div>

@section('script')
<script src="//cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script type="text/javascript">
$(document).ready( function () {
    $('.myTable').DataTable();
});
</script>
@endsection
@include('admin_layout.footer')