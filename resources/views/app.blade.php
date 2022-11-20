@extends('master')
     @section('content')


        <!--hero section start-->
        <section class="hero-section ptb-120 text-white"  style="background: url('assets/img/bg-top-11.png')no-repeat center; background-size: cover;">
            <div class="container">
                <div class="row align-items-center justify-content-lg-between">
                    <!-- <div class="col-lg-12 col-md-12 align-items-center m-auto" > -->
                        <div class="row">
                            <div class="col-lg-12 m-auto padd">
                                <div class="hero-content-wrap">
                                    <h1 class="fw-bold display-5 mt-5 text-white">{{ $section_1->title }}</h1>
                                    <p>{!! $section_1->sub_title !!}</p>
                                </div>
                            </div>
                        </div>
                    <!-- </div> -->
                </div>
            </div>
        </section>
        <!--hero section end-->

        <!-- APPS PAGE CONTENT -->
        <section class="why-choose-us ptb-100" style=" background: #EDEAED;">
            <div class="container">
                <div class="row justify-content-lg-between align-items-center">
                    <div class="col-lg-7 col-12 padd">
                        <!-- <div class="col-lg-10 p-0 m-0 m-auto"> -->
                            <div class="why-choose-content" style="margin-left: 0px;">
                                <h2>{{ $section_2->title_1 }}</h2>
                                <p>{!! $section_2->sub_title !!}</p>
                                <ul class="list-unstyled  d-flex flex-wrap ">
                                    @foreach ($section_list_1 as $data )
                                    <li class="py-1"><i class="fas fa-check-circle me-2 text-primary"></i>{{ $data->list_title }}</li>
                                    @endforeach
                                    {{-- <li class="py-1"><i class="fas fa-check-circle me-2 text-primary"></i>The flexibility to scan the barcode and update customers</li>
                                    <li class="py-1"><i class="fas fa-check-circle me-2 text-primary"></i>The ability to view parts status & the latest photo taken</li>
                                    <li class="py-1"><i class="fas fa-check-circle me-2 text-primary"></i>Send invoices to the RO in seconds saving scan time</li>
                                    <li class="py-1"><i class="fas fa-check-circle me-2 text-primary"></i>Change vehicle status on the fly in real time</li>
                                    <li class="py-1"><i class="fas fa-check-circle me-2 text-primary"></i>View employee messages & supplement request plus supplement photos</li>
                                    <li class="py-1"><i class="fas fa-check-circle me-2 text-primary"></i>View customer messages from the customer app</li>
                                    <li class="py-1"><i class="fas fa-check-circle me-2 text-primary"></i>The ability to order receive & return parts from the app</li> --}}
                                </ul>

                                <h5 class="fw-bold mt-3">{{ $section_2->title_2 }}</h5>
                                @foreach ($section_list_2 as $list )
                                <ul class="list-unstyled d-flex flex-wrap mb-0">
                                    <li class="py-1"><i class="fas fa-check-circle me-2 text-primary"></i>{{ $list->list_title }}</li>
                                </ul>
                                @endforeach
                               
                                {{-- <ul class="list-unstyled  d-flex flex-wrap mb-0 ">
                                    <li class="py-1"><i class="fas fa-check-circle me-2 text-primary"></i>The ability to Sign all necessary authorizations</li>
                                </ul>
                                 <ul class="list-unstyled  d-flex flex-wrap mb-0 ">
                                    <li class="py-1"><i class="fas fa-check-circle me-2 text-primary"></i>Scan paint materials from consignment cabinet</li>
                                </ul>
                                <ul class="list-unstyled  d-flex flex-wrap mb-0 ">
                                    <li class="py-1"><i class="fas fa-check-circle me-2 text-primary"></i>Clock in & out of work from your phone</li>
                                </ul>
                                <ul class="list-unstyled  d-flex flex-wrap mb-0 ">
                                    <li class="py-1"><i class="fas fa-check-circle me-2 text-primary"></i>Clock in & out of Jobs while updating repair status</li>
                                </ul>
                                <ul class="list-unstyled  d-flex flex-wrap mb-0 ">
                                    <li class="py-1"><i class="fas fa-check-circle me-2 text-primary"></i>View all payments made by customer </li>
                                </ul> --}}
                                <a href="about-us.html" class="read-more-link text-decoration-none">Know More Contact Us <i class="far fa-arrow-right ms-2"></i></a>
                            </div>
                        <!-- </div> -->
                    </div>
                    <div class="col-lg-5 col-12">
                        <div class="feature-img-holder">
                            <img src="{{asset('uploads/home/'.$section_2['image_1'])}}" class="img-fluid" alt="feature-image">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="image-feature ptb-100 text-white" style="background: url('assets/img/bg-top-11.png')no-repeat center center; background-size: cover;">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 col-sm-12 m-auto">
                        <div class="feature-img-holder text-center">
                            <img src="{{asset('uploads/home/'.$section_3['image_1'])}}" class="img-fluid w-50" alt="feature-image">
                        </div>
                    </div>
                    <div class="col-lg-7 col-sm-12 m-auto">
                        <div class="row">
                            <!-- <div class="col-lg-10 col-sm-12 p-0 m-0 m-auto padd"> -->
                                <div class="feature-img-content-bg padd-2">
                                    <h2 class="text-white">{{ $section_3->title }}</h2>
                                        <h5 class="text-white">{!! $section_3->sub_title !!}</h5>
                                        @foreach ($section_list_3 as $list3)
                                        <ul class="list-unstyled  d-flex flex-wrap text-white mb-0">
                                            <li class="py-1"><i class="fas fa-check-circle me-2 text-white"></i>{{ $list3->list_title }}</li>
                                        </ul>
                                        @endforeach
                                  
                                    {{-- <ul class="list-unstyled  d-flex flex-wrap text-white mb-0">
                                        <li class="py-1"><i class="fas fa-check-circle me-2 text-white"></i>Clock in & out of work from your phone</li>
                                    </ul>
                                    <ul class="list-unstyled  d-flex flex-wrap text-white mb-0">
                                        <li class="py-1"><i class="fas fa-check-circle me-2 text-white"></i>Clock in & out of Jobs while updating repair status </li>
                                    </ul>
                                    <ul class="list-unstyled  d-flex flex-wrap text-white mb-0">
                                        <li class="py-1"><i class="fas fa-check-circle me-2 text-white"></i>Clock in & out of work from your phone </li>
                                    </ul>
                                    <ul class="list-unstyled  d-flex flex-wrap text-white mb-0">
                                        <li class="py-1"><i class="fas fa-check-circle me-2 text-white"></i>Photo list of all vehicles in process and their status</li>
                                    </ul>
                                    <ul class="list-unstyled  d-flex flex-wrap text-white mb-0">
                                        <li class="py-1"><i class="fas fa-check-circle me-2 text-white"></i>Ability to create supplement notes & take photos</li>
                                    </ul>
                                    <ul class="list-unstyled  d-flex flex-wrap text-white mb-0">
                                        <li class="py-1"><i class="fas fa-check-circle me-2 text-white"></i>Order paint and body shop supplies from your phone</li>
                                    </ul>
                                     <ul class="list-unstyled  d-flex flex-wrap text-white mb-0">
                                        <li class="py-1"><i class="fas fa-check-circle me-2 text-white"></i>Scan paint materials from consignment cabinet</li>
                                    </ul> --}}

                                </div>
                            <!-- </div> -->
                        </div>
                    </div>            
                </div>
            </div>
        </section>
        <section class="why-choose-us ptb-100" style=" background: #EDEAED;">
            <div class="container">
                <div class="row justify-content-lg-between align-items-center">
                    <div class="col-lg-7 col-sm-12 padd">
                        <!-- <div class="col-lg-10 m-auto"> -->
                            <div class="why-choose-content">
                                <h2>{{ $section_4->title }}</h2>
                                <p>{!! $section_4->sub_title !!}</p>
                                <ul class="list-unstyled  d-flex flex-wrap mb-0">
                                    @foreach ($section_list_4 as $list_4)
                                    <li class="py-1"><i class="fas fa-check-circle me-2 text-primary"></i>{{ $list_4->list_title }}</li>

                                    @endforeach
                                    {{-- <li class="py-1"><i class="fas fa-check-circle me-2 text-primary"></i>View in process photos and videos in real time</li>
                                    <li class="py-1"><i class="fas fa-check-circle me-2 text-primary"></i>Real time updated status from every production stage</li>
                                    <li class="py-1"><i class="fas fa-check-circle me-2 text-primary"></i>The ability to rate a shop while it is still in process</li>
                                    <li class="py-1"><i class="fas fa-check-circle me-2 text-primary"></i>View all messages coming from the repair facility</li>
                                    <li class="py-1"><i class="fas fa-check-circle me-2 text-primary"></i>The ability to sign all repair authorizations from the app</li> --}}
                                </ul>
                                <ul class="list-unstyled  d-flex flex-wrap ">
                                    <li class="py-1"><i class="fas fa-check-circle me-2 text-primary"></i>View estimates with a click</li>
                                </ul>
                                <a href="about-us.html" class="read-more-link text-decoration-none">Know More Contact Us <i class="far fa-arrow-right ms-2"></i></a>
                            </div>
                        <!-- </div> -->
                    </div>
                    <div class="col-lg-5 col-12">
                        <div class="feature-img-holder text-center">
                            <img src="assets/img/iamge4.png" class="img-fluid" alt="feature-image">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- APPS PAGE CONTENT -->

        <!--image feature section start-->
       <!--  <section class="image-feature ptb-120" style=" background: #EDEAED;">
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
        <!--image feature section end-->

        @endsection