@extends('master')
     @section('content')

        <!--hero section start-->
        <section class="hero-section ptb-120 text-white" style="background: url('assets/img/bg-top-11.png')no-repeat center; background-size:cover;">
            <div class="container">
                <div class="row align-items-center justify-content-lg-between">
                    <div class="col-lg-12 col-md-12 align-items-center m-auto padd" >
                        <div class="row">
                            <div class="hero-content-wrap">
                                <h1 class="fw-bold display-5 text-white mt-5">{{ $users->title1 }}</h1>
                                <p>{!! $users->sub_title1 !!}</p>
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
                                <!-- <h4>Agreement to Terms</h4> -->
                                <h4>{{ $users->title2 }}</h4>
                                <p>{!! $users->sub_title2 !!}</p>
                                {{-- <p>This Privacy Policy (“Policy”) covers Cyber Garage Global owned and operated websites (“Site” or “Sites”), including cybergaragellc.com and http://www.collisionrepairstatus.com/software/, and any services offered via the Site or other hosted service (collectively, the “Services”). These Services include services that assist our customers by providing solutions tailored to meet the specific business needs of the property & casualty and collision repair industries.</p>
                                <p>This Policy is incorporated into, and is part of, our Terms of Use which govern your access and use of the Site and/or Services. If you have entered into a separate written agreement with one of our businesses, that separate written agreement controls and those terms within this Policy that conflict with that separate written agreement do not apply. Unless otherwise defined herein, capitalized terms have the meaning assigned to such terms in the Terms of Use.</p>
                                 <p>The Policy describes the types of information we gather, use, transfer, and secure from visitors and users (“you” or “users”) of our Site and Services. By accessing any Site or using any Services, you agree to be bound by this Policy. This Policy does not govern information we receive from third parties. Each time you use any Site or Services, the current version of this Policy applies. Accordingly, when you use any Site or Services, please check the date of this Policy at the top of this page and review any changes made since you last reviewed the Policy.</p> --}}

                                 <p style="color:#000"><b>Note: If you do not agree to the terms of this Policy, do not use the Site or any of our Services.</b></p>

                                 <h4>{{ $users->title3 }}</h4>
                                 {{-- <p>We may collect two types of information from you: (i) information that you provide that can be used to identify you such as your name, email address, and account number (“Personal Information”) and (ii) information that cannot be used to identify you such as your frequency of visits to the Site and browser type (“Anonymized Information”).</p> --}}
                                <p>{!!$users->sub_title3  !!}</p>
                                 <h6>{{ $users->title4 }}</h6>
                                 <h6>{!!$users->sub_title4  !!}</h6>
                                 <h6>{{ $users->title5 }}</h6>
                                 <ul class="list-unstyled mb-0 ">
                                  @foreach ($list1 as $data )
                                  <li class="py-1"><i class="fas fa-check-circle me-2 text-primary"></i>{{ $data->list_title }}</li>
                                  @endforeach
                                </ul>
                                 {{-- <ul class="list-unstyled mb-0 ">
                                    <li class="py-1"><i class="fas fa-check-circle me-2 text-primary"></i>We collect Personal Information that you provide to us when you use our Services. For example, you may provide us with your email address, first name and last name, phone number, or other Personal Information.</li>
                                </ul>
                                <ul class="list-unstyled mb-0">
                                    <li class="py-1"><i class="fas fa-check-circle me-2 text-primary"></i>If you choose to share information publicly through our Site or Services, please understand that we cannot control the actions of third parties who may collect this public information.</li>
                                </ul>
                                <ul class="list-unstyled">
                                    <li class="py-1"><i class="fas fa-check-circle me-2 text-primary"></i>If you choose to share information publicly through our Site or Services, please understand that we cannot control the actions of third parties who may collect this public information.</li>
                                </ul>
                                <ul class="list-unstyled">
                                    <li class="py-1"><i class="fas fa-check-circle me-2 text-primary"></i>We may collect certain types of identifying information from our business customers through their use our products or services — including your Personal Information. We may link information we collect from our Business Customers with your Personal Information.</li>
                                </ul>

                                <ul class="list-unstyled">
                                    <li class="py-1"><i class="fas fa-check-circle me-2 text-primary"></i>We may collect Anonymized Information that does not individually identify you when you visit our Site or interact with our Services. We may also use one or more processes to deidentify Personal Information, such that only Anonymized Information remains. We may collect, use, store, and transfer Anonymized Information without restriction. </li>
                                </ul> --}}

                                <h5>{{ $users->sub_title5 }}</h5>
                                <p>We use Cookies for the following purposes:</p>
                                <ul class="list-unstyled mb-0">
                                    @foreach ($list2 as  $data)
                                    <li class="py-1"><i class="fas fa-check-circle me-2 text-primary"></i>{{ $data->list_title }}</li>

                                    @endforeach
                                </ul>
                                {{-- <ul class="list-unstyled">
                                    <li class="py-1"><i class="fas fa-check-circle me-2 text-primary"></i>Our Site uses cookies, tags, pixels, and similar tracking technologies (“Cookies”) to provide, customize, evaluate, improve, and secure our Site. A Cookie is a small piece of text that is placed on your website browser when you visit a website. These include our own first-party Cookies as well as third-party Cookies of our service providers and marketing partners. Some Cookies are only stored temporarily and destroyed each time you close your web browser. Our Site also uses persistent Cookies, which are not deleted when you close your browser and may collect and store data for a set period of time after you’ve left our Site. You can find out more about Cookies in general and how they work at Cookiepedia.</li>
                                </ul>
                                <ul class="list-unstyled mb-0">
                                    <li class="py-1"><i class="fas fa-check-circle me-2 text-primary"></i>Website Operation. Cookies help us run our Site securely and enable basic functions like page navigation.</li>
                                </ul>
                                <ul class="list-unstyled mb-0">
                                    <li class="py-1"><i class="fas fa-check-circle me-2 text-primary"></i>Performance and Analytics. Cookies help us analyze how you interact with our Site. This enables us to monitor and improve our Site performance, services, and your experience. For example, we use Google Analytics to analyze Site traffic, how the Services are used, and to improve of our advertising efforts. To disable Google Analytics, please download the Google Analytics Opt-Out Browser Add-On. You also have the option to opt out of Google's use of Cookies by changing your settings via Google’s advertising opt-out page.</li>
                                </ul>
                                <ul class="list-unstyled ">
                                    <li class="py-1"><i class="fas fa-check-circle me-2 text-primary"></i>Advertisements. Cookies allow us to deliver advertisements that are meaningful to you. Our third-party advertising partners may use the Cookies to build a profile of your interests, deliver relevant advertising on other websites, and measure the effectiveness of the advertisements.</li>
                                </ul>

                                <p>You can control Cookies in your browser settings. If you disable or reject certain Cookies, our Site or Service may not function as intended. For more information on how you can customize your browser’s Cookie setting, please visit the link corresponding to your web browser below:</p>
                                <ul class="list-unstyled mb-0">
                                    <li class="py-1"><i class="fas fa-check-circle me-2 text-primary"></i>Google Chrome</li>
                                </ul>
                                <ul class="list-unstyled mb-0">
                                    <li class="py-1"><i class="fas fa-check-circle me-2 text-primary"></i>Safari</li>
                                </ul>
                                <ul class="list-unstyled mb-0">
                                    <li class="py-1"><i class="fas fa-check-circle me-2 text-primary"></i>Internet Explorer</li>
                                </ul>
                                <ul class="list-unstyled">
                                    <li class="py-1"><i class="fas fa-check-circle me-2 text-primary"></i>Mozilla Firefox</li>
                                </ul> --}}
                                {{-- <p>Although we do our best to honor the privacy preferences of our visitors, we are not able to respond to “Do Not Track” signals from your browser. We are not responsible for the completeness, effectiveness, or accuracy of any third-party opt-out options or programs.</p> --}}
<p>{!! $users->title6 !!}</p>
                                <h5>{{ $users->sub_title6 }}</h5>
                                <p>{{ $users->title7 }}</p>
                                {{-- <p>We use your Personal Information and any other information that we collect:</p> --}}
                                <ul class="list-unstyled mb-0">
                                @foreach ($list3 as $data )
                                <li class="py-1"><i class="fas fa-check-circle me-2 text-primary"></i>{{ $data->list_title }}</li>
                                @endforeach
                            </ul>
                                {{-- <ul class="list-unstyled mb-0">
                                    <li class="py-1"><i class="fas fa-check-circle me-2 text-primary"></i>to present our Site and its contents to you;</li>
                                </ul>
                                <ul class="list-unstyled mb-0">
                                    <li class="py-1"><i class="fas fa-check-circle me-2 text-primary"></i>to provide you with information, products, or services that you request from us;</li>
                                </ul>
                                <ul class="list-unstyled mb-0">
                                    <li class="py-1"><i class="fas fa-check-circle me-2 text-primary"></i>to provide you with notices about our products and services;</li>
                                </ul>
                                <ul class="list-unstyled mb-0">
                                    <li class="py-1"><i class="fas fa-check-circle me-2 text-primary"></i>to carry out our obligations and enforce our rights arising from any contracts entered into between you and us, including for billing and collection;</li>
                                </ul>
                                <ul class="list-unstyled mb-0">
                                    <li class="py-1"><i class="fas fa-check-circle me-2 text-primary"></i>to notify you about changes to our Site or any products or services we offer or provide through it;</li>
                                </ul>
                                <ul class="list-unstyled mb-0">
                                    <li class="py-1"><i class="fas fa-check-circle me-2 text-primary"></i>to fulfill any other obligations described when you provide your information; and,</li>
                                </ul>
                                <ul class="list-unstyled ">
                                    <li class="py-1"><i class="fas fa-check-circle me-2 text-primary"></i>for any other purpose with your consent.</li>
                                </ul> --}}
                                <p>{!! $users->sub_title7 !!}</p>
                                {{-- <p>To the extent permitted by applicable law, we will retain your Personal Information only for as long as we believe it is necessary to fulfill the purposes for which it was collected, including for the purpose of meeting any legal, accounting, or other reporting requirements or obligations.</p> --}}

                                <h5>{{ $users->title8 }}</h5>
                                <p>{!! $users->sub_title8 !!}</p>
                                {{-- <p><b>a.</b> We may provide Personal Information to third parties for the purpose of providing the Services. We may disclose Personal Information to our affiliates or service providers to provide you with the Services. For example, we may transfer your Personal Information to service providers to: (i) assist with providing the Services; (ii) fulfill the purpose for which you provided it; or, (iii) communicate with you about current or future offerings. These service providers are not authorized to retain, share, store, or use Personal Information for any purposes other than to provide the services that they have been engaged to provide.</p> --}}
                                {{-- <p><b>b.</b> We may also transfer your Personal Information to third parties under the following circumstances: (i) to comply with a legal requirement, judicial proceeding, court order, or legal process served on us; (ii) to investigate a possible crime, such as fraud or identity theft; (iii) in connection with the sale, purchase, merger, reorganization, liquidation, or dissolution of Cyber Garage Global; (iv) when we believe it is necessary to protect the rights, property, or safety of a Cyber Garage Global or other persons; (v) to enforce or apply our Terms of Use and other agreements, including for billing and collection purposes; or (vi) as otherwise required or permitted by law, including any contractual obligations of Cyber Garage Global.</p> --}}

                                <h5>{{ $users->title9 }}</h5>
                                {{-- <p>We do not knowingly collect Personal Information from children in connection with the features of our Sites or Services. If we become aware that an individual under the age of 13 has provided Personal Information through our Sites or Services, we will immediately remove the individual’s Personal Information from our files.</p> --}}
                                   <p>{!! $users->sub_title9 !!}</p>
                                <h5>{{ $users->title10 }}</h5>
                                {{-- <p><b>a.</b> We take the security of your Personal Information very seriously. We use reasonable administrative, physical, and technical safeguards to secure your Personal Information. However, despite these safeguards, we cannot guarantee that unauthorized third parties will not access, alter, disclose, or destroy your Personal Information.</p> --}}
                                {{-- <p><b>b.</b> Any email or other communication purporting to be from one of our websites asking you to provide sensitive information (e.g., social security number, password, financial information, etc.) should be treated as unauthorized and suspicious. </p> --}}
<p>{!! $users->sub_title10 !!}</p>
                                <h5>{{ $users->title11 }}</h5>
                                <p>{!! $users->sub_title11 !!}</p>
                                {{-- <p>Some links on our Site may redirect you to third-party websites and services that we do not operate. The privacy practices of these websites and services are governed by their own policies. We make no representations or warranties as to the privacy practices of any third parties. If you are submitting information to any third party through our Site or Services, you should review and understand that party’s applicable privacy practices — including their privacy policy — before providing your information.</p> --}}

                                <h5>{{ $users->title12 }}</h5>
                                <p>{!! $users->sub_title12 !!}</p>
                                {{-- <p>If you are a resident of California, this section provides additional details about the personal information we collect about you, and your rights under the California Consumer Privacy Act, or “CCPA.”</p> --}}
                                {{-- <p>Subject to certain limitations, the CCPA provides you the right to request:</p> --}}
                                <ul class="list-unstyled mb-0">
                                    @foreach ($list4 as $data )
                                    <li class="py-1"><i class="fas fa-check-circle me-2 text-primary"></i>{{ $data->list_title }}</li>
                                    @endforeach
                                </ul>
                                {{-- <ul class="list-unstyled mb-0">
                                    <li class="py-1"><i class="fas fa-check-circle me-2 text-primary"></i>That we provide you access to details on the categories or specific pieces of personal information we collect and/or sell (including how we use and disclose this information, to whom we may sell it);</li>
                                </ul>
                                <ul class="list-unstyled mb-0">
                                    <li class="py-1"><i class="fas fa-check-circle me-2 text-primary"></i>That we delete any of your personal information;</li>
                                </ul>
                                <ul class="list-unstyled mb-0">
                                    <li class="py-1"><i class="fas fa-check-circle me-2 text-primary"></i>To opt out of any “sale” of your personal information that may occur; and</li>
                                </ul>
                                <ul class="list-unstyled">
                                    <li class="py-1"><i class="fas fa-check-circle me-2 text-primary"></i>To not be discriminated against for exercising any of the above rights.</li>
                                </ul> --}}
                                <p>{!! $users->title13 !!}</p>
                                {{-- <p>If you would like to submit a request to exercise your California privacy rights under the CCPA, you may contact us. We will verify your request using information associated with your account, including your email address. Further identification may be required. You may also designate an authorized agent to act on your behalf.</p> --}}

                                <p style="color: #000"><b>CYBER GARAGE will not sell your personal information without your prior consent.</b></p>
                                
                                <h5>{{ $users->sub_title13 }}</h5>
                                {{-- <p>If you are a resident of Nevada, Nevada law (SB 220), permits customers in Nevada to opt-out of the sale of certain kinds of personal information. A sale under Nevada law is the transfer of this personal information to third parties for monetary consideration so these third parties can then re-sell or license the sold information. CYBER GARAGE does not sell your personal information to third parties as defined in Nevada law. If you are a Nevada resident and wish to obtain information about our compliance with Nevada law, please contact us.</p> --}}
<p>{!! $users->title14 !!}</p>
                                <h5>{{ $users->sub_title14 }}</h5>
                                {{-- <p>Each time you use our Site or Services the current version of the Policy will apply. When you use our Site, you should check the date of this Policy, which appears at the top of the Policy, and review any changes since the last version. Our business changes frequently and this Policy is subject to change from time to time. Unless stated otherwise, our current Policy applies to all of your information that we possess. We will not materially change our policies and practices to make them less protective of your privacy without first notifying you and gaining your consent.</p> --}}
<p>{!! $users->title15 !!}</p>
                                <h5>{{ $users->sub_title15 }}</h5>
                                {{-- <p>To contact us with your questions or comments regarding this Policy or our information collection and dissemination practices, please email us at: <a class="text-primary" href="mailto:hellothemetags@gmail.com" style="text-decoration:none;">sales@cybergaragellc.com</a></p> --}}
<p>{!! $users->title16 !!}</p>
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
                                        <h2 class="text-capitalize mb-4">{{ $privacy_3->title }}</h2>
                                    </div>
                                </div>
                                <div class="col-md-8 m-auto">
                                    <ul class="list-unstyled  d-flex flex-wrap list-two-col ">
                                        @foreach ($privacy_list as $data)
                                        <li class="py-1"><i class="fas fa-check-circle me-2 text-primary"></i>{{ $data->list_item }}</li>

                                        @endforeach
                                        {{-- <li class="py-1"><i class="fas fa-check-circle me-2 text-primary"></i>Employee Time Clock </li>
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
                                <img src="{{asset('uploads/home/'.$privacy_3['section_8_image'])}}" class="img-fluid" alt="feature-image">
                        </div>
                    </div>
                    
                </div>
            </div>
        </section>
        <!--image feature section end-->

        @endsection