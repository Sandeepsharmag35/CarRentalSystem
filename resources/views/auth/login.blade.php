@extends('header')
@section('content')

<!-- content begin -->

    <div id="top"></div>
    <section id="section-hero" aria-label="section" class="jarallax">
        <img src="{{ asset('images/background/2.jpg') }}" class="jarallax-img" alt="">
        <div class="v-center">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-4 offset-lg-4">
                        <div class="padding40 rounded-3 shadow-soft" data-bgcolor="#ffffff">
                            <h4>Login</h4>
                            <div class="spacer-10"></div>
                            <form id="form_login" class="form-border" method="post" action="{{ route('login') }}">
                                @csrf
                                <div class="field-set">
                                    <input type="text" name="email" id="email" class="form-control" placeholder="Email" />
                                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                </div>
                                <div class="field-set">
                                    <input type="password" name="password" id="password" class="form-control" placeholder="Password" />
                                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                                </div>
                                <div id="submit">
                                    <input type="submit" id="send_message" value="Sign In" class="btn-main btn-fullwidth rounded-3" />
                                </div>
                            </form>
                            <div class="title-line">Or</div>
                            <div class="row g-2">
                                <a href="{{ route('register') }}" class="btn-main btn-fullwidth rounded-3">Register</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


        <script src="{{asset('js/plugins.js')}}"></script>
    <script src="{{asset('js/designesia.js')}}"></script>
        <!-- content close -->
@endsection