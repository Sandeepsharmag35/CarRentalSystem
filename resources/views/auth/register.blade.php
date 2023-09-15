

            
@extends('header')
@section('content')
<!-- content begin -->

            <div id="top"></div>
            
            <!-- section begin -->
            <section id="subheader" class="jarallax text-light">
                <img src="images/background/subheader.jpg" class="jarallax-img" alt="">
                    <div class="center-y relative text-center">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12 text-center">
									<h1>Register</h1>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
            </section>
            <!-- section close -->
            <section aria-label="section">
                <div class="container">
					<div class="row">
						<div class="col-md-8 offset-md-2">
							<h3>Don't have an account? Register now.</h3>
                            <p>Welcome to Rentaly. We're excited to have you on board. By creating an account with us, you'll gain access to a range of benefits and convenient features that will enhance your car rental experience.</p>
							
							<div class="spacer-10"></div>
							
							<form name="contactForm" id='contact_form' class="form-border" method="post" action="{{route('register')}}">
                            @csrf
                                <div class="row">

                                    <div class="col-md-6">
                                        <div class="field-set">
                                            <label>Name:</label>
                                            <input type='text' name='name' id='name' class="form-control">
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="field-set">
                                            <label>Email Address:</label>
                                            <input type='text' name='email' id='email' class="form-control" required autocomplete="username">
                                        </div>
                                    </div>

                                    
                                    <div class="col-md-6">
                                        <div class="field-set">
                                            <label>Password:</label>
                                            <input type='password' name='password' id='password' class="form-control" required autocomplete="new-password">
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="field-set">
                                            <label>Re-enter Password:</label>
                                            <input type='password' name='password_confirmation' id='password_confirmation' class="form-control" required autocomplete="new-password">
                                        </div>
                                    </div>


                                    <div class="col-md-12">

                                        <div id='submit' class="pull-left">
                                            <input type='submit' id='send_message' value='Register Now' class="btn-main color-2">
                                        </div>

                                    </div>

                                </div>
                            </form>
							
						</div>
                    </div>
				</div>
            </section>
			
			
       
        @endsection