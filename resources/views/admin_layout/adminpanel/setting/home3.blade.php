@include('admin_layout.header')
@include('admin_layout.sidebar')
<div class="padding">
    <div class="row justify-content-center pt-5">
      <div class="col-md-6">
        <div class="box">
          <div class="box-header">
            <h2>Edit Home Section # 3</h2>
            {{-- <small>Individual form controls receive some global styling. All textual &lt;input>, &lt;textarea>, and &lt;select> elements with .form-control are set to width: 100%; by default. Wrap labels and controls in .form-group for optimum spacing.</small> --}}
          </div>
          <div class="box-divider m-0"></div>
          <div class="box-body">
            <form method="post" action="{{ route('home.update.3') }}" enctype="multipart/form-data">
                @csrf
                             {{-- <input type="hidden" name="id" value="{{$data['id']}}"> --}}
                             <div class="form-group">
                              <label for="exampleInputName1">Title</label>
                              <input type="name" name="title" class="form-control"   value="{{$data['title']}}"id="" placeholder="Enter Title # 1">
                            </div>
                 <div class="form-group">
                <label class="d-block">Section</label>
                <textarea class="form-control ckeditor " rows="1"  name="section"  required>{{ $data['section'] }}</textarea>
            </div>   
              <div class="form-group">
                <label for="exampleInputName1">Choose Section # 3 Image</label>
                <input type="file" name="section_3_image"  class="form-control">
              </div>
           
              <button type="submit" class="btn white m-b">Submit</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
@include('admin_layout.footer')