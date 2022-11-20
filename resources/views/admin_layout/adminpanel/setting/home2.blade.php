@include('admin_layout.header')
@include('admin_layout.sidebar')
<div class="padding">
    <div class="row justify-content-center pt-5">
      <div class="col-md-6">
        <div class="box">
          <div class="box-header">
            <h2>Edit Home Section # 2</h2>
            {{-- <small>Individual form controls receive some global styling. All textual &lt;input>, &lt;textarea>, and &lt;select> elements with .form-control are set to width: 100%; by default. Wrap labels and controls in .form-group for optimum spacing.</small> --}}
          </div>
          <div class="box-divider m-0"></div>
          <div class="box-body">
            <form method="post" action="{{ route('home.update.2') }}" enctype="multipart/form-data">
                @csrf
                             {{-- <input type="hidden" name="id" value="{{$data['id']}}"> --}}
                             <div class="form-group">
                              <label for="exampleInputName1">Title # 1</label>
                              <input type="name" name="title" class="form-control"   value="{{$data['title']}}"id="" placeholder="Enter Title # 1">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputName1">Title # 2</label>
                                <input type="name" name="sub_title" class="form-control"   value="{{$data['sub_title']}}"id="" placeholder="Enter Title # 1">
                              </div>
                 {{-- <div class="form-group">
                <label class="d-block">Section</label>
                <textarea class="form-control ckeditor " rows="1"  name="section"  required>{{ $data['section'] }}</textarea>
            </div>    --}}
            <!-- <div class="form-group">
              <label for="exampleInputName1">List # 1 </label>
              <input type="name" name="list_1" class="form-control"   value="{{$data['list_1']}}"id="" placeholder="Enter list # 1">
            </div> -->
            <!-- <div class="form-group">
              <label for="exampleInputName1">List # 2</label>
              <input type="name" name="list_2" class="form-control"   value="{{$data['list_2']}}"id="" placeholder="Enter list # 2">
            </div> -->
            <!-- <div class="form-group">
              <label for="exampleInputName1">List # 3</label>
              <input type="name" name="list_3" class="form-control"   value="{{$data['list_3']}}"id="" placeholder="Enter list # 3">
            </div> -->
            <!-- <div class="form-group">
              <label for="exampleInputName1">List # 4</label>
              <input type="name" name="list_4" class="form-control"   value="{{$data['list_4']}}"id="" placeholder="Enter list # 4">
            </div> -->
            <!-- <div class="form-group">
              <label for="exampleInputName1">List # 5</label>
              <input type="name" name="list_5" class="form-control"   value="{{$data['list_5']}}"id="" placeholder="Enter list # 5">
            </div> -->
            <!-- <div class="form-group">
              <label for="exampleInputName1">List # 6</label>
              <input type="name" name="list_6" class="form-control"   value="{{$data['list_6']}}"id="" placeholder="Enter Title # 6">
            </div> -->
            <!-- <div class="form-group">
              <label for="exampleInputName1">List # 7</label>
              <input type="name" name="list_7" class="form-control"   value="{{$data['list_7']}}"id="" placeholder="Enter Title # 7">
            </div> -->
     
              <div class="form-group">
                <label for="exampleInputName1">Choose Section # 2 Image</label>
                <input type="file" name="section_2_image"  class="form-control">
              </div>
           
              <button type="submit" class="btn white m-b">Submit</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
@include('admin_layout.footer')