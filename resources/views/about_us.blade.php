@extends('master')
     @section('content')

        <!--hero section start-->
        <section class="hero-section ptb-120 text-white" style="background: url('assets/img/bg-top-11.png')no-repeat center; background-size:cover;">
            <div class="container">
                <div class="row align-items-center justify-content-lg-between">
                    <div class="col-lg-12 col-md-12 align-items-center m-auto padd" >
                        <div class="row">
                            <div class="hero-content-wrap">
                                <h1 class="fw-bold display-5 text-white mt-5">{{ $about_1->title }}</h1>
                                <p>{!! $about_1->sub_title !!}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--hero section end-->



        <!--feature left right content start-->
        <!--why choose us section start-->
        <section class="why-choose-us ptb-100" style=" background: #EDEAED;">
            <div class="container">
                <div class="row justify-content-lg-between align-items-center">
                    <div class="col-lg-7 col-sm-12 padd">
                        <!-- <div class="col-lg-10 p-0 m-0 m-auto padd-2"> -->
                            <div class="why-choose-content m-0">
                                <h2>{{ $about_2->title_1 }}</h2>
                                <p>{!! $about_2->para_1 !!}</p>
                                <h2>{{ $about_2->title_2 }}</h2>
                                <p>{!! $about_2->para_2 !!}</p>
                                {{-- <p>Our management system platform is always user-friendly, quick and easy to navigate, and will keep your workforce more engaged and productive since it addresses the difficulties repair shops deal with every day.</p> --}}
                                 <h2>{{ $about_2->title_3 }}</h2>
                                 <p>{!! $about_2->para_3 !!}</p>
                                    <a href="about-us.html" class="read-more-link text-decoration-none">Know More Contact Us <i class="far fa-arrow-right ms-2"></i></a>
                            </div>
                        <!-- </div> -->
                    </div>
                     <div class="col-lg-5 col-12">
                        <div class="feature-img-holder">
                            <img src="{{asset('uploads/home/'.$about_2['file_image'])}}" class="img-fluid" alt="feature-image">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--why choose us section end-->


         <!--image feature section start-->
        <!-- <section class="image-feature ptb-120" style="background: url('assets/img/section5.png') no-repeat top;"> 
            <div class="container">
                <div class="row">
                    <div class="col-lg-10 col-10 m-auto">
                        <div class="feature-img-content-bg manage-emp">
                            <h2 class="text-white text-center text-capitalize">A message from the Fonder</h2>
                            <p class="text-center text-white">Robert Williams, the founder of Cyber Garage, has been in the auto repair business for more than 35 years, opening his shop in California in 1986. We are aware that maintaining customer and company loyalty are crucial. Because of this, our software tools make it simple and straightforward to stay in touch, enabling your company to provide complete customer service and support.</p>
                        </div>
                    </div>
                    
                </div>
            </div>
        </section> -->
        <!--image feature section end-->

        <!--image feature section start-->
        <!-- <section class="image-feature ptb-120" style=" background: #EDEAED;">
            <div class="container">
                <div class="row">
                    <div class="col-lg-10 col-10 m-auto">
                        <div class="feature-img-content-bg">
                            <h2 class="text-center">The way it works</h2>
                            <p class="text-center mt-4">A new feature has been added to Cyber Garage's toolbox the new Annotation Tool.
                                The tool allows you to mark up the images, add notes to the photo image, and print them once you have taken all of your preliminary photos, including past damage, and transferred them into the repair</p>

                                <img src="assets/img/screen/5th-img.png" class="img-fluid" alt="feature-image">
                        </div>
                    </div>
                    
                </div>
            </div>
        </section> -->
        <section class="image-feature ptb-100 pt-0" style=" background: #EDEAED;">
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