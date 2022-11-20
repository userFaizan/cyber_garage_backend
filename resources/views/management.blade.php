@extends('master')
     @section('content')

        <!--hero section start-->
        <section class="hero-section ptb-120 text-white"  style="background: url('assets/img/bg-top-11.png')no-repeat center; background-size:cover;">
            <div class="container">
                <div class="row align-items-center justify-content-lg-between">
                    <!-- <div class="col-lg-12 col-md-12 align-items-center m-auto" > -->
                        <div class="row">
                            <div class="col-lg-12 m-auto padd">
                                <div class="hero-content-wrap">
                                    <h1 class="fw-bold display-5 mt-5 text-white">{{ $management_1->title }}</h1>
                                  <p>{!! $management_1->sub_title !!}</p>
                                    {{-- <p>Not All Collision Repair Management Systems Are Created Equal <br>Is there no management system in place at your collision center?</p> --}}
                                </div>
                            </div>
                        </div>
                    <!-- </div> -->
                </div>
            </div>
        </section>
        <!--hero section end-->



        <!--feature left right content start-->
        <!--why choose us section start-->
        <section class="why-choose-us ptb-100" style=" background: #EDEAED;">
            <div class="container">
                <div class="row justify-content-lg-between align-items-center">
                    <div class="col-lg-5 col-sm-12 padd">
                        <div class="feature-img-holder text-center">
                            <img src="{{asset('uploads/home/'.$management_2['file_image_2'])}}" class="img-fluid" alt="feature-image">
                        </div>
                    </div>
                    <div class="col-lg-7 col-sm-12 padd">
                        <div class="col-lg-10 p-0 m-0 mr-auto padd-2">
                            <div class="why-choose-content">
                                <h2>{{ $management_2->title }}</h2>
                                <p>{!! $management_2->para !!}</p>
                                {{-- <p>Auto repair businesses need management systems in place to best serve their customers and provide efficient services to ensure the success of their business. Especially in these highly competitive times when most potential customers have smart phones and can access information quickly about your shop’s reviews and ratings, you want to do everything you can to beat out the competition.   No matter how small or large, every business needs a reliable and efficient electronic records management system.</p>
                                <p>Businesses have become more complex than they once were, and as a result, if you want to stay in business and compete in the market, you need a capable and modern management system. Additionally, in today's market, the price of management systems has significantly decreased. So, what exactly is holding you back from making this important investment in your business? </p>
                                <p>The many benefits of Cyber Garage and what it will save you in terms of dollars and cents, productivity, labor efficiency, etc., is well worth the monthly investment.</p>
                                <p>Its many features such as electronic vendor and customer communications, real-time update status messages to customers, and a real-time view of your company's financial position all help to raise your customer satisfaction index.  When you consider all the benefits and the streamlining and efficiency improvements to your bottom line you will certainly agree that getting started today with your new Cyber Garage electronic management system is the best possible next step.</p> --}}
                                    <a href="about-us.html" class="read-more-link text-decoration-none">Know More Contact Us <i class="far fa-arrow-right ms-2"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="why-choose-us" style="background: url('assets/img/bg-top-11.png')no-repeat center center; background-size: cover;">
            <div class="container pt-100 pb-60">
                <div class="row justify-content-lg-between align-items-center">
                    <div class="col-lg-7 col-sm-12">
                        <div class="col-lg-12 p-0 m-0 m-auto padd">
                            <div class="why-choose-content m-0 padd-2 text-white" >
                                <h2 class="text-white">{{ $management_3->title_1 }}</h2>
                                <p class="text-white">{!! $management_3->para_1 !!}</p>
                                <ul class="list-unstyled  d-flex flex-wrap list-two-col text-white">
                                    @foreach ( $management_list as $data)
                                    <li class="py-1"><i class="fas fa-check-circle me-2 text-white"></i>{{ $data->list_title }}</li>

                                    @endforeach
                                    {{-- <li class="py-1"><i class="fas fa-check-circle me-2 text-white"></i>They are a crucial part of the data required to best understand and manage the development of a company.</li>
                                    <li class="py-1"><i class="fas fa-check-circle me-2 text-white"></i>The potential power that comes from analyzing understanding performance data is not being utilized by many repair shop firms.</li>
                                    <li class="py-1"><i class="fas fa-check-circle me-2 text-white"></i>Beyond monthly financial records and reports, repair shops fall short in gathering reliable business data.</li>
                                    <li class="py-1"><i class="fas fa-check-circle me-2 text-white"></i>As a result, owners and managers will continue to base their judgments on intuition and educated guesses.</li> --}}
                                </ul>
                                <a href="about-us.html" class="read-more-link text-decoration-none">Know More Contact Us <i class="far fa-arrow-right ms-2"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 col-12">
                        <div class="feature-img-holder">
                            <img src="{{asset('uploads/home/'.$management_3['file_image_2'])}}" class="img-fluid" alt="feature-image">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 col-sm-12 m-auto padd text-white" >
                        <div class="feature-img-content-bg manage-emp">
                            <h2 class="text-white">{{ $management_3->title_2 }}</h2>
                            <p class="">{!! $management_3->para_2 !!}</p>
                        </div>
                    </div>
                    
                </div>
            </div>
        </section>
        <!--why choose us section end-->

        <!--image feature section start-->
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
                                        {{-- <li class="py-1"><i class="fas fa-check-circle me-2 text-primary"></i>User friendly dashboard</li>
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
                                        <li class="py-1"><i class="fas fa-check-circle me-2 text-primary"></i>And Much More!</li> --}}
                                    </ul>
                                </div>
                            </div>
                            <img src="{{asset('uploads/home/'.$section_8['section_8_image'])}}" class="img-fluid" alt="feature-image">
                        </div>
                    </div>
                    
                </div>
            </div>
        </section>
        <!--image feature section end-->
        @endsection