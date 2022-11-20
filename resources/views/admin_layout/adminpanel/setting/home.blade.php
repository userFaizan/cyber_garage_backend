@include('admin_layout.header')
@include('admin_layout.sidebar')
<div class="padding">
    <div class="row justify-content-center pt-5">
      <div class="col-md-6">
        <div class="box">
          <div class="box-header">
            <h2>Edit Home Page</h2>
            {{-- <small>Individual form controls receive some global styling. All textual &lt;input>, &lt;textarea>, and &lt;select> elements with .form-control are set to width: 100%; by default. Wrap labels and controls in .form-group for optimum spacing.</small> --}}
          </div>
          <div class="box-divider m-0"></div>
          <div class="box-body">
            <form method="post" action="{{ route('home.update') }}" enctype="multipart/form-data">
                @csrf
                             {{-- <input type="hidden" name="id" value="{{$data['id']}}"> --}}
                             <div class="form-group">
                              <label for="exampleInputName1">Title # 1</label>
                              <input type="name" name="title_1" class="form-control"   value="{{$data['title_1']}}"id="" placeholder="Enter Title # 1">
                            </div>

                 <div class="form-group">
                <label class="d-block">Section # 1</label>
                <textarea class="form-control ckeditor " rows="1"  name="section_1"  required>{{ $data['section_1'] }}</textarea>
            </div>
            <div class="form-group">
              <label for="exampleInputName1">Title # 2</label>
              <input type="name" name="title_2" class="form-control"  value="{{$data['title_2']}}" id="" placeholder="Enter Title # 2">
            </div>

            <div class="form-group">
              <label class="d-block">Section # 2</label>
              <textarea class="form-control ckeditor " rows="3"  name="section_2"  required>{{ $data['section_2'] }}</textarea>
          </div>

            <div class="form-group">
              <label for="exampleInputName1">Title # 3</label>
              <input type="name" name="title_3" class="form-control"   value="{{$data['title_3']}}" id="" placeholder="Enter Title # 3">
            </div>
            <div class="form-group">
              <label for="exampleInputName1">Video Link</label>
              <input type="text" name="video_link" class="form-control"   value="{{$data['video_link']}}" id="" placeholder="Enter Video Link">
            </div>
              {{-- <div class="form-group">
                <label for="exampleInputName1">Choose Section#1 Image</label>
                <input type="file" name="section_1_image"  class="form-control">
              </div> --}}
           
              <button type="submit" class="btn white m-b">Submit</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

@include('admin_layout.footer')