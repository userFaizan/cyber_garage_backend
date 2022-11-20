@include('admin_layout.header')
@include('admin_layout.sidebar')
<div style="padding-top: 100px;">
    <div class="padding">
        <div class="box">
          <div class="box-header">
            <h2>Privacy List # 3 Items</h2>
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
                    <th>Title</th>
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
                @foreach ($data as $privacy)
                <tr>
                    <td>{{$privacy['id']}}</td>
                    <td>{{$privacy['list_title']}}</td>
                    {{-- <td>{{$video['file_1']}}</td> --}}
                   
                    <td> 
                       <a href="{{route('privacy.3.edit', $privacy->id)}}"><span><i class="fa-solid fa-pen"></i></span></a>
                       <a href="{{route('privacy.3.destroy', $privacy->id)}}"><span><i class="fa-solid fa-trash"></i></span></a>
                    </td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
</div>
@include('admin_layout.footer')