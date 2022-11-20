     @extends('master')
     @section('content')
      <!--hero section start 1-->
        <section class="hero-section ptb-120 text-white" style="background: url('assets/img/bg-top-11.png')no-repeat center; background-size:cover;">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-10 align-items-center padd" >
                        <div class="row">
                            <!-- <div class="col-lg-9 m-auto p-0 m-0 "> -->
                               <div class="hero-content-wrap mt-5 mt-lg-0 mt-xl-0">
                               <h1 class="mb-3 text-white" style="font-weight: 600; font-family: 'Arial';">{{ $data->title_1 }}</h1>
                                <p class="text-white"> {!!$data->section_1!!}</p>
                                <h4 style="color:#ffb116; font-weight: 600;">{{ $data->title_2 }}</h4>
                                <p> {!!$data->section_2!!}</p>
                                <div class="row justify-content-lg-start align-items-center">
                                    <h6 class="text-white-70 mb-2">{{ $data->title_3 }}</h6>
                                    <div class="col-6 col-sm-3 my-2">
                                        <img src="assets/img/clients/basf1.png" alt="client" class="img-fluid">
                                    </div>
                                    <div class="col-5 col-sm-3 my-2">
                                        <img src="assets/img/clients/keyloop1.png" alt="client" class="img-fluid">
                                    </div>
                                </div>
                                <div class="action-btn mt-4 mb-4 align-items-center d-block d-sm-flex d-lg-flex d-md-flex">
                                    <a href="https://app.acuityscheduling.com/schedule.php?owner=12640369" target="_blank" class="btn btn-primary me-3">Request Demo</a>
                                </div>
                            </div>
                            <!-- </div> -->
                        </div>
                       
                    </div>
                    <div class="col-lg-6 col-md-8">
                        <div class="hero-img position-relative circle-shape-images">
                            {{-- <img src="{{asset('uploads/home/'.$data['section_1_image'])}}"  alt="hero img" width="100%" class="rounded img-fluid position-relative z-5"> --}}
                            <iframe width="100%" height="500" class="rounded"  src="{{ $data->video_link }}"></iframe>

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--hero section end-->

        <!--Section 2-->
        <section class="why-choose-us ptb-100" tyle="background: url('assets/img/section-2.png')no-repeat center right;" style="background: #EDEAED;">
            <div class="container-fluid">
                <div class="row justify-content-lg-between align-items-center">
                   <div class="col-lg-5 col-12">
                    <div class="row">
                        <div class="col-md-10 m-auto">
                            <div class="feature-img-holder mb-3">
                                <!-- <img src="assets/img/phone-image.png" class="img-fluid w-50" alt="feature-image" style="display: block; margin: auto;"> -->
                                <img src="{{asset('uploads/home/'.$section_2['section_2_image'])}}" class="img-fluid w-75" alt="feature-image" style="display: block; margin: auto;">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7 col-12">
                    <div class="col-lg-10 p-0 m-0 mr-auto padd">
                        <div class="why-choose-content">
                            <h2>{{ $section_2->title }}</h2>
                            <p>{{ $section_2->sub_title }}</p>
                            <ul class="list-unstyled  d-flex flex-wrap list-two-col ">
                                @foreach ( $section_list_1 as $data )
                                <li class="py-1"><i class="fas fa-check-circle me-2 text-primary"></i>{{ $data->list_item }}</li>

                                @endforeach
                                {{-- <li class="py-1"><i class="fas fa-check-circle me-2 text-primary"></i>{{ $section_2->list_2 }}</li>
                                <li class="py-1"><i class="fas fa-check-circle me-2 text-primary"></i>{{ $section_2->list_3 }}</li>
                                <li class="py-1"><i class="fas fa-check-circle me-2 text-primary"></i>{{ $section_2->list_4 }}</li>
                                <li class="py-1"><i class="fas fa-check-circle me-2 text-primary"></i>{{ $section_2->list_5 }}</li>
                                <li class="py-1"><i class="fas fa-check-circle me-2 text-primary"></i>{{ $section_2->list_6 }}</li>
                                <li class="py-1"><i class="fas fa-check-circle me-2 text-primary"></i>{{ $section_2->list_7 }}</li>  --}}
                            </ul>
                            <a href="about-us.html" class="read-more-link text-decoration-none">Know More About Us <i class="far fa-arrow-right ms-2"></i></a>
                        </div>
                    </div>
                </div>
                </div>
            </div>
        </section>
        <!--Section 2 end-->

        <!--Section 3-->
        <section class="image-feature bg-gradient ptb-100" style="background: url('assets/img/bg-4.png');">
            <div class="container">
                <div class="row justify-content-between align-items-center">
                    <div class="col-lg-7 col-12 padd">
                        <!-- <div class="col-md-12"> -->
                            <div class="feature-img-content">
                                <h2 style="color:#ffffff;" class="text-capitalize">{{ $section_3->title }}</h2>
                                {{-- <p>According to a recent survey, 75% of independent contractors said that job costs was one of their top business concerns. That's understandable given that accurate job quotes and effective job pricing often mean the difference between a thriving company and one that struggles to survive.</p>
                                <p>The majority of auto repair businesses struggle because they are unable to keep accurate record and efficiently calculate the actual expenses involved with fixing their customer's cars.</p>
                                <p>Job costing is an essential part of every busines's operation.</p>
                                <p>Business owners and managers can monitor a job's expenses using job costing, then compare them with the revenue the job brought in. This results in the overall job's profitability.</p> --}}
<p>{!! $section_3->section  !!}</p>
                                <a href="about-us.html" class="read-more-link text-decoration-none d-block mt-4">Know More About Us <i class="far fa-arrow-right ms-2"></i></a>
                            </div>
                        <!-- </div> -->
                    </div>
                     <div class="col-lg-5 col-12 padd">
                        <div class="feature-img-holder mt-3">
                            <img src="{{asset('uploads/home/'.$section_3['section_3_image'])}}" class="img-fluid" alt="feature-image">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Section 3-->


        <!--Section 4-->
        <section class="image-feature ptb-100" style="background: #EDEAED;" >
            <div class="container">
                <div class="row" >
                     <div class="col-lg-5 col-12">
                        <div class="row">
                            <div class="col-md-11 p-0 m-0 m-auto padd">
                                <div class="feature-img-holder mt-4 mt-lg-0 mt-xl-0">
                                    <img src="{{asset('uploads/home/'.$section_4['section_4_image'])}}" class="img-fluid" alt="feature-image" style="display: block; margin: auto;">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7 col-12 m-auto">
                        <div class="row">
                            <div class="col-lg-10 p-0 m-0 mr-auto padd">
                                <div class="feature-img-content">
                                    <h2 style="color:#071c4d" class="text-capitalize">{{ $section_4->title }}</h2>
                                   <p>{!! $section_4->section !!}</p>
                                    {{-- <p>Mobile apps are considered to be one of the most powerful tools for reaching your business’ target audience. Almost, every adult in the world has a smartphone and this market continues to grow. That is quite a strong argument for why body shops should focus on mobile app technology.</p>
                                    <p>Cyber Garage software Management systems</p>
                                    <p>The leader in body shop mobile app development!</p> --}}
                                <a href="about-us.html" class="read-more-link text-decoration-none d-block mt-4">Know More About Us <i class="far fa-arrow-right ms-2"></i></a>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Section 4 end-->

        <!--Section 5 start-->
        <section class="image-feature bg-gradient ptb-100" style="background: url('assets/img/bg-4.png');">
            <div class="container">
                <div class="row justify-content-between align-items-center">
                    <div class="col-lg-6 col-12 padd">
                        <!-- <div class="col-md-12"> -->
                                <div class="feature-img-content">
                                    <h2 style="color:#ffffff;" class="text-capitalize">{{ $section_5->title }}</h2>
@foreach ($section_list_5 as  $data)
<ul class="list-unstyled mb-0 ">
    <li class="py-1"><i class="fas fa-check-circle me-2 text-primary"></i>{{ $data->list_item }}</li>
</ul>
@endforeach
                                    
                                    {{-- <ul class="list-unstyled mb-0 ">
                                        <li class="py-1"><i class="fas fa-check-circle me-2 text-primary"></i>{{ $section_5->list_2 }}</li>
                                    </ul>
                                    <ul class="list-unstyled mb-0 ">
                                        <li class="py-1"><i class="fas fa-check-circle me-2 text-primary"></i>{{ $section_5->list_3 }}</li>
                                    </ul>
                                    <ul class="list-unstyled mb-0 ">
                                        <li class="py-1"><i class="fas fa-check-circle me-2 text-primary"></i>{{ $section_5->list_4 }}</li>
                                    </ul>
                                    <ul class="list-unstyled mb-0 ">
                                        <li class="py-1"><i class="fas fa-check-circle me-2 text-primary"></i>{{ $section_5->list_5 }}</li>
                                    </ul>
                                    
                                    <ul class="list-unstyled mb-0 ">
                                        <li class="py-1"><i class="fas fa-check-circle me-2 text-primary"></i>{{ $section_5->list_6 }}</li>
                                    </ul>
                                    <ul class="list-unstyled ">
                                        <li class="py-1"><i class="fas fa-check-circle me-2 text-primary"></i>{{ $section_5->list_7 }}</li>
                                    </ul> --}}
                                    <a href="about-us.html" class="read-more-link text-decoration-none d-block mt-4">Know More About Us <i class="far fa-arrow-right ms-2"></i></a>
                                </div>
                        <!-- </div> -->
                    </div>
                     <div class="col-lg-6 col-12 ">
                        <div class="feature-img-holder">
                            <img src="{{asset('uploads/home/'.$section_5['section_5_image'])}}" class="img-fluid" alt="feature-image">
                            <!-- <img src="assets/img/6A.png " class="img-fluid hidii" alt="feature-image"> -->
                        </div>
                    </div>
                    
                </div>
            </div>
        </section>

        <!--Section 6 start-->
        <section class="image-feature ptb-100" style="background: #EDEAED;" >
            <div class="container">
                <div class="row" >
                     <div class="col-lg-5 col-12">
                        <div class="row">
                            <div class="col-md-11 p-0 m-0 m-auto padd">
                                <div class="feature-img-holder mt-4 mt-lg-0 mt-xl-0 mb-3 text-center">
                                    <img src="{{asset('uploads/home/'.$section_6['section_6_image'])}}" class="img-fluid w-75" alt="feature-image " >
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7 col-12 m-auto">
                        <div class="row">
                            <div class="col-lg-10 p-0 m-0 mr-auto padd">
                                <div class="feature-img-content">
                                    <h2 style="color:#071c4d">{{ $section_6->title }}</h2>
                                    {!! $section_6->section !!}
                                    {{-- <p>Time-tracking reinforces accountability for each employee. When time-tracking is enforced, employees are more likely to complete jobs more efficiently and are more likely to hold themselves accountable for their progress throughout the repair process. Time tracking software isn’t used to intimidate, and control employees, but instead to reiterate the importance of completing the job on time and the need for dedicated, hardworking and honest employees.</p> --}}
                                <a href="about-us.html" class="read-more-link text-decoration-none d-block mt-4">Know More About Us <i class="far fa-arrow-right ms-2"></i></a>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Section 6 end-->

         <!--Section 7 start-->
        <section class="image-feature ptb-100 " style="background: url('assets/img/section5.png') no-repeat top; background-size:cover;" >
            <div class="container">
                <div class="row">
                    <div class="col-lg-10 col-sm-12 m-auto padd">
                        <div class="feature-img-content-bg manage-emp text-white">
                            <h2 class="text-white text-center">{{ $section_7->title }}<</h2>
                            {{-- <p class="text-center text-white mt-3"><</p> --}}
                            {!! $section_7->section !!}
                            <div class="row mt-4">
                                <div class="col-lg-7 m-auto">
                                    <img src="{{asset('uploads/home/'.$section_7['section_7_image'])}}" class="img-fluid" alt="feature-image">
                                </div>
                            </div> 
                        </div>
                    </div>
                    
                </div>
            </div>
        </section>
        <!--section 7 end-->

        <!-- section 8 start-->
        <section class="image-feature ptb-100" style=" background: #EDEAED;">
            <div class="container">
                <div class="row">
                    <div class="col-lg-10 col-sm-12 m-auto padd">
                        <div class="feature-img-content-bg">
                            <div class="row">
                                <div class="col-md-4 m-auto">
                                    <div class="d-flex align-items-center justify-content-lg-between">
                                        <h2 class="text-capitalize mb-4">{{ $section_8->title }}</h2>
                                    </div>
                                </div>
                                <div class="col-md-8 m-auto">
                                    <ul class="list-unstyled  d-flex flex-wrap list-two-col ">
                                        @foreach ($section_list_8 as $data )
                                        <li class="py-1"><i class="fas fa-check-circle me-2 text-primary"></i>{{ $data->list_item }}</li>
                                        @endforeach
                                      
                                    </ul>
                                </div>
                            </div>
                                <img src="{{asset('uploads/home/'.$section_8['section_8_image'])}}" class="img-fluid" alt="feature-image">
                        </div>
                    </div>
                    
                </div>
            </div>
        </section>
        <!-- section 8 end-->

        @endsection