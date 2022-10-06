@extends('master')
     @section('content')


        <!--hero section start-->
        <section class="hero-section ptb-120 text-white" style="background: url('assets/img/bg-top-11.png')no-repeat center; background-size:cover;">
            <div class="container">
                <div class="row align-items-center justify-content-lg-between">
                    <div class="col-lg-7 col-md-7 align-items-center m-auto" >
                        <div class="row">
                            <div class="hero-content-wrap">
                                <h1 class="fw-bold display-5 mt-5 text-white">Videos</h1>
                                <p>The Most advanced app on the market<br>
                                    The mobile apps are included in the management system</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-5 m-auto">
                        <div class="hero-content-wrap">
                            <p class="lead">There are training video tutorials related to Cyber Garage software for easy Learning.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--hero section end-->

        <!-- APPS PAGE CONTENT -->
        <section class="why-choose-us ptb-100" style=" background: #EDEAED;">
            <div class="container-fluid">
                <div class="row justify-content-lg-between align-items-center">
                    <div class="col-lg-11 col-12 m-auto text-center">
                        <div class="row">
                            <div class="col-lg-3 col-md-6 col-sm-6 m-auto mb-2">
                                <iframe width="100%" height="200" src="https://www.youtube.com/embed/gTtGngc281k"></iframe>
                                 <h4 class="mt-3">Job costing in Cyber Garage </h4>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6 m-auto mb-2">
                                <iframe width="100%" height="200" src="https://www.youtube.com/embed/grSzTEpd2ns"></iframe>
                                <h4 class="mt-3">scheduling customers in Cyber Garage</h4>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6 m-auto mb-2">
                                <iframe width="100%" height="200" src="https://www.youtube.com/embed/wpqn9ZUTSjo"></iframe>
                                <h4 class="mt-3">How to order parts in Cyber Garage</h4>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6 m-auto mb-2">
                                <iframe width="100%" height="200" src="https://www.youtube.com/embed/Ip3XuuVG6CU"></iframe>
                                <h4 class="mt-3">Parts activity manager # 1</h4>
                            </div>
                        </div>
                        <!-- 21:9 aspect ratio -->
                    </div>
                </div>
            </div>
        </section>

        <!-- APPS PAGE CONTENT -->

        <!--image feature section start-->
        <!-- <section class="image-feature ptb-120 pt-0" style=" background: #EDEAED;">
            <div class="container">
                <div class="row">
                    <div class="col-lg-10 col-sm-12 m-auto padd">
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

        <section class="image-feature ptb-60 pt-5" style=" background: #EDEAED;">
            <div class="container">
                <div class="row">
                    <div class="col-lg-10 col-sm-12 m-auto padd">
                        <div class="feature-img-content-bg">
                            <div class="row">
                                <div class="col-md-4 m-auto">
                                    <div class="d-flex align-items-center justify-content-lg-between">
                                        <h2 class="text-capitalize mb-4">What we offer</h2>
                                    </div>
                                </div>
                                <div class="col-md-8 m-auto">
                                    <ul class="list-unstyled  d-flex flex-wrap list-two-col ">
                                        <li class="py-1"><i class="fas fa-check-circle me-2 text-primary"></i>User friendly dashboard</li>
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
                                        <li class="py-1"><i class="fas fa-check-circle me-2 text-primary"></i>And Much More!</li>
                                    </ul>
                                </div>
                            </div>
                                <img src="assets/img/screen/5th-img.png" class="img-fluid" alt="feature-image">
                        </div>
                    </div>
                    
                </div>
            </div>
        </section>
        <!--image feature section end-->
        @endsection