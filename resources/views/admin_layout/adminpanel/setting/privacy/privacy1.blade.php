@include('admin_layout.header')
@include('admin_layout.sidebar')
<div class="padding">
    <div class="row justify-content-center pt-5">
      <div class="col-md-6">
        <div class="box">
          <div class="box-header">
            <h2>Edit Privacy Page</h2>
            {{-- <small>Individual form controls receive some global styling. All textual &lt;input>, &lt;textarea>, and &lt;select> elements with .form-control are set to width: 100%; by default. Wrap labels and controls in .form-group for optimum spacing.</small> --}}
          </div>
          <div class="box-divider m-0"></div>
          <div class="box-body">
            <form method="post" action="{{ route('privacy.1.update') }}" enctype="multipart/form-data">
                @csrf
                {{-- <input type="hidden" name="id" value="{{$data['id']}}"> --}}

                         
                             <div class="form-group">
                              <label for="exampleInputName1">Title # 1</label>
                              <input type="name" name="title1" class="form-control"   value="{{$data['title1']}}"  value=""id="" placeholder="Enter Title # 1">
                            </div>

                 <div class="form-group">
                <label class="d-block">Section # 1</label>
                <textarea class="form-control ckeditor " rows="1"   name="sub_title1"  required>{{ $data['sub_title1'] }}</textarea>
            </div>
            <div class="form-group">
              <label for="exampleInputName1">Title # 2</label>
              <input type="name" name="title2" class="form-control"  value="{{$data['title2']}}"  value="" id="" placeholder="Enter Title # 2">
            </div>

            <div class="form-group">
              <label class="d-block">Section # 2</label>
              <textarea class="form-control ckeditor " rows="3"  name="sub_title2"  required>{{ $data['sub_title2'] }}</textarea>
          </div>
          <div class="form-group">
              <label for="exampleInputName1">Title # 3</label>
              <input type="name" name="title3" class="form-control"  value="{{$data['title3']}}"  value="" id="" placeholder="Enter Title # 3">
            </div>

            <div class="form-group">
              <label class="d-block">Section # 3</label>
              <textarea class="form-control ckeditor " rows="3"  name="sub_title3"  required>{{ $data['sub_title3'] }}</textarea>
          </div>
          <div class="form-group">
              <label for="exampleInputName1">Title # 4</label>
              <input type="name" name="title4" class="form-control"   value="{{$data['title4']}}" value="" id="" placeholder="Enter Title # 4">
            </div>

            <div class="form-group">
              <label class="d-block">Title # 5</label>
              <input type="name" name="sub_title4" class="form-control"   value="{{$data['sub_title4']}}" value="" id="" placeholder="Enter Title # 4">

              {{-- <textarea class="form-control ckeditor " rows="3"  name="sub_title4"  required>{{ $data['sub_title4'] }}</textarea> --}}
          </div>
          <div class="form-group">
              <label for="exampleInputName1">Title # 6</label>
              <input type="name" name="title5" class="form-control"  value="{{$data['title5']}}"  value="" id="" placeholder="Enter Title # 5">
            </div>

            <div class="form-group">
              <label class="d-block">Title # 7</label>
              <input type="name" name="sub_title5" class="form-control"  value="{{$data['sub_title5']}}"  value="" id="" placeholder="Enter Title # 5">

              {{-- <textarea class="form-control ckeditor " rows="3"  name="sub_title5"  required>{{ $data['sub_title5'] }}</textarea> --}}
          </div>
          <div class="form-group">
              <label for="exampleInputName1">Section # 6</label>
                            <textarea class="form-control ckeditor " rows="3"  name="title6"  required>{{ $data['title6'] }}</textarea>

              {{-- <input type="name" name="title6" class="form-control"  value="{{$data['title6']}}" value="" id="" placeholder="Enter Title # 6"> --}}
            </div>

            <div class="form-group">
              <label class="d-block">Title # 8</label>
                            <input type="name" name="sub_title6" class="form-control"  value="{{$data['sub_title6']}}" value="" id="" placeholder="Enter Title # 6">

              {{-- <textarea class="form-control ckeditor " rows="3"  name="sub_title6"  required>{{ $data['sub_title6'] }}</textarea> --}}
          </div>
          <div class="form-group">
              <label for="exampleInputName1">Title # 7</label>
              <input type="name" name="title7" class="form-control"  value="{{$data['title7']}}"  value="" id="" placeholder="Enter Title # 7">
            </div>

            <div class="form-group">
              <label class="d-block">Section # 7</label>
              <textarea class="form-control ckeditor " rows="3"  name="sub_title7"  required>{{ $data['sub_title7'] }}</textarea>
          </div>
          <div class="form-group">
              <label for="exampleInputName1">Title # 8</label>
              <input type="name" name="title8" class="form-control"  value="{{$data['title8']}}"  value="" id="" placeholder="Enter Title # 8">
            </div>

            <div class="form-group">
              <label class="d-block">Section # 8</label>
              <textarea class="form-control ckeditor " rows="3"  name="sub_title8"  required>{{ $data['sub_title8'] }}</textarea>
          </div>
          <div class="form-group">
              <label for="exampleInputName1">Title # 9</label>
              <input type="name" name="title9" class="form-control"  value="{{$data['title9']}}"  value="" id="" placeholder="Enter Title # 9">
            </div>

            <div class="form-group">
              <label class="d-block">Section # 9</label>
              <textarea class="form-control ckeditor " rows="3"  name="sub_title9"  required>{{ $data['sub_title9'] }}</textarea>
          </div>
          <div class="form-group">
              <label for="exampleInputName1">Title # 10</label>
              <input type="name" name="title10" class="form-control"  value="{{$data['title10']}}"  value="" id="" placeholder="Enter Title # 10">
            </div>

            <div class="form-group">
              <label class="d-block">Section # 10</label>
              <textarea class="form-control ckeditor " rows="3"  name="sub_title10"  required>{{ $data['sub_title10'] }}</textarea>
          </div>
          <div class="form-group">
              <label for="exampleInputName1">Title # 11</label>
              <input type="name" name="title11" class="form-control"  value="{{$data['title11']}}"  value="" id="" placeholder="Enter Title # 11">
            </div>

            <div class="form-group">
              <label class="d-block">Section # 11</label>
              <textarea class="form-control ckeditor " rows="3"  name="sub_title11"  required>{{ $data['sub_title11'] }}</textarea>
          </div>
          <div class="form-group">
              <label for="exampleInputName1">Title # 12</label>
              <input type="name" name="title12" class="form-control"  value="{{$data['title12']}}" value="" id="" placeholder="Enter Title # 12">
            </div>

            <div class="form-group">
              <label class="d-block">Section # 12</label>
              <textarea class="form-control ckeditor " rows="3"  name="sub_title12"  required>{{ $data['sub_title12'] }}</textarea>
          </div>
          <div class="form-group">
              <label for="exampleInputName1">Section # 13</label>
              <textarea class="form-control ckeditor " rows="3"  name="title13"  required>{{ $data['title13'] }}</textarea>

              {{-- <input type="name" name="title13" class="form-control"  value="{{$data['title13']}}"  value="" id="" placeholder="Enter Title # 13"> --}}
            </div>

            <div class="form-group">
              <label class="d-block">Title # 13</label>
                            <input type="name" name="sub_title13" class="form-control"  value="{{$data['sub_title13']}}"  value="" id="" placeholder="Enter Title # 13">

              {{-- <textarea class="form-control ckeditor " rows="3"  name="sub_title13"  required>{{ $data['sub_title13'] }}</textarea> --}}
          </div>
           
          <div class="form-group">
              <label for="exampleInputName1">Title # 14</label>
                            <textarea class="form-control ckeditor " rows="3"  name="title14"  required>{{ $data['title14'] }}</textarea>

              {{-- <input type="name" name="title14" class="form-control"  value="{{$data['title14']}}" value="" id="" placeholder="Enter Title # 14"> --}}
            </div>

            <div class="form-group">
              <label class="d-block">Title # 15</label>
                            <input type="name" name="sub_title14" class="form-control"  value="{{$data['sub_title14']}}" value="" id="" placeholder="Enter Title # 14">

              {{-- <textarea class="form-control ckeditor " rows="3"  name="sub_title14"  required>{{ $data['sub_title14'] }}</textarea> --}}
          </div>
          <div class="form-group">
              <label for="exampleInputName1">Title # 15</label>
                            <textarea class="form-control ckeditor " rows="3"  name="title15"  required>{{ $data['title15'] }}</textarea>

              {{-- <input type="name" name="title15" class="form-control"  value="{{$data['title15']}}" value="" id="" placeholder="Enter Title # 15"> --}}
            </div>

            <div class="form-group">
              <label class="d-block">Section # 15</label>
                            <input type="name" name="sub_title15" class="form-control"  value="{{$data['sub_title15']}}" value="" id="" placeholder="Enter Title # 15">
          </div>
       

          <div class="form-group">
            <label class="d-block">Section # 16</label>
            <textarea class="form-control ckeditor " rows="3"  name="title16"  required>{{ $data['title16'] }}</textarea>
        </div>
          {{-- 
          <div class="form-group">
              <label for="exampleInputName1">Title # 17</label>
              <input type="name" name="title17" class="form-control"  value="{{$data['title17']}}" value="" id="" placeholder="Enter Title # 17">
            </div>

            <div class="form-group">
              <label class="d-block">Section # 17</label>
              <textarea class="form-control ckeditor " rows="3"  name="sub_title17"  required>{{ $data['sub_title17'] }}</textarea>
          </div>
          <div class="form-group">
              <label for="exampleInputName1">Title # 18</label>
              <input type="name" name="title18" class="form-control"  value="{{$data['title18']}}"  value="" id="" placeholder="Enter Title # 18">
            </div>

            <div class="form-group">
              <label class="d-block">Section # 18</label>
              <textarea class="form-control ckeditor " rows="3"  name="sub_title18"  required>{{ $data['sub_title18'] }}</textarea>
          </div>
          <div class="form-group">
              <label for="exampleInputName1">Title # 19</label>
              <input type="name" name="title19" class="form-control"  value="{{$data['title19']}}" value="" id="" placeholder="Enter Title # 19">
            </div>

            <div class="form-group">
              <label class="d-block">Section # 19</label>
              <textarea class="form-control ckeditor " rows="3"  name="sub_title19"  required>{{ $data['sub_title19'] }}</textarea>
          </div>
          <div class="form-group">
              <label for="exampleInputName1">Title # 20</label>
              <input type="name" name="title20" class="form-control"  value="{{$data['title20']}}" value="" id="" placeholder="Enter Title # 20">
            </div>

            <div class="form-group">
              <label class="d-block">Section # 20</label>
              <textarea class="form-control ckeditor " rows="3"  name="sub_title20"  required>{{ $data['sub_title20'] }}</textarea>
          </div>
          <div class="form-group">
              <label for="exampleInputName1">Title # 21</label>
              <input type="name" name="title21" class="form-control"  value="{{$data['title21']}}" value="" id="" placeholder="Enter Title # 21">
            </div>

            <div class="form-group">
              <label class="d-block">Section # 21</label>
              <textarea class="form-control ckeditor " rows="3"  name="sub_title21"  required>{{ $data['sub_title21'] }}</textarea>
          </div>
          <div class="form-group">
              <label for="exampleInputName1">Title # 22</label>
              <input type="name" name="title22" class="form-control"  value="{{$data['title22']}}" value="" id="" placeholder="Enter Title # 22">
            </div>

            <div class="form-group">
              <label class="d-block">Section # 22</label>
              <textarea class="form-control ckeditor " rows="3"  name="sub_title22"  required>{{ $data['sub_title22'] }}</textarea>
          </div> --}}
             
           
              <button type="submit" class="btn white m-b">Submit</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

@include('admin_layout.footer')