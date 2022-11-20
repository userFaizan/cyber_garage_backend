@include('admin_layout.header')
@include('admin_layout.sidebar')
<div class="padding">
    <div class="row justify-content-center pt-5">
      <div class="col-md-6">
        <div class="box">
          <div class="box-header">
            <h2>Edit about Section # 2</h2>
            {{-- <small>Individual form controls receive some global styling. All textual &lt;input>, &lt;textarea>, and &lt;select> elements with .form-control are set to width: 100%; by default. Wrap labels and controls in .form-group for optimum spacing.</small> --}}
          </div>
          <div class="box-divider m-0"></div>
          <div class="box-body">
            <form method="post" action="{{ route('about.update.2') }}" enctype="multipart/form-data" >
                @csrf
                             {{-- <input type="hidden" name="id" value="{{$data['id']}}"> --}}
                             <div class="form-group">
                              <label for="exampleInputName1">Title # 1</label>
                              <input type="name" name="title_1" class="form-control"   value="{{$data['title_1']}}"id="" placeholder="Enter Title # 1">
                            </div>
                            <div class="form-group">
                                <label class="d-block">Section # 2</label>
                                <textarea class="form-control ckeditor " rows="1"  name="para_1"  required>{{ $data['para_1'] }}</textarea>
                            </div> 
                            <div class="form-group">
                                <label for="exampleInputName1">Title # 2</label>
                                <input type="name" name="title_2" class="form-control"   value="{{$data['title_2']}}"id="" placeholder="Enter Title # 1">
                              </div> 
                              
                              <div class="form-group">
                                <label class="d-block">Section # 2</label>
                                <textarea class="form-control ckeditor " rows="1"  name="para_2"  required>{{ $data['para_2'] }}</textarea>
                            </div> 
                            <div class="form-group">
                                <label for="exampleInputName1">Title # 3</label>
                                <input type="name" name="title_3" class="form-control"   value="{{$data['title_3']}}"id="" placeholder="Enter Title # 1">
                              </div> 
                              
                              <div class="form-group">
                                <label class="d-block">Section # 3</label>
                                <textarea class="form-control ckeditor " rows="1"  name="para_3"  required>{{ $data['para_3'] }}</textarea>
                            </div> 
                            <div class="form-group">
                                <label for="exampleInputName1">Choose Section # 2 Image</label>
                                <input type="file" name="file_image"  class="form-control">
                              </div>
              <button type="submit" class="btn white m-b">Submit</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
@include('admin_layout.footer')