@extends('master')
     @section('content')


        <!--hero section start-->
        <section class="hero-section ptb-120 text-white" style="background: url('assets/img/bg-top-11.png')no-repeat center; background-size:cover;">
            <div class="container">
                <div class="row align-items-center justify-content-lg-between">
                    <div class="col-lg-12 col-md-12 align-items-center m-auto padd" >
                        <div class="row">
                            <div class="hero-content-wrap">
                                <h1 class="fw-bold display-5 text-white mt-5">{!!$users->title1!!}</h1>
                                <p>{!!$users->sub_title1!!}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--hero section end-->



        <!--feature left right content start-->
        <!--why choose us section start-->
        <section class="why-choose-us ptb-60" style=" background: #EDEAED;">
            <div class="container">
                <div class="row justify-content-lg-between align-items-center">
                    <div class="col-lg-12 col-sm-12 padd">
                        <!-- <div class="col-lg-10 p-0 m-0 m-auto padd-2"> -->
                            <div class="why-choose-content m-0">
                                <h4>{{$users->title2}}</h4>
                                <p>{!!$users->sub_title2!!}</p>
                                <h4>{{$users->title3}}</h4>
                                <p>{!!$users->sub_title3!!}</p>
                                 <h4>{{$users->title4}}</h4>
                                 <p>{!!$users->sub_title4!!}</p>
                                 <h4>{{$users->title5}}</h4>
                                 <p>{!!$users->sub_title5!!}</p>
                                 <h4>{{$users->title6}}</h4>
                                 <p>{!!$users->sub_title6!!}</p>
                                 <h4>{{$users->title7}}</h4>
                                 <p>{!!$users->sub_title7!!}</p>
                                 <h4>{{$users->title8}} </h4>
                                 <p>{!!$users->sub_title8!!}</p>
                                 <h4>{{$users->title9}}</h4>
                                 <p>{!!$users->sub_title9!!}</p>
                                 <h4>{{$users->title10}}</h4>
                                 <p>{!!$users->sub_title10!!}</p>
                                 <h4>{{$users->title11}}</h4>
                                 <p>{!!$users->sub_title11!!}</p>
                                 <h4>{{$users->title12}}</h4>
                                 <p>{!!$users->sub_title12!!}</p>
                                 <h4>{{$users->title13}}</h4>
                                 <p>{!!$users->sub_title13!!}</p>
                                 <h4>{{$users->title14}}</h4>
                                 <p>{!!$users->sub_title14!!}</p>
                                 <h4>{{$users->title15}}</h4>
                                 <p>{!!$users->sub_title15!!}</p>
                                 <h4>{{$users->title16}}</h4>
                                 <p>{!!$users->sub_title16!!}</p>
                                 <h4>{{$users->title17}}</h4>
                                 <p>{!!$users->sub_title17!!}</p>
                                 <h4>{{$users->title18}}</h4>
                                 <p>{!!$users->sub_title18!!}</p>

                                 <h4>{{$users->title19}}</h4>
                                 <p>{!!$users->sub_title19!!}</p>
                                 <h4>{{$users->title20}}</h4>
                                 <p>{!!$users->sub_title20!!}</p>
                                 <h4>{{$users->title21}}</h4>
                                 <p>{!!$users->title21!!}</p>
                                 <h4>{{$users->title22}}</h4>
                                 <p>{!!$users->title22!!}</p>
                            </div>
                        <!-- </div> -->
                    </div>
                </div>
            </div>
        </section>
        <!--why choose us section end-->

        <section class="image-feature ptb-100 pt-0" style=" background: #EDEAED;">
            <div class="container">
                <div class="row">
                    <div class="col-lg-10 col-sm-12 m-auto padd">
                        <div class="feature-img-content-bg">
                            <div class="row">
                                <div class="col-md-4 m-auto">
                                    <div class="d-flex align-items-center justify-content-lg-between">
                                        <h2 class="text-capitalize mb-4">{{$terms_3->title}}</h2>
                                    </div>
                                </div>
                                <div class="col-md-8 m-auto">
                                    <ul class="list-unstyled  d-flex flex-wrap list-two-col ">
                                        @foreach($terms_list as $data)
                                        <li class="py-1"><i class="fas fa-check-circle me-2 text-primary"></i>{{$data->list_item}}</li>

                                        @endforeach

                                        <!-- <li class="py-1"><i class="fas fa-check-circle me-2 text-primary"></i>User friendly dashboard</li>
                                        <li class="py-1"><i class="fas fa-check-circle me-2 text-primary"></i>Employee Time Clock </li>
                                        <li class="py-1"><i class="fas fa-check-circle me-2 text-primary"></i>Job Coasting Platform</li>
                                        <li class="py-1"><i class="fas fa-check-circle me-2 text-primary"></i>Send Text Messages</li>
                                        <li class="py-1"><i class="fas fa-check-circle me-2 text-primary"></i>KPI Reports</li>
                                        <li class="py-1"><i class="fas fa-check-circle me-2 text-primary"></i>Send Emails</li>
                                        <li class="py-1"><i class="fas fa-check-circle me-2 text-primary"></i>Quickbooks integration</li>
                                        <li class="py-1"><i class="fas fa-check-circle me-2 text-primary"></i>Scheduled Customer</li>
                                        <li class="py-1"><i class="fas fa-check-circle me-2 text-primary"></i>MSO Integrations</li>
                                        <li class="py-1"><i class="fas fa-check-circle me-2 text-primary"></i>Customer Search</li>
                                        <li class="py-1"><i class="fas fa-check-circle me-2 text-primary"></i>Accounts Receivables</li>
                                        <li class="py-1"><i class="fas fa-check-circle me-2 text-primary"></i>And Much More!</li> -->
                                    </ul>
                                </div>
                            </div>
                                <img src="{{asset('uploads/home/'.$terms_3['section_8_image'])}}" class="img-fluid" alt="feature-image">
                        </div>
                    </div>
                    
                </div>
            </div>
        </section>
        <!--image feature section end-->

        <!--footer section start-->
        @endsection