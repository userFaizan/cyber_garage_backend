@extends('master')
     @section('content')

        <!--header section end-->

        <!--register section start-->
        <section class="sign-up-in-section bg-dark ptb-120" style="background: url('assets/img/bg-top-11.png')no-repeat center; background-size: cover;">
            <div class="container">
                <div class="row align-items-center justify-content-between">
                    <div class="col-xl-6 col-lg-6 col-md-6 order-1 order-lg-0">
                        <div class="testimonial-tab-slider-wrap mt-5">
                            <h2 class="fw-bold text-white">{{ $section_1->title_1 }}</h2>
                             @foreach ($sectionlist as $data)
                             <ul class="list-unstyled  d-flex flex-wrap mb-0">
                                <li class="py-1"><i class="fas fa-check-circle me-2 text-white"></i>{{ $data->list_title }}</li>
                            </ul>
                             @endforeach
                          
                            {{-- <ul class="list-unstyled  d-flex flex-wrap mb-0">
                                <li class="py-1"><i class="fas fa-check-circle me-2 text-white"></i>Please review the Terms and Conditions and the Privacy Policy.</li>
                            </ul> --}}
                            {{-- <ul class="list-unstyled  d-flex flex-wrap mb-0">
                                <li class="py-1"><i class="fas fa-check-circle me-2 text-white"></i>The main shop contact person must create a username and password to access the system.</li>
                            </ul> --}}
                            {{-- <ul class="list-unstyled  d-flex flex-wrap">
                                <li class="py-1"><i class="fas fa-check-circle me-2 text-white"></i>You may need to wait up to 24 hours to receive your login information.</li>
                            </ul> --}}
                                <p>{{ $section_1->title_2 }}</p>
                            <!-- <hr class="text-white"> -->
                            <br>
                            <div class="row">
                                <div class="col-md-5">
                                    <ul class="list-unstyled">
                                        <li class="py-1"><i class="fas fa-phone-circle me-2 text-white"></i><a href="tel:559-647-7654" class="text-decoration-none text-white"> {{ $section_1->title_3 }} </a></li>
                                    </ul>
                                </div>
                                <div class="col-md-7">
                                    <ul class="list-unstyled">
                                        <li class="py-1"><i class="fas fa-envelope-circle me-2 "></i><a class="text-white" href="mailto:hellothemetags@gmail.com" style="text-decoration:none;">{{ $section_1->title_4 }}</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-5 col-lg-5 col-md-5 order-0 order-lg-1">
                        <div class="register-wrap p-5 mt-4 bg-white shadow rounded-custom mt-5 mt-lg-0 mt-xl-0">
                            <h3 class="fw-medium h4">Cyber Garage Subscription Form</h3>
                            <p>Please fill out form with the following information: </p>

                            <form action="{{route('subscription.store')}}" method="post" class="mt-4 register-form">
                            @csrf
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="input-group mb-3">
                                            <input type="text" class="form-control" name="c_name"  id="c_name"placeholder="Company Name" aria-label="name" required>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 ">
                                        <div class="input-group mb-3">
                                            <input type="text" class="form-control" name="c_address" id="c_address" placeholder="Company address" aria-label="company-address" required>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 ">
                                        <div class="input-group mb-3">
                                            <input type="text" class="form-control" name="city"  id="city" placeholder="City" aria-label="City" required>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 ">
                                        <div class="input-group mb-3">
                                            <input type="text" class="form-control" name="state" id="state" placeholder="State" aria-label="State" required>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 ">
                                        <div class="input-group mb-3">
                                            <input type="text" class="form-control" name="code"  id="code" placeholder="Zip Code" aria-label="zip-code" required>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 ">
                                        <div class="input-group mb-3">
                                            <input type="text" class="form-control" name="c_phone" id="c_phone" placeholder="Company Phone No." aria-label="company-phone" required>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="input-group mb-3">
                                            <input type="email" class="form-control" name="c_email" id="c_email" placeholder="Company Email" aria-label="company-email" required>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="input-group mb-3">
                                            <input type="text" class="form-control" name="f_name" id="f_name" placeholder="Contact First Name" aria-label="first-name" required>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="input-group mb-3">
                                            <input type="text" class="form-control" name="l_name" id="l_name" placeholder="Contact Last Name" aria-label="last-name" required>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="input-group mb-3">
                                            <input type="text" class="form-control" name="phone"  id="phone" placeholder="Contact Phone" aria-label="contact-phone" required>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="input-group mb-3">
                                            <input type="email" class="form-control" name="email" id="email" placeholder="Contact Email" aria-label="contact-email" required>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="input-group mb-3">
                                            <input type="text" class="form-control" name="username" id="username" placeholder="Need Contact Username" aria-label="contact-username" required>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="input-group mb-3">
                                            <input type="password" class="form-control" name="password" id="password"  placeholder="Password" aria-label="password" required>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <p><small>By clicking Create Account, you agree to the <a href="{{ route('terms') }}" target="_blank"> Terms of Use</a> and <a href="{{ route('privacy') }}" target="_blank"> Privacy Policy.</a></small></p>
                                        <button type="submit" id="butsave" class="btn btn-primary mt-4 d-block w-100"  data-toggle="modal" data-target="#myModal">Submit
                                        </button>
                                        
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--register section end-->

        <!--footer section start-->
        <script>
$(document).ready(function() {
   
    $('#butsave').on('click', function() {
      var c_name = $('#c_name').val();
      var c_address = $('#c_address').val();
      var city = $('#city').val();
      var state = $('#state').val();
      var code = $('#code').val();
      var c_phone = $('#c_phone').val();
      var c_email = $('#c_email').val();
      var number = $('#number').val();
      var f_name = $('#f_name').val();
      var l_name = $('#l_name').val();
      var phone = $('#phone').val();
      var email = $('#email').val();
      var username = $('#username').val();
      var password = $('#password').val();
      if(c_name!="" && email!="" && c_phone!="" && city!=""){
        /*  $("#butsave").attr("disabled", "disabled"); */
          $.ajax({
              url: "/subscription",
              type: "POST",
              data: {
                  _token: $("#csrf").val(),
                  type: 1,
                  c_name: c_name,
                  c_address: c_address,
                  state: state,
                  code: code
                  c_phone: c_phone
                  c_email: c_email
                  number: number
                  f_name: f_name
                  l_name: l_name
                  phone: phone
                  username: username
                  password: password
                 
              },
              cache: false,
              success: function(dataResult){
                  console.log(dataResult);
                  var dataResult = JSON.parse(dataResult);
                  if(dataResult.statusCode==200){
                    window.location = "/subscription";				
                  }
                  else if(dataResult.statusCode==201){
                     alert("Error occured !");
                  }
                  
              }
          });
      }
      else{
          alert('Please fill all the field !');
      }
  });
});
</script>
        @endsection

        <!-- @section('scripts') -->
        <script src="https://js.stripe.com/v3/"></script>
        <script>
    // Custom styling can be passed to options when creating an Element.
    // (Note that this demo uses a wider set of styles than the guide below.)
    // var style = {
    //     base: {
    //         color: '#32325d',
    //         lineHeight: '18px',
    //         fontFamily: '"Helvetica Neue", Helvetica, sans-serif',
    //         fontSmoothing: 'antialiased',
    //         fontSize: '16px',
    //         '::placeholder': {
    //             color: '#aab7c4'
    //         }
    //     },
    //     invalid: {
    //         color: '#fa755a',
    //         iconColor: '#fa755a'
    //     }
    // };

//     const stripe = Stripe('{{ env("STRIPE_KEY") }}', { locale: 'en' }); // Create a Stripe client.
//     const elements = stripe.elements(); // Create an instance of Elements.
//     const cardElement = elements.create('card', { style: style }); // Create an instance of the card Element.
//     const cardButton = document.getElementById('card-button');
//     const clientSecret = cardButton.dataset.secret;

//     cardElement.mount('#card-element'); // Add an instance of the card Element into the `card-element` <div>.

//     // Handle real-time validation errors from the card Element.
//     cardElement.addEventListener('change', function(event) {
//         var displayError = document.getElementById('card-errors');
//         if (event.error) {
//             displayError.textContent = event.error.message;
//         } else {
//             displayError.textContent = '';
//         }
//     });

//     // Handle form submission.
//     var form = document.getElementById('payment-form');

//     form.addEventListener('submit', function(event) {
//         event.preventDefault();

//         stripe
//             .handleCardSetup(clientSecret, cardElement, {
//                 payment_method_data: {
//                     //billing_details: { name: cardHolderName.value }
//                 }
//             })
//             .then(function(result) {
//                 console.log(result);
//                 if (result.error) {
//                     // Inform the user if there was an error.
//                     var errorElement = document.getElementById('card-errors');
//                     errorElement.textContent = result.error.message;
//                 } else {
//                     console.log(result);
//                     // Send the token to your server.
//                     stripeTokenHandler(result.setupIntent.payment_method);
//                 }
//             });
//     });

//     // Submit the form with the token ID.
//     function stripeTokenHandler(paymentMethod) {
//         // Insert the token ID into the form so it gets submitted to the server
//         var form = document.getElementById('payment-form');
//         var hiddenInput = document.createElement('input');
//         hiddenInput.setAttribute('type', 'hidden');
//         hiddenInput.setAttribute('name', 'paymentMethod');
//         hiddenInput.setAttribute('value', paymentMethod);
//         form.appendChild(hiddenInput);

//         // Submit the form
//         form.submit();
//     }
// </script>

<!-- // @endsection -->