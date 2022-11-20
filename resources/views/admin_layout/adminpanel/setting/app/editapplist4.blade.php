@include('admin_layout.header')
@include('admin_layout.sidebar')
<div class="padding">
    <div class="row justify-content-center pt-5">
      <div class="col-md-6">
        <div class="box">
          <div class="box-header">
            <h2>Edit List items App Section # 4</h2>
            {{-- <small>Individual form controls receive some global styling. All textual &lt;input>, &lt;textarea>, and &lt;select> elements with .form-control are set to width: 100%; by default. Wrap labels and controls in .form-group for optimum spacing.</small> --}}
          </div>
          <div class="box-divider m-0"></div>
          <div class="box-body">
            <form method="post" action="{{ route('app.4.update') }}">
                @csrf
                             <input type="hidden" name="id" value="{{$data['id']}}">
                             <div class="form-group">
                              <label for="exampleInputName1">List Item</label>
                              <input type="name" name="list_title" class="form-control" value="{{ $data['list_title'] }}" id="" placeholder="Enter List Items">
                            </div>
              <button type="submit" class="btn white m-b">Submit</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
@include('admin_layout.footer')