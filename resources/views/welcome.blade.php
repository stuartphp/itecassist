@extends('layouts.site')

@section('content')
<section class="hero-wrap">
    <div class="home-slider owl-carousel js-fullheight">
        <div class="slider-item js-fullheight" style="background-image:url(images/bg_1.jpg);">
            <div class="overlay"></div>
            <div class="container">
                <div class="row d-flex no-gutters slider-text js-fullheight align-items-center align-items-stretch">
                    <div class="col-md-7 ftco-animate d-flex align-items-center">
                        <div class="text w-100 mt-5">
                            <span class="subheading">Welcome to itec assist</h2></span>
                            <h1>Digital Innovation Company that Creates Solution</h1>
                            <p class="mb-4">We design, build, deploy and maintain innovative custom software that gives our clients the opportunity to start, run and grow world class businesses.</p>
                                <p><a href="/contact" class="btn btn-primary">Contact Us</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="slider-item js-fullheight" style="background-image:url(images/bg_2.jpg);">
            <div class="overlay"></div>
            <div class="container">
                <div class="row d-flex no-gutters slider-text js-fullheight align-items-center align-items-stretch">
                    <div class="col-md-7 ftco-animate d-flex align-items-center">
                        <div class="text w-100 mt-5">
                            <span class="subheading">Creative Portfolio</h2></span>
                            <h1>Professional &amp; Creative Design Solution</h1>
                            <p class="mb-4">Design is perhaps the most important aspect of web design overall, as it is the element that brings people in, and keeps them there..</p>
                            <p><a href="/contact" class="btn btn-primary">Contact Us</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="ftco-section ftco-services">
    <div class="container">
        <div class="row">
            <div class="col-md-12 d-flex align-self-stretch ftco-animate">
                <div class="pb-4 heading-section heading-section">
                    <h2 class="mb-3">We create The Perfect Solutions</h2>
                    <p class="mb-4"> As a professional Software Development company. When designing a website, we understand that consistent brand identity is key, and we are always thinking about the big picture. With this, we can provide you with a website that makes people want to stick around, which is really everyone’s main goal. Creating a website that is interesting, engaging, and different from all your competitors will make people remember you and will also up the chances of them buying your product or services. Content is also important when it comes to web design,which is something we take into consideration. With good content and quality design, you can’t go wrong.</p>
                </div>
            </div>
            <!-- <div class="col-md-3 d-flex align-self-stretch ftco-animate">
                <div class="services">
                    <div class="d-flex justify-content-end">
                        <div class="icon d-flex"><span class="flaticon-bullhorn"></span></div>
                    </div>
                    <div class="media-body">
                        <h3 class="heading mb-3">Digital <br>Products</h3>
                    </div>
                    <a href="/products/digital" class="btn-custom d-flex align-items-center justify-content-center"><span
                            class="fa fa-chevron-right"></span></a>
                </div>
            </div> -->
            <div class="col-md-3 d-flex align-self-stretch ftco-animate">
                <div class="services">
                    <div class="d-flex justify-content-end">
                        <div class="icon d-flex"><span class="flaticon-stats"></span></div>
                    </div>
                    <div class="media-body">
                        <h3 class="heading mb-3">Online <br>Marketing</h3>
                    </div>
                    <a href="/products/online" class="btn-custom d-flex align-items-center justify-content-center"><span
                            class="fa fa-chevron-right"></span></a>
                </div>
            </div>
          <!--   <div class="col-md-3 d-flex align-self-stretch ftco-animate">
                <div class="services">
                    <div class="d-flex justify-content-end">
                        <div class="icon d-flex"><span class="flaticon-vector"></span></div>
                    </div>
                    <div class="media-body">
                        <h3 class="heading mb-3">Graphic <br>Design</h3>
                    </div>
                    <a href="/products/graphic" class="btn-custom d-flex align-items-center justify-content-center"><span
                            class="fa fa-chevron-right"></span></a>
                </div>
            </div> -->
            <div class="col-md-3 d-flex align-self-stretch ftco-animate">
                <div class="services">
                    <div class="d-flex justify-content-end">
                        <div class="icon d-flex"><span class="flaticon-branding"></span></div>
                    </div>
                    <div class="media-body">
                        <h3 class="heading mb-3">Application <br>Development</h3>
                    </div>
                    <a href="/products/application" class="btn-custom d-flex align-items-center justify-content-center"><span
                            class="fa fa-chevron-right"></span></a>
                </div>
            </div>
            <div class="col-md-3 d-flex align-self-stretch ftco-animate">
                <div class="services">
                    <div class="d-flex justify-content-end">
                        <div class="icon d-flex"><span class="flaticon-web-programming"></span></div>
                    </div>
                    <div class="media-body">
                        <h3 class="heading mb-3">Web <br>Development</h3>
                    </div>
                    <a href="/products/web" class="btn-custom d-flex align-items-center justify-content-center"><span
                            class="fa fa-chevron-right"></span></a>
                </div>
            </div>
            <div class="col-md-3 d-flex align-self-stretch ftco-animate">
                <div class="services">
                    <div class="d-flex justify-content-end">
                        <div class="icon d-flex"><span class="flaticon-ux"></span></div>
                    </div>
                    <div class="media-body">
                        <h3 class="heading mb-3">UX/UI <br>Design</h3>
                    </div>
                    <a href="/products/ui" class="btn-custom d-flex align-items-center justify-content-center"><span
                            class="fa fa-chevron-right"></span></a>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="ftco-section ftco-about ftco-no-pt ftco-no-pb img">
    <div class="container">
        <div class="row d-flex">
            <div class="col-md-12 about-intro">
                <div class="row d-flex">
                    <div class="col-md-6 d-flex align-items-stretch">
                        <div class="img d-flex align-items-center align-self-stretch justify-content-center"
                            style="background-image:url(images/about-1.jpg);">
                        </div>
                    </div>
                    <div class="col-md-6 pl-md-5 py-5">
                        <div class="row justify-content-start pb-3 pt-md-5">
                            <div class="col-md-12 heading-section ftco-animate">
                                <span class="subheading">Welcome to itec assist</span>
                                <h2 class="mb-4">Highest <br>Creative Standards</h2>
                                <p>Far far away, behind the word mountains, far from the countries Vokalia and
                                    Consonantia, there live the blind texts. Separated they live in Bookmarksgrove
                                    right at the coast of the Semantics, a large language ocean. A small river named
                                    Duden flows by their place and supplies it with the necessary regelialia.</p>
                                <p>Far far away, behind the word mountains, far from the countries Vokalia and
                                    Consonantia, there live the blind texts. Separated they live in Bookmarksgrove
                                    right at the coast of the Semantics, a large language ocean. A small river named
                                    Duden flows by their place and supplies it with the necessary regelialia.</p>
                                <p>Far far away, behind the word mountains, far from the countries Vokalia and
                                    Consonantia, there live the blind texts. Separated they live in Bookmarksgrove
                                    right at the coast of the Semantics, a large language ocean. A small river named
                                    Duden flows by their place and supplies it with the necessary regelialia.</p>
                                <div class="year-stablish d-flex">
                                    <div class="icon2 d-flex align-items-center justify-content-center"><span
                                            class="flaticon-light-bulb"></span></div>
                                    <div class="text pl-4">
                                        <strong class="number" data-number="40">0</strong>
                                        <span>Year Of<br> Experienced</span>
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
<!-- <section class="ftco-section ftco-counter img" id="section-counter" style="background-image: url(images/bg_4.jpg);">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-3 d-flex counter-wrap ftco-animate">
                <div class="block-18 d-flex align-items-center">
                    <div class="icon d-flex align-items-center justify-content-center"><span
                            class="flaticon-file"></span></div>
                    <div class="text pl-3">
                        <strong class="number" data-number="4800">0</strong>
                        <span>Project Completed</span>
                    </div>
                </div>
            </div>
            <div class="col-md-3 d-flex counter-wrap ftco-animate">
                <div class="block-18 d-flex align-items-center">
                    <div class="icon d-flex align-items-center justify-content-center"><span
                            class="flaticon-waiter"></span></div>
                    <div class="text pl-3">
                        <strong class="number" data-number="1000">0</strong>
                        <span>Our Staff</span>
                    </div>
                </div>
            </div>
            <div class="col-md-3 d-flex counter-wrap ftco-animate">
                <div class="block-18 d-flex align-items-center">
                    <div class="icon d-flex align-items-center justify-content-center"><span
                            class="flaticon-customer-service"></span></div>
                    <div class="text pl-3">
                        <strong class="number" data-number="350">0</strong>
                        <span>Services Provide</span>
                    </div>
                </div>
            </div>
            <div class="col-md-3 d-flex counter-wrap ftco-animate">
                <div class="block-18 d-flex align-items-center">
                    <div class="icon d-flex align-items-center justify-content-center"><span
                            class="flaticon-good-review"></span></div>
                    <div class="text pl-3">
                        <strong class="number" data-number="7650">0</strong>
                        <span>Happy Customers</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> -->
<section class="ftco-section ftco-faqs services-section bg-light">
    <div class="overlay"></div>
    <div class="container">
        <div class="row d-flex">
            <div class="col-md-6 mb-5 md-md-0 order-md-last">
                <div class="img w-100 mb-4" style="background-image: url(images/about-2.jpg);"></div>
                <h2 class="heading-section2 mb-5">We Are Very <br>Experienced &amp; Professionals</h2>
                <div class="row">
                    <div class="col-md-12 animate-box">
                        <div class="progress-wrap ftco-animate">
                            <h3>Creative Design</h3>
                            <div class="progress">
                                <div class="progress-bar color-1" role="progressbar" aria-valuenow="90"
                                    aria-valuemin="0" aria-valuemax="100" style="width:95%">
                                    <span>95%</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 animate-box">
                        <div class="progress-wrap ftco-animate">
                            <h3>Product Engineering</h3>
                            <div class="progress">
                                <div class="progress-bar color-2" role="progressbar" aria-valuenow="85"
                                    aria-valuemin="0" aria-valuemax="100" style="width:85%">
                                    <span>85%</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 animate-box">
                        <div class="progress-wrap ftco-animate">
                            <h3>Marketing Strategy</h3>
                            <div class="progress">
                                <div class="progress-bar color-3" role="progressbar" aria-valuenow="95"
                                    aria-valuemin="0" aria-valuemax="100" style="width:95%">
                                    <span>95%</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 animate-box">
                        <div class="progress-wrap ftco-animate">
                            <h3>Support Tips</h3>
                            <div class="progress">
                                <div class="progress-bar color-3" role="progressbar" aria-valuenow="90"
                                    aria-valuemin="0" aria-valuemax="100" style="width:90%">
                                    <span>90%</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 heading-section pr-md-5 ftco-animate d-flex align-items-center">
                <div class="w-100 mb-4 mb-md-0">
                    <span class="subheading">Freequesntly Ask Question</span>
                    <h2 class="mb-5">Frequently <br>Ask Question</h2>
                    <div id="accordion" class="myaccordion w-100" aria-multiselectable="true">
                        <div class="card">
                            <div class="card-header p-0" id="headingOne">
                                <h2 class="mb-0">
                                    <button href="#collapseOne"
                                        class="d-flex py-3 px-4 align-items-center justify-content-between btn btn-link"
                                        data-parent="#accordion" data-toggle="collapse" aria-expanded="true"
                                        aria-controls="collapseOne">
                                        <p class="mb-0">How to fixed a problem?</p>
                                        <i class="fa" aria-hidden="true"></i>
                                    </button>
                                </h2>
                            </div>
                            <div class="collapse show" id="collapseOne" role="tabpanel"
                                aria-labelledby="headingOne">
                                <div class="card-body py-3 px-0">
                                    <ol>
                                        <li>Far far away, behind the word mountains</li>
                                        <li>Consonantia, there live the blind texts</li>
                                        <li>When she reached the first hills of the Italic Mountains</li>
                                        <li>Bookmarksgrove, the headline of Alphabet Village</li>
                                        <li>Separated they live in Bookmarksgrove right</li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header p-0" id="headingTwo" role="tab">
                                <h2 class="mb-0">
                                    <button href="#collapseTwo"
                                        class="d-flex py-3 px-4 align-items-center justify-content-between btn btn-link"
                                        data-parent="#accordion" data-toggle="collapse" aria-expanded="false"
                                        aria-controls="collapseTwo">
                                        <p class="mb-0">How to manage your Website?</p>
                                        <i class="fa" aria-hidden="true"></i>
                                    </button>
                                </h2>
                            </div>
                            <div class="collapse" id="collapseTwo" role="tabpanel" aria-labelledby="headingTwo">
                                <div class="card-body py-3 px-0">
                                    <ol>
                                        <li>Far far away, behind the word mountains</li>
                                        <li>Consonantia, there live the blind texts</li>
                                        <li>When she reached the first hills of the Italic Mountains</li>
                                        <li>Bookmarksgrove, the headline of Alphabet Village</li>
                                        <li>Separated they live in Bookmarksgrove right</li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header p-0" id="headingThree" role="tab">
                                <h2 class="mb-0">
                                    <button href="#collapseThree"
                                        class="d-flex py-3 px-4 align-items-center justify-content-between btn btn-link"
                                        data-parent="#accordion" data-toggle="collapse" aria-expanded="false"
                                        aria-controls="collapseThree">
                                        <p class="mb-0">How to grow your investments funds?</p>
                                        <i class="fa" aria-hidden="true"></i>
                                    </button>
                                </h2>
                            </div>
                            <div class="collapse" id="collapseThree" role="tabpanel" aria-labelledby="headingTwo">
                                <div class="card-body py-3 px-0">
                                    <ol>
                                        <li>Far far away, behind the word mountains</li>
                                        <li>Consonantia, there live the blind texts</li>
                                        <li>When she reached the first hills of the Italic Mountains</li>
                                        <li>Bookmarksgrove, the headline of Alphabet Village</li>
                                        <li>Separated they live in Bookmarksgrove right</li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header p-0" id="headingFour" role="tab">
                                <h2 class="mb-0">
                                    <button href="#collapseFour"
                                        class="d-flex py-3 px-4 align-items-center justify-content-between btn btn-link"
                                        data-parent="#accordion" data-toggle="collapse" aria-expanded="false"
                                        aria-controls="collapseFour">
                                        <p class="mb-0">What are those requirements for businesses?</p>
                                        <i class="fa" aria-hidden="true"></i>
                                    </button>
                                </h2>
                            </div>
                            <div class="collapse" id="collapseFour" role="tabpanel" aria-labelledby="headingTwo">
                                <div class="card-body py-3 px-0">
                                    <p>Far far away, behind the word mountains, far from the countries Vokalia and
                                        Consonantia, there live the blind texts. Separated they live in
                                        Bookmarksgrove right at the coast of the Semantics, a large language ocean.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- <section class="ftco-section">
    <div class="container">
        <div class="row no-gutters pb-5 justify-content-between">
            <div class="col-md-7 col-lg-6 heading-section ftco-animate">
                <span class="subheading">Meet The Team</span>
                <h2 class="mb-4">Professional <br>Creative Team Members</h2>
            </div>
            <div class="col-md-3 col-lg-2 d-flex align-items-center">
                <a href="#" class="btn-custom">View All Members <span class="fa fa-chevron-right"></span></a>
            </div>
        </div>
    </div>
    <div class="container container-2">
        <div class="row no-gutters justify-content-center">
            <div class="col-md-4 col-lg ftco-animate d-flex">
                <div class="staff">
                    <div class="img-wrap d-flex align-items-stretch">
                        <div class="img d-flex align-items-center"
                            style="background-image: url(images/staff-1.jpg);">
                            <div class="text w-100 pt-3 px-3 pb-4 text-center">
                                <h3>Lloyd Wilson</h3>
                                <span class="position">Web Developer</span>
                                <div class="faded">
                                    <ul class="ftco-social text-center">
                                        <li class="ftco-animate"><a href="#"
                                                class="d-flex align-items-center justify-content-center"><span
                                                    class="fa fa-twitter"></span></a></li>
                                        <li class="ftco-animate"><a href="#"
                                                class="d-flex align-items-center justify-content-center"><span
                                                    class="fa fa-facebook"></span></a></li>
                                        <li class="ftco-animate"><a href="#"
                                                class="d-flex align-items-center justify-content-center"><span
                                                    class="fa fa-google"></span></a></li>
                                        <li class="ftco-animate"><a href="#"
                                                class="d-flex align-items-center justify-content-center"><span
                                                    class="fa fa-instagram"></span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-lg ftco-animate d-flex">
                <div class="staff">
                    <div class="img-wrap d-flex align-items-stretch">
                        <div class="img d-flex align-items-center"
                            style="background-image: url(images/staff-2.jpg);">
                            <div class="text w-100 pt-3 px-3 pb-4 text-center">
                                <h3>Lloyd Wilson</h3>
                                <span class="position">Web Designer</span>
                                <div class="faded">
                                    <ul class="ftco-social text-center">
                                        <li class="ftco-animate"><a href="#"
                                                class="d-flex align-items-center justify-content-center"><span
                                                    class="fa fa-twitter"></span></a></li>
                                        <li class="ftco-animate"><a href="#"
                                                class="d-flex align-items-center justify-content-center"><span
                                                    class="fa fa-facebook"></span></a></li>
                                        <li class="ftco-animate"><a href="#"
                                                class="d-flex align-items-center justify-content-center"><span
                                                    class="fa fa-google"></span></a></li>
                                        <li class="ftco-animate"><a href="#"
                                                class="d-flex align-items-center justify-content-center"><span
                                                    class="fa fa-instagram"></span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-lg ftco-animate d-flex">
                <div class="staff">
                    <div class="img-wrap d-flex align-items-stretch">
                        <div class="img d-flex align-items-center"
                            style="background-image: url(images/staff-3.jpg);">
                            <div class="text w-100 pt-3 px-3 pb-4 text-center">
                                <h3>Liam Neil</h3>
                                <span class="position">Graphic Designer</span>
                                <div class="faded">
                                    <ul class="ftco-social text-center">
                                        <li class="ftco-animate"><a href="#"
                                                class="d-flex align-items-center justify-content-center"><span
                                                    class="fa fa-twitter"></span></a></li>
                                        <li class="ftco-animate"><a href="#"
                                                class="d-flex align-items-center justify-content-center"><span
                                                    class="fa fa-facebook"></span></a></li>
                                        <li class="ftco-animate"><a href="#"
                                                class="d-flex align-items-center justify-content-center"><span
                                                    class="fa fa-google"></span></a></li>
                                        <li class="ftco-animate"><a href="#"
                                                class="d-flex align-items-center justify-content-center"><span
                                                    class="fa fa-instagram"></span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-lg ftco-animate d-flex">
                <div class="staff">
                    <div class="img-wrap d-flex align-items-stretch">
                        <div class="img d-flex align-items-center"
                            style="background-image: url(images/staff-4.jpg);">
                            <div class="text w-100 pt-3 px-3 pb-4 text-center">
                                <h3>Alen Broke</h3>
                                <span class="position">System Analytic</span>
                                <div class="faded">
                                    <ul class="ftco-social text-center">
                                        <li class="ftco-animate"><a href="#"
                                                class="d-flex align-items-center justify-content-center"><span
                                                    class="fa fa-twitter"></span></a></li>
                                        <li class="ftco-animate"><a href="#"
                                                class="d-flex align-items-center justify-content-center"><span
                                                    class="fa fa-facebook"></span></a></li>
                                        <li class="ftco-animate"><a href="#"
                                                class="d-flex align-items-center justify-content-center"><span
                                                    class="fa fa-google"></span></a></li>
                                        <li class="ftco-animate"><a href="#"
                                                class="d-flex align-items-center justify-content-center"><span
                                                    class="fa fa-instagram"></span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-lg ftco-animate d-flex">
                <div class="staff">
                    <div class="img-wrap d-flex align-items-stretch">
                        <div class="img d-flex align-items-center"
                            style="background-image: url(images/staff-5.jpg);">
                            <div class="text w-100 pt-3 px-3 pb-4 text-center">
                                <h3>John Hayes</h3>
                                <span class="position">Marketing</span>
                                <div class="faded">
                                    <ul class="ftco-social text-center">
                                        <li class="ftco-animate"><a href="#"
                                                class="d-flex align-items-center justify-content-center"><span
                                                    class="fa fa-twitter"></span></a></li>
                                        <li class="ftco-animate"><a href="#"
                                                class="d-flex align-items-center justify-content-center"><span
                                                    class="fa fa-facebook"></span></a></li>
                                        <li class="ftco-animate"><a href="#"
                                                class="d-flex align-items-center justify-content-center"><span
                                                    class="fa fa-google"></span></a></li>
                                        <li class="ftco-animate"><a href="#"
                                                class="d-flex align-items-center justify-content-center"><span
                                                    class="fa fa-instagram"></span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> 
<section class="ftco-section ftco-portfolio bg-light">
    <div class="overlay"></div>
    <div class="container">
        <div class="row justify-content-between pb-5">
            <div class="col-md-6 col-lg-6 heading-section heading-section-white ftco-animate">
                <span class="subheading">Recent Portfolio</span>
                <h2 class="mb-4">We Have Done <br>Many Latest Projects</h2>
            </div>
            <div class="col-md-4 col-lg-3 d-flex align-items-center justify-content-end">
                <a href="#" class="btn-custom">View All Projects <span class="fa fa-chevron-right"></span></a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 ftco-animate">
                <div class="project-wrap img d-flex align-items-end"
                    style="background-image: url(images/work-1.jpg);">
                    <div class="text">
                        <span>Web Application</span>
                        <h3><a href="portfolio-single.html">Interior Design</a></h3>
                        <a href="portfolio-single.html"
                            class="icon d-flex align-items-center justify-content-center"><span
                                class="fa fa-chevron-right"></span></a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 ftco-animate">
                <div class="project-wrap img d-flex align-items-end"
                    style="background-image: url(images/work-2.jpg);">
                    <div class="text">
                        <span>Web Application</span>
                        <h3><a href="portfolio-single.html">Interior Design</a></h3>
                        <a href="portfolio-single.html"
                            class="icon d-flex align-items-center justify-content-center"><span
                                class="fa fa-chevron-right"></span></a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 ftco-animate">
                <div class="project-wrap img d-flex align-items-end"
                    style="background-image: url(images/work-3.jpg);">
                    <div class="text">
                        <span>Web Application</span>
                        <h3><a href="portfolio-single.html">Interior Design</a></h3>
                        <a href="portfolio-single.html"
                            class="icon d-flex align-items-center justify-content-center"><span
                                class="fa fa-chevron-right"></span></a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 ftco-animate">
                <div class="project-wrap img d-flex align-items-end"
                    style="background-image: url(images/work-4.jpg);">
                    <div class="text">
                        <span>Web Application</span>
                        <h3><a href="portfolio-single.html">Interior Design</a></h3>
                        <a href="portfolio-single.html"
                            class="icon d-flex align-items-center justify-content-center"><span
                                class="fa fa-chevron-right"></span></a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 ftco-animate">
                <div class="project-wrap img d-flex align-items-end"
                    style="background-image: url(images/work-5.jpg);">
                    <div class="text">
                        <span>Web Application</span>
                        <h3><a href="portfolio-single.html">Interior Design</a></h3>
                        <a href="portfolio-single.html"
                            class="icon d-flex align-items-center justify-content-center"><span
                                class="fa fa-chevron-right"></span></a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 ftco-animate">
                <div class="project-wrap img d-flex align-items-end"
                    style="background-image: url(images/work-6.jpg);">
                    <div class="text">
                        <span>Web Application</span>
                        <h3><a href="portfolio-single.html">Interior Design</a></h3>
                        <a href="portfolio-single.html"
                            class="icon d-flex align-items-center justify-content-center"><span
                                class="fa fa-chevron-right"></span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="ftco-section testimony-section ftco-no-pt bg-light">
    <div class="overlay"></div>
    <div class="container">
        <div class="row pb-4">
            <div class="col-md-7 heading-section ftco-animate">
                <span class="subheading">Testimonial</span>
                <h2 class="mb-4">People Say <br>About Our Works</h2>
            </div>
        </div>
    </div>
    <div class="container-fluid px-lg-5">
        <div class="row ftco-animate">
            <div class="col-md-12">
                <div class="carousel-testimony owl-carousel">
                    <div class="item">
                        <div class="testimony-wrap py-4">
                            <div class="text">
                                <p class="mb-4">Far far away, behind the word mountains, far from the countries
                                    Vokalia and Consonantia, there live the blind texts.</p>
                                <div class="d-flex align-items-center">
                                    <div class="user-img" style="background-image: url(images/person_1.jpg)"></div>
                                    <div class="pl-3">
                                        <p class="star">
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                        </p>
                                        <p class="name">Roger Scott</p>
                                        <span class="position">Marketing Manager</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimony-wrap py-4">
                            <div class="text">
                                <p class="mb-4">Far far away, behind the word mountains, far from the countries
                                    Vokalia and Consonantia, there live the blind texts.</p>
                                <div class="d-flex align-items-center">
                                    <div class="user-img" style="background-image: url(images/person_2.jpg)"></div>
                                    <div class="pl-3">
                                        <p class="star">
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                        </p>
                                        <p class="name">Roger Scott</p>
                                        <span class="position">Marketing Manager</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimony-wrap py-4">
                            <div class="text">
                                <p class="mb-4">Far far away, behind the word mountains, far from the countries
                                    Vokalia and Consonantia, there live the blind texts.</p>
                                <div class="d-flex align-items-center">
                                    <div class="user-img" style="background-image: url(images/person_3.jpg)"></div>
                                    <div class="pl-3">
                                        <p class="star">
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                        </p>
                                        <p class="name">Roger Scott</p>
                                        <span class="position">Marketing Manager</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimony-wrap py-4">
                            <div class="text">
                                <p class="mb-4">Far far away, behind the word mountains, far from the countries
                                    Vokalia and Consonantia, there live the blind texts.</p>
                                <div class="d-flex align-items-center">
                                    <div class="user-img" style="background-image: url(images/person_1.jpg)"></div>
                                    <div class="pl-3">
                                        <p class="star">
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                        </p>
                                        <p class="name">Roger Scott</p>
                                        <span class="position">Marketing Manager</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimony-wrap py-4">
                            <div class="text">
                                <p class="mb-4">Far far away, behind the word mountains, far from the countries
                                    Vokalia and Consonantia, there live the blind texts.</p>
                                <div class="d-flex align-items-center">
                                    <div class="user-img" style="background-image: url(images/person_2.jpg)"></div>
                                    <div class="pl-3">
                                        <p class="star">
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                        </p>
                                        <p class="name">Roger Scott</p>
                                        <span class="position">Marketing Manager</span>
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
<section class="ftco-section ftco-no-pb">
    <div class="container">
        <div class="row justify-content-center pb-4">
            <div class="col-md-12 heading-section text-center ftco-animate">
                <span class="subheading">Our Blog</span>
                <h2 class="mb-4">Recent Post</h2>
            </div>
        </div>
        <div class="row d-flex">
            <div class="col-md-4 ftco-animate">
                <div class="blog-entry">
                    <a href="blog-single.html" class="block-20"
                        style="background-image: url('images/image_1.jpg');">
                    </a>
                    <div class="text d-block text-center">
                        <div class="meta">
                            <p>
                                <a href="#"><span class="fa fa-calendar mr-2"></span>Sept. 23, 2020</a>
                                <a href="#"><span class="fa fa-user mr-2"></span>Admin</a>
                                <a href="#" class="meta-chat"><span class="fa fa-comment mr-2"></span> 3</a>
                            </p>
                        </div>
                        <h3 class="heading"><a href="#">Marketing Strategies for Digital Ecosystem</a></h3>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and
                            Consonantia...</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 ftco-animate">
                <div class="blog-entry">
                    <a href="blog-single.html" class="block-20"
                        style="background-image: url('images/image_2.jpg');">
                    </a>
                    <div class="text d-block text-center">
                        <div class="meta">
                            <p>
                                <a href="#"><span class="fa fa-calendar mr-2"></span>Sept. 23, 2020</a>
                                <a href="#"><span class="fa fa-user mr-2"></span>Admin</a>
                                <a href="#" class="meta-chat"><span class="fa fa-comment mr-2"></span> 3</a>
                            </p>
                        </div>
                        <h3 class="heading"><a href="#">Marketing Strategies for Digital Ecosystem</a></h3>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and
                            Consonantia...</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 ftco-animate">
                <div class="blog-entry">
                    <a href="blog-single.html" class="block-20"
                        style="background-image: url('images/image_3.jpg');">
                    </a>
                    <div class="text d-block text-center">
                        <div class="meta">
                            <p>
                                <a href="#"><span class="fa fa-calendar mr-2"></span>Sept. 23, 2020</a>
                                <a href="#"><span class="fa fa-user mr-2"></span>Admin</a>
                                <a href="#" class="meta-chat"><span class="fa fa-comment mr-2"></span> 3</a>
                            </p>
                        </div>
                        <h3 class="heading"><a href="#">Marketing Strategies for Digital Ecosystem</a></h3>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and
                            Consonantia...</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>-->
@livewire('site.newsletter')
@endsection
