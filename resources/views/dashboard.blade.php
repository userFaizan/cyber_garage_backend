@include('admin_layout.header')
@include('admin_layout.sidebar')
<div class="padding">
    <div class="row justify-content-center pt-5">
      <div class="col-md-6">
        <div class="box">
          <div class="box-header">
            <h2>Add New Blog</h2>
            {{-- <small>Individual form controls receive some global styling. All textual &lt;input>, &lt;textarea>, and &lt;select> elements with .form-control are set to width: 100%; by default. Wrap labels and controls in .form-group for optimum spacing.</small> --}}
          </div>
          <div class="box-divider m-0"></div>
          <div class="box-body">
            <form method="post" action="{{ route('store.userdetails') }}" enctype="multipart/form-data">
                @csrf
              <div class="form-group">
                <label for="exampleInputName1">Title</label>
                <input type="name" name="title" class="form-control" id="exampleInputEmail1" placeholder="Enter Tag">
                @if ($errors->has('title'))
                <span class="text-danger">{{ $errors->first('title') }}</span>
            @endif
              </div>
              <div class="form-group">
                <label for="exampleInputName1">Sub_Title</label>
                <input type="name" name="sub_title" class="form-control" id="exampleInputEmail1" placeholder="Enter Name">
                @if ($errors->has('sub_title'))
                <span class="text-danger">{{ $errors->first('sub_title') }}</span>
            @endif
              </div>
              <div class="form-group">
                <label for="exampleInputName1">Date</label>
                <input type="date" name="dob" class="form-control">
                @if ($errors->has('dob'))
                <span class="text-danger">{{ $errors->first('dob') }}</span>
            @endif
              </div>
              <div class="form-group">
                <label for="exampleInputName1">Choose Blog Image</label>
                <input type="file" name="avatar" class="form-control">
                @if ($errors->has('avatar'))
                <span class="text-danger">{{ $errors->first('avatar') }}</span>
            @endif
              </div>
              <div class="form-group">
                <label class="d-block">About</label>
                <textarea class="form-control ckeditor" rows="3"  name="discription" required></textarea>
                @if ($errors->has('discription'))
                <span class="text-danger">{{ $errors->first('discription') }}</span>
            @endif
            </div>
              <button type="submit" class="btn white m-b">Submit</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

@include('admin_layout.footer')