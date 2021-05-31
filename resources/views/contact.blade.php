@extends('layouts.site')

@section('content')
    <section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_4.jpg');">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-end">
                <div class="col-md-9 ftco-animate pb-5">
                    <p class="breadcrumbs">
                        <span class="mr-2"><a href="/">Home <i class="fa fa-chevron-right"></i></a></span>
                        <span>Contact us</span></p>
                    <h1 class="mb-0 bread">Contact us</h1>
                </div>
            </div>
        </div>
    </section>
    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="wrapper">
                        <div class="row no-gutters">
                            <div class="col-md-7 d-flex align-items-stretch">
                                <div class="contact-wrap w-100 p-md-5 p-4">
                                    <!-- Success message -->
                                    @if(Session::has('success'))
                                        <div class="alert alert-success">
                                            {{Session::get('success')}}
                                        </div>
                                    @endif
                                    <h3 class="mb-4">Get in touch</h3>
                                    <form action="" method="post" action="/contact">

                                        @csrf

                                        <div class="form-group">
                                            <label>Name</label>
                                            <input type="text" class="form-control {{ $errors->has('name') ? 'error' : '' }}" name="name" id="name" value="{{ old('name') }}">

                                            <!-- Error -->
                                            @if ($errors->has('name'))
                                            <div class="text-danger">
                                                {{ $errors->first('name') }}
                                            </div>
                                            @endif
                                        </div>

                                        <div class="form-group">
                                            <label>Email</label>
                                            <input type="email" class="form-control {{ $errors->has('email') ? 'error' : '' }}" name="email" id="email" value="{{ old('email') }}">

                                            @if ($errors->has('email'))
                                            <div class="text-danger">
                                                {{ $errors->first('email') }}
                                            </div>
                                            @endif
                                        </div>

                                        <div class="form-group">
                                            <label>Phone</label>
                                            <input type="text" class="form-control {{ $errors->has('phone') ? 'error' : '' }}" name="phone" id="phone" value="{{ old('phone') }}">

                                            @if ($errors->has('phone'))
                                            <div class="text-danger">
                                                {{ $errors->first('phone') }}
                                            </div>
                                            @endif
                                        </div>

                                        <div class="form-group">
                                            <label>Subject</label>
                                            <input type="text" class="form-control {{ $errors->has('subject') ? 'error' : '' }}" name="subject" id="subject" value="{{ old('subject') }}">

                                            @if ($errors->has('subject'))
                                            <div class="text-danger">
                                                {{ $errors->first('subject') }}
                                            </div>
                                            @endif
                                        </div>

                                        <div class="form-group">
                                            <label>Message</label>
                                            <textarea class="form-control {{ $errors->has('message') ? 'error' : '' }}" name="message" id="message" rows="4">{{ old('message') }}</textarea>

                                            @if ($errors->has('message'))
                                            <div class="text-danger">
                                                {{ $errors->first('message') }}
                                            </div>
                                            @endif
                                        </div>

                                        <input type="submit" name="send" value="Submit" class="btn btn-dark btn-block">
                                    </form>
                                </div>
                            </div>
                            <div class="col-md-5 d-flex align-items-stretch">
                                <div class="info-wrap bg-darken w-100 p-lg-5 p-4">
                                    <h3 class="mb-4 mt-md-4">Contact us</h3>
                                    <div class="dbox w-100 d-flex align-items-start">
                                        <div class="icon d-flex align-items-center justify-content-center">
                                            <span class="fa fa-map-marker"></span>
                                        </div>
                                        <div class="text pl-3">
                                            <p><span>Address:</span> Pretoria, Gauteng, South Africa</p>
                                        </div>
                                    </div>
                                    <div class="dbox w-100 d-flex align-items-center">
                                        <div class="icon d-flex align-items-center justify-content-center">
                                            <span class="fa fa-phone"></span>
                                        </div>
                                        <div class="text pl-3">
                                            <p><span>Phone:</span> +27 82 651 2384</p>
                                        </div>
                                    </div>
                                    <div class="dbox w-100 d-flex align-items-center">
                                        <div class="icon d-flex align-items-center justify-content-center">
                                            <span class="fa fa-paper-plane"></span>
                                        </div>
                                        <div class="text pl-3">
                                            <p><span>Email:</span> info@itecassist.co.za</a>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="dbox w-100 d-flex align-items-center">
                                        <div class="icon d-flex align-items-center justify-content-center">
                                            <span class="fa fa-globe"></span>
                                        </div>
                                        <div class="text pl-3">
                                            <p><span>Website: </span> <a href="/">itecassist.co.za</a></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@livewire('site.newsletter')
@endsection
