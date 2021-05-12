@extends('layouts.site')

@section('content')
    <section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_web.jpg');">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-end">
                <div class="col-md-9 ftco-animate pb-5">
                    <p class="breadcrumbs">
                        <span class="mr-2">
                            <a href="/">Home <i class="fa fa-chevron-right"></i></a></span>
                            <span>Portfolio</span></p>
                    <h1 class="mb-0 bread">Portfolio</h1>
                </div>
            </div>
        </div>
    </section>
    <section class="ftco-section">
        <div class="container">
            <div class="row">
                <div class="col-md-4 ftco-animate">
                    <div class="project-wrap img d-flex align-items-end" style="background-image: url(images/work-1.jpg);">
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
                    <div class="project-wrap img d-flex align-items-end" style="background-image: url(images/work-2.jpg);">
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
                    <div class="project-wrap img d-flex align-items-end" style="background-image: url(images/work-3.jpg);">
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
                    <div class="project-wrap img d-flex align-items-end" style="background-image: url(images/work-4.jpg);">
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
                    <div class="project-wrap img d-flex align-items-end" style="background-image: url(images/work-5.jpg);">
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
                    <div class="project-wrap img d-flex align-items-end" style="background-image: url(images/work-6.jpg);">
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
                    <div class="project-wrap img d-flex align-items-end" style="background-image: url(images/work-7.jpg);">
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
                    <div class="project-wrap img d-flex align-items-end" style="background-image: url(images/work-8.jpg);">
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
                    <div class="project-wrap img d-flex align-items-end" style="background-image: url(images/work-9.jpg);">
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
            <div class="row mt-5">
                <div class="col text-center">
                    <div class="block-27">
                        <ul>
                            <li><a href="#">&lt;</a></li>
                            <li class="active"><span>1</span></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#">5</a></li>
                            <li><a href="#">&gt;</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @livewire('site.newsletter')

@endsection
