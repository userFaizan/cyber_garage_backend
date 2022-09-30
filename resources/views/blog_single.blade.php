@extends('master')
     @section('content')
        <!--header section end-->

        <!--page header section start-->
        <section class="hero-section ptb-120 text-white" style="background: url('{{asset('assets/img/bg-top-11.png')}}')no-repeat center; background-size:cover;">
            <div class="container">
                <div class="row align-items-center justify-content-lg-between">
                    <div class="col-lg-12 col-md-12 align-items-center m-auto padd" >
                        <div class="row">
                            <div class="hero-content-wrap">
                                <h1 class="fw-bold display-5 text-white mt-5">{!!$result[0]->title!!} </h1>
                                <p>{!!$result[0]->sub_title!!}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--page header section end-->

        <!--blog details section start-->
        <section class="blog-details ptb-120" style=" background: #EDEAED;">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-lg-8 pe-lg-5">
                        <div class="blog-details-wrap">
                            <!-- <h2> </h2> -->
                            <!-- <p class="text-muted">Be Careful When Going Through Insurance Using their “Preferred” Body Shops.</p>
                            <p>When you’re in an accident it can be a stressful experience. Taking time and making the right decisions is key. Some insurance companies lead you in a way that they want you to, by persuading you to go with repair shops they favor. As a result, your vehicle may not be repaired to the best standard and leave you unsafe. This is known as insurance ‘steering’ and is a common agreement between businesses.</p> -->

                            <div class="blog-details-info mt-5">
                            {!!$result[0]->discription!!}
                               <!--  <blockquote class="bg-white custom-shadow p-5 mt-5 rounded-custom border-4 border-primary border-top">
                                    <p class="text-muted"><i class="fas fa-quote-left me-2 text-primary"></i> Globally network long-term high-impact schemas vis-a-vis distinctive e-commerce
                                        cross-media infrastructures rather than ethical. Credibly visualize distinctive testing procedures without end-to-end ROI. Seamlessly brand cross-platform communities with backend markets. Assertively utilize business services through robust solutions. Rapidiously deliver cross-unit infrastructures rather than accurate metrics.
                                        <i class="fas fa-quote-right ms-2 text-primary"></i>
                                    </p>
                                </blockquote> -->
                            </div>
                            <!-- <img src="assets/img/tab-feature-img-4.png" class="img-fluid mt-4 rounded-custom" alt="apply"> -->
                            <!-- <div class="job-details-info mt-5">
                                <h3 class="h5">Focus on increasing customer retention first</h3>
                                <p>Appropriately fashion ubiquitous information without future-proof growth strategies. Interactively morph cutting-edge e-business before functional potentialities. Compellingly syndicate empowered communities via multimedia based schemas. Objectively productize granular materials whereas quality solutions. Collaboratively reinvent innovative paradigms and low-risk high-yield action items.</p>
                                <ul class="content-list list-unstyled">
                                    <li>Interactively plagiarize covalent "outside the box" thinking vis-a-vis.</li>
                                    <li>Holisticly communicate integrated channels via backend interfaces. Authoritatively.
                                    </li>
                                    <li>Globally actualize effective processes through synergistic ROI. Interactively.</li>
                                </ul>
                            </div> -->

                            <!-- <div class="blog-details-info mt-5">
                                <h3 class="h5">Skill & Experience</h3>
                                <ul class="content-list list-unstyled">
                                    <li>You have at least 3 years’ experience working as a Product Designer.</li>
                                    <li>You have experience using Sketch and InVision or Framer X</li>
                                    <li>You have some previous experience working in an agile environment – Think two-week sprints.</li>
                                    <li>You are familiar using Jira and Confluence in your workflow</li>
                                </ul>
                            </div> -->

                            <!-- <img src="assets/img/tab-feature-img-2.png" class="img-fluid mt-5 rounded-custom" alt="apply"> -->
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="author-wrap text-center bg-light p-5 sticky-sidebar rounded-custom mt-5 mt-lg-0">
                            <!-- <img src="assets/img/team/team-2.jpg" alt="author" width="120" class="img-fluid shadow-sm rounded-circle"> -->
                            <div class="author-info my-4">
                                <h5 class="mb-0">Robert Williams</h5>
                                <span class="small">The Fonder of Cyber Garage</span>
                            </div>
                            <p>“Some people want it to happen, some wish it would happen,others make it happen<br><br><b>Michael Jordan,</b></p>
                            <ul class="list-unstyled author-social-list list-inline mt-3 mb-0">
                                <li class="list-inline-item"><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                <li class="list-inline-item"><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li class="list-inline-item"><a href="#"><i class="fab fa-github"></i></a></li>
                                <li class="list-inline-item"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!--newsletter subscription container start-->
            <!-- <div class="container">
                <div class="bg-dark ptb-60 px-5 mt-100 position-relative overflow-hidden rounded-custom" style="background: url('assets/img/page-header-bg.svg')no-repeat center bottom">
                    <div class="row justify-content-center">
                        <div class="col-lg-8 col-md-9">
                            <div class="subscribe-info-wrap text-center position-relative z-2">
                                <div class="section-heading">
                                    <h4 class="h5 text-warning">For Latest News & Update</h4>
                                    <h2>Want Receive the Best SAAS Insights? Subscribe Now!</h2>
                                    <p>We can help you to create your dream website for better business revenue.</p>
                                </div>
                                <div class="form-block-banner mw-60 m-auto mt-5">
                                    <form id="email-form2" name="email-form" class="subscribe-form d-flex">
                                        <input type="email" class="form-control me-2" name="Email" data-name="Email" placeholder="Enter your email" id="Email2" required="">
                                        <input type="submit" value="Join!" data-wait="Please wait..." class="btn btn-primary">
                                    </form>
                                </div>
                                <ul class="nav justify-content-center subscribe-feature-list mt-3">
                                    <li class="nav-item">
                                        <span><i class="fad fa-dot-circle text-primary me-2"></i>Don’t worry we won’t send you spam</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="bg-circle rounded-circle circle-shape-1 position-absolute bg-dark-light left-5"></div>
                </div>
            </div> -->
            <!--newsletter subscription container end-->
        </section>
        <!--blog details section end-->

        <!--related blog start-->
        <!-- <section class="related-blog-list ptb-120 bg-light">
            <div class="container">
                <div class="row align-items-center justify-content-between">
                    <div class="col-lg-4 col-md-12">
                        <div class="section-heading">
                            <h4 class="h5 text-primary">Related News</h4>
                            <h2>More Latest News and Blog at Quiety</h2>
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-12">
                        <div class="text-start text-lg-end mb-4 mb-lg-0 mb-xl-0">
                            <a href="blog.html" class="btn btn-primary">View All Article</a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="single-article rounded-custom mb-4 mb-lg-0">
                            <a href="blog-single.html" class="article-img">
                                <img src="assets/img/blog/blog-1.jpg" alt="article" class="img-fluid">
                            </a>
                            <div class="article-content p-4">
                                <div class="article-category mb-4 d-block">
                                    <a href="javascript:;" class="d-inline-block text-dark badge bg-warning-soft">Design</a>
                                </div>
                                <a href="blog-single.html">
                                    <h2 class="h5 article-title limit-2-line-text">Do you really understand the concept of product value?</h2>
                                </a>
                                <p class="limit-2-line-text">Society is fragmenting into two parallel realities. In one reality, you have infinite upside and opportunity. In the other reality, you’ll continue to see the gap between your standard of living and those at the top grow more and more.</p>

                                <a href="javascript:;">
                                    <div class="d-flex align-items-center pt-4">
                                        <div class="avatar">
                                            <img src="assets/img/testimonial/6.jpg" alt="avatar" width="40" class="img-fluid rounded-circle me-3">
                                        </div>
                                        <div class="avatar-info">
                                            <h6 class="mb-0 avatar-name">Jane Martin</h6>
                                            <span class="small fw-medium text-muted">April 24, 2021</span>
                                        </div>
                                    </div>
                                </a>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="single-article rounded-custom mb-4 mb-lg-0">
                            <a href="blog-single.html" class="article-img">
                                <img src="assets/img/blog/blog-2.jpg" alt="article" class="img-fluid">
                            </a>
                            <div class="article-content p-4">
                                <div class="article-category mb-4 d-block">
                                    <a href="javascript:;" class="d-inline-block text-dark badge bg-primary-soft">Customer</a>
                                </div>
                                <a href="blog-single.html">
                                    <h2 class="h5 article-title limit-2-line-text">Why communities help you build better products for your business</h2>
                                </a>
                                <p class="limit-2-line-text">Society is fragmenting into two parallel realities. In one reality, you have infinite upside and opportunity. In the other reality, you’ll continue to see the gap between your standard of living and those at the top grow more and more.</p>

                                <a href="javascript:;">
                                    <div class="d-flex align-items-center pt-4">
                                        <div class="avatar">
                                            <img src="assets/img/testimonial/1.jpg" alt="avatar" width="40" class="img-fluid rounded-circle me-3">
                                        </div>
                                        <div class="avatar-info">
                                            <h6 class="mb-0 avatar-name">Veronica P. Byrd</h6>
                                            <span class="small fw-medium text-muted">April 24, 2021</span>
                                        </div>
                                    </div>
                                </a>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="single-article rounded-custom mb-4 mb-lg-0 mb-md-0">
                            <a href="blog-single.html" class="article-img">
                                <img src="assets/img/blog/blog-3.jpg" alt="article" class="img-fluid">
                            </a>
                            <div class="article-content p-4">
                                <div class="article-category mb-4 d-block">
                                    <a href="javascript:;" class="d-inline-block text-dark badge bg-danger-soft">Development</a>
                                </div>
                                <a href="blog-single.html">
                                    <h2 class="h5 article-title limit-2-line-text">Why communities help you build better products</h2>
                                </a>
                                <p class="limit-2-line-text">Society is fragmenting into two parallel realities. In one reality, you have infinite upside and opportunity. In the other reality, you’ll continue to see the gap between your standard of living and those at the top grow more and more.</p>

                                <a href="javascript:;">
                                    <div class="d-flex align-items-center pt-4">
                                        <div class="avatar">
                                            <img src="assets/img/testimonial/3.jpg" alt="avatar" width="40" class="img-fluid rounded-circle me-3">
                                        </div>
                                        <div class="avatar-info">
                                            <h6 class="mb-0 avatar-name">Martin Gilbert</h6>
                                            <span class="small fw-medium text-muted">April 24, 2021</span>
                                        </div>
                                    </div>
                                </a>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> -->
        <!--related blog end-->

        <!--cat subscribe start-->
        <!-- <section class="cta-subscribe bg-dark ptb-120 position-relative overflow-hidden">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8 col-md-10">
                        <div class="subscribe-info-wrap text-center position-relative z-2">
                            <div class="section-heading">
                                <h4 class="h5 text-warning">Let's Try! Get Free Support</h4>
                                <h2>Start Your 14-Day Free Trial</h2>
                                <p>We can help you to create your dream website for better business revenue.</p>
                            </div>
                            <div class="form-block-banner mw-60 m-auto mt-5">
                                <a href="contact-us.html" class="btn btn-primary">Contact with Us</a>
                                <a href="http://www.youtube.com/watch?v=hAP2QF--2Dg" class="text-decoration-none popup-youtube d-inline-flex align-items-center watch-now-btn ms-lg-3 ms-md-3 mt-3 mt-lg-0"> <i
                                            class="fas fa-play"></i> Watch Demo </a>
                            </div>
                            <ul class="nav justify-content-center subscribe-feature-list mt-4">
                                <li class="nav-item">
                                    <span><i class="far fa-check-circle text-primary me-2"></i>Free 14-day trial</span>
                                </li>
                                <li class="nav-item">
                                    <span><i
                                            class="far fa-check-circle text-primary me-2"></i>No credit card required</span>
                                </li>
                                <li class="nav-item">
                                    <span><i class="far fa-check-circle text-primary me-2"></i>Support 24/7</span>
                                </li>
                                <li class="nav-item">
                                    <span><i class="far fa-check-circle text-primary me-2"></i>Cancel anytime</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="bg-circle rounded-circle circle-shape-3 position-absolute bg-dark-light left-5"></div>
                <div class="bg-circle rounded-circle circle-shape-1 position-absolute bg-warning right-5"></div>
            </div>
        </section> -->
        <!--cat subscribe end-->

        @endsection