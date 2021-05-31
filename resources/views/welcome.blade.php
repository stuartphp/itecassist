@extends('layouts.site')
@section('style')
<style>
.main-process {
    padding-top: 50px;
    padding-bottom: 10px;
}

.pt-15 {
    padding-top: 3%
}

.process-bg {
    background: url(../images/bg/research-bg.png)top left no-repeat;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    background-size: 83%;
    background-position: top;
    min-height: 300px
}

.process-bg1 {
    background: url(../images/bg/research-bg1.png)top left no-repeat;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    background-size: 83%;
    background-position: top;
    min-height: 300px
}

.process-bg2 {
    background: url(../images/bg/research-bg2.png)top left no-repeat;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    background-size: 83%;
    background-position: top;
    min-height: 300px
}

.process-bg3 {
    background: url(../images/bg/research-bg3.png)top left no-repeat;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    background-size: 83%;
    background-position: top;
    min-height: 300px
}

.process-bg4 {
    background: url(../images/bg/research-bg4.png)top left no-repeat;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    background-size: 83%;
    background-position: top;
    min-height: 300px
}

.process-title {
    padding-top: 6%;
    padding-bottom: 2%;
    padding-left: 9%
}

.process-title h3 {
    font-size: 15px;
    background: #ccc;
    position: relative;
    line-height: 50px;
    width: 82%;
    color: #fff;
    text-align: center
}

.process-title .digit {
    font-size: 71px;
    font-style: italic;
    font-weight: 700;
    position: absolute;
    left: -23px;
    z-index: 2;
    text-shadow: 6px 0 0 #fff;
    color: #3d6b6b
}

.process-title .digit1 {
    font-size: 71px;
    font-style: italic;
    font-weight: 700;
    position: absolute;
    left: -34px;
    z-index: 2;
    text-shadow: 6px 0 0 #fff;
    color: #562f8a
}

.process-title .digit2 {
    font-size: 71px;
    font-style: italic;
    font-weight: 700;
    position: absolute;
    left: -33px;
    z-index: 2;
    text-shadow: 6px 0 0 #fff;
    color: #a40a63
}

.process-title .digit3 {
    font-size: 71px;
    font-style: italic;
    font-weight: 700;
    position: absolute;
    left: -45px;
    z-index: 2;
    text-shadow: 6px 0 0 #fff;
    color: #db6224
}

.process-title .digit4 {
    font-size: 71px;
    font-style: italic;
    font-weight: 700;
    position: absolute;
    left: -38px;
    z-index: 2;
    text-shadow: 7px 1px 0 #fff;
    color: #434f9e
}

.process-title .icon {
    position: absolute;
    right: -20px;
    background: #333;
    width: 60px;
    height: 60px;
    border-radius: 50%;
    text-align: center;
    padding: 10px;
    border: 5px solid #fff;
    top: -5px;
    line-height: initial
}

.process-title .icon img {
    width: 100%
}

.process-title h3:before {
    content: "";
    position: absolute;
    background: #fff;
    width: 30px;
    height: 104%;
    z-index: 1;
    left: -21px;
    top: -3px;
    transform: rotate(12deg)
}

.process-title.dipi1 h3,
.process-title.dipi1 .icon {
    background: linear-gradient(to right, #3d6b6b, #4d5ca3)
}

.process-title.dipi2 h3,
.process-title.dipi2 .icon {
    background: linear-gradient(to right, #562f8a, #85378d)
}

.process-title.dipi3 h3,
.process-title.dipi3 .icon {
    background: linear-gradient(to right, #a40a63, #c05d5a)
}

.process-title.dipi4 h3,
.process-title.dipi4 .icon {
    background: linear-gradient(to right, #db6224, #e9a26b)
}

.process-title.dipi5 h3,
.process-title.dipi5 .icon {
    background: linear-gradient(to right, #434f9e, #49b4e7)
}

.pt-12 {
    padding-top: 12%
}

.process-content {
    padding: 1% 5% 1% 10%;
    font-size: 0.8rem;
    color: black;
}


</style>
@endsection
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
                                <p class="mb-4">We design, build, deploy and maintain innovative custom software that gives
                                    our clients the opportunity to start, run and grow world class businesses.</p>
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
                                <p class="mb-4">Design is perhaps the most important aspect of web design overall, as it is
                                    the element that brings people in, and keeps them there..</p>
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
                        <p> As a professional Software Development company. When designing a website, we
                            understand that consistent brand identity is key, and we are always thinking about the big
                            picture. With this, we can provide you with a website that makes people want to stick around,
                            which is really everyone’s main goal. Creating a website that is interesting, engaging, and
                            different from all your competitors will make people remember you and will also up the chances
                            of them buying your product or services. Content is also important when it comes to web
                            design,which is something we take into consideration. With good content and quality design, you
                            can’t go wrong.</p>
                        <p class="mb-4">We develops impactful, game-changing products by being product obsessed,
                            collaboration driven and mission-focused. We work with companies of all sizes to further your
                            current product goals or engineer something together from the ground up.</p>
                    </div>
                </div>

                <div class="col-md-4 d-flex align-self-stretch ftco-animate">
                    <div class="services">
                        <div class="d-flex justify-content-end">
                            <div class="icon d-flex"><span class="flaticon-stats"></span></div>
                        </div>
                        <div class="media-body">
                            <h3 class="heading mb-3">Online Marketing</h3>
                        </div>
                        <a href="/services" class="btn-custom d-flex align-items-center justify-content-center"><span
                                class="fa fa-chevron-right"></span></a>
                    </div>
                </div>

                <div class="col-md-4 d-flex align-self-stretch ftco-animate">
                    <div class="services">
                        <div class="d-flex justify-content-end">
                            <div class="icon d-flex"><span class="flaticon-branding"></span></div>
                        </div>
                        <div class="media-body">
                            <h3 class="heading mb-3">Mobile &amp; App Development</h3>
                        </div>
                        <a href="/services" class="btn-custom d-flex align-items-center justify-content-center"><span
                                class="fa fa-chevron-right"></span></a>
                    </div>
                </div>
                <div class="col-md-4 d-flex align-self-stretch ftco-animate">
                    <div class="services">
                        <div class="d-flex justify-content-end">
                            <div class="icon d-flex"><span class="flaticon-web-programming"></span></div>
                        </div>
                        <div class="media-body">
                            <h3 class="heading mb-3">Web Development</h3>
                        </div>
                        <a href="/services" class="btn-custom d-flex align-items-center justify-content-center"><span
                                class="fa fa-chevron-right"></span></a>
                    </div>
                </div>
                <div class="col-md-4 d-flex align-self-stretch ftco-animate">
                    <div class="services">
                        <div class="d-flex justify-content-end">
                            <div class="icon d-flex"><span class="flaticon-web-programming"></span></div>
                        </div>
                        <div class="media-body">
                            <h3 class="heading mb-3">Product Management Strategy</h3>
                        </div>
                        <a href="/services" class="btn-custom d-flex align-items-center justify-content-center"><span
                                class="fa fa-chevron-right"></span></a>
                    </div>
                </div>
                <div class="col-md-4 d-flex align-self-stretch ftco-animate">
                    <div class="services">
                        <div class="d-flex justify-content-end">
                            <div class="icon d-flex"><span class="flaticon-ux"></span></div>
                        </div>
                        <div class="media-body">
                            <h3 class="heading mb-3">UX/UI Design</h3>
                        </div>
                        <a href="/services" class="btn-custom d-flex align-items-center justify-content-center"><span
                                class="fa fa-chevron-right"></span></a>
                    </div>
                </div>
                <div class="col-md-4 d-flex align-self-stretch ftco-animate">
                    <div class="services">
                        <div class="d-flex justify-content-end">
                            <div class="icon d-flex"><span class="flaticon-ux"></span></div>
                        </div>
                        <div class="media-body">
                            <h3 class="heading mb-3">Testing & QA</h3>
                        </div>
                        <a href="/services" class="btn-custom d-flex align-items-center justify-content-center"><span
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
                                    <p>We are a team of dreamers, explorers and creators passionate about crafting
                                        human-centered digital experiences. Together with our clients, we aim to build
                                        products that create positive impacts around the world. </p>
                                    <p>We aim to leverage the latest in technology and the ideas of invaluable thinkers to
                                        create ground-breaking solutions for every industry. We empower the foremost drivers
                                        that pioneer the latest technological breakthroughs to propel our society toward
                                        diversity, equality and inclusion.</p>
                                    <p>At Simublade, we are committed to creating positive change. We believe that
                                        professional contributions are a reflection of a company's values and how they hope
                                        to impact the world around them. As a way of giving back, we contribute 5% of our
                                        resources and expertise towards building impactful solutions for schools and
                                        nonprofits.</p>
                                    <div class="year-stablish d-flex">
                                        <div class="icon2 d-flex align-items-center justify-content-center"><span
                                                class="flaticon-light-bulb"></span></div>
                                        <div class="text pl-4">
                                            <strong class="number" data-number="40">0</strong>
                                            <span>Years Of Experienced</span>
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
    <section class="main-process">
        <div class="container">
            <div class="col-md-12 col-lg-12 col-sm-12">
                <div class="sec-title">
                    <h3 class="text-center">Development <strong> Process</strong></h3>
                </div>
                <div class="row pt-15">
                    <div class="col-md-4 col-lg-4 col-xs-12 col-sm-4 bounceInLeft animated">
                        <div class="process-bg">
                            <div class="process-title dipi1">
                                <h3><span class="digit">1</span> Product <strong>Research</strong>
                                    <span class="icon"><img src="/images/product-research.png" alt="Product Research"></span></h3>
                            </div>
                            <div class="process-content">
                                <p>Initially, we explore your business and aim to get a better understanding of your goals
                                    and requirements. Your product manager will guide you through the decision process,
                                    determine priorities and setup collaboration channels.&nbsp;</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-4 col-xs-12 col-sm-4 bounceIn animated">
                        <div class="process-bg1">
                            <div class="process-title dipi2">
                                <h3><span class="digit1">2</span> <strong>Scoping</strong><span class="icon"><img
                                            src="/images/scoping.png" alt="Scoping"></span></h3>
                            </div>
                            <div class="process-content">
                                <p>The design and engineering team will create design and product scopes, laying out the
                                    trajectory of the project. We will break down the project into agile consumable
                                    pieces.&nbsp;</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-4 col-xs-12 col-sm-4 bounceInRight animated">
                        <div class="process-bg2">
                            <div class="process-title dipi3">
                                <h3><span class="digit2">3</span> Design &amp;<strong> Development</strong><span
                                        class="icon"><img src="/images/development.png"
                                            alt="Design and Development"></span></h3>
                            </div>
                            <div class="process-content">
                                <p>Our team lives by agile methodology. Through iterative sprints we design and develop your
                                    product with an emphasis on flow, functionality, and reliability to create a flawless
                                    user experience.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div class="row">
                    <div class="col-md-4 col-lg-4 col-xs-12 col-sm-6 bounceInLeft animated ">
                        <div class="process-bg3">
                            <div class="process-title dipi4">
                                <h3><span class="digit3">4</span>Testing &amp; <strong> Feedback</strong><span
                                        class="icon"><img src="/images/testing.png"
                                            alt="Testing and Feedback"></span></h3>
                            </div>
                            <div class="process-content">
                                <p>After each sprint, the product passes through our QA team that conducts unit testing,
                                    regression testing and code quality checks to ensure the product is ready. Continue to
                                    code, test, and repeat til perfection. </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-4 col-xs-12 col-sm-6 bounceInRight animated pt-6">
                        <div class="process-bg4">
                            <div class="process-title dipi5">
                                <h3><span class="digit4">5</span> Product<strong> Launch</strong><span class="icon"><img
                                            src="/images/deployment.png" alt="Testing and Feedback"></span></h3>
                            </div>
                            <div class="process-content">
                                <p>We work closely with you to ensure that your product launch is successful and profitable.
                                    Personalized training over the services and technologies used to ensure a smooth
                                    handoff. </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-4 col-xs-12 col-sm-6 bounceInRight animated pt-6">
                        <div class="process-bg4">
                            <div class="process-title dipi5">
                                <h3><span class="digit4">6</span> Lifecycle<strong> Support</strong><span class="icon"><img
                                            src="/images/deployment.png" alt="deployment"></span></h3>
                            </div>
                            <div class="process-content">
                                <p>Your product will grow and evolve, and we'll be here to help. From bug fixes to new
                                    features we can continue to support your product. We offer a range of maintenance plans
                                    to fit your exact beads. </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="ftco-section ftco-faqs services-section bg-light">
        <div class="overlay"></div>
        <div class="container">
            <div class="row d-flex">
                <div class="col-md-12 heading-section mb-5 md-md-0 order-md-last">
                    <span class="subheading">Experience</span>
                    <div class="img w-100 mb-4" style="background-image: url(images/about-2.jpg);"></div>
                    <h2 class="">We Are Very Experienced &amp; Professionals</h2>
                    <div class="row">
                        <div class="col-md-4 ftco-animate">
                            <div class="block-7">
                                <div class="p-4">
                                    <h4 class="">Languages</h4>
                                    <ul class="pricing-text mb-2">
                                        <li><span class="fa fa-check-circle mr-2"></span>PHP</li>
                                        <li><span class="fa fa-check-circle mr-2"></span>HTML</li>
                                        <li><span class="fa fa-check-circle mr-2"></span>CSS</li>
                                        <li><span class="fa fa-check-circle mr-2"></span>JavaScript</li>
                                        <li><span class="fa fa-check-circle mr-2"></span>Python</li>
                                        <li><span class="fa fa-check-circle mr-2"></span>C++ / C #</li>
                                        <li><span class="fa fa-check-circle mr-2"></span>Java</li>
                                        <li><span class="fa fa-check-circle mr-2"></span>VueJS</li>
                                        <li><span class="fa fa-check-circle mr-2"></span>VBScript</li>
                                        <li><span class="fa fa-check-circle mr-2"></span>Dephi</li>
                                        <li><span class="fa fa-check-circle mr-2"></span>Cobol</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 ftco-animate">
                            <div class="block-7">
                                <div class="p-4">
                                    <h4 class="">Frameworks</h4>
                                    <ul class="pricing-text mb-2">
                                        <li><span class="fa fa-check-circle mr-2"></span>Laravel</li>
                                        <li><span class="fa fa-check-circle mr-2"></span>Zend</li>
                                        <li><span class="fa fa-check-circle mr-2"></span>Symphony</li>
                                        <li><span class="fa fa-check-circle mr-2"></span>Codeigniter</li>
                                        <li><span class="fa fa-check-circle mr-2"></span>Bootstrap</li>
                                        <li><span class="fa fa-check-circle mr-2"></span>Tailwind</li>
                                        <li><span class="fa fa-check-circle mr-2"></span>Wordpress</li>
                                        <li><span class="fa fa-check-circle mr-2"></span>Drupal</li>
                                        <li><span class="fa fa-check-circle mr-2"></span>Jquery</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 ftco-animate">
                            <div class="block-7">
                                <div class="p-4">
                                    <h4 class="">Software / Tools</h4>
                                    <ul class="pricing-text mb-2">
                                        <li><span class="fa fa-check-circle mr-2"></span>VisualStudios</li>
                                        <li><span class="fa fa-check-circle mr-2"></span>GitHub</li>
                                        <li><span class="fa fa-check-circle mr-2"></span>Photoshop</li>
                                        <li><span class="fa fa-check-circle mr-2"></span>Composer</li>
                                        <li><span class="fa fa-check-circle mr-2"></span>Drawstudio</li>
                                        <li><span class="fa fa-check-circle mr-2"></span>VScode</li>
                                        <li><span class="fa fa-check-circle mr-2"></span>PyCharm</li>
                                        <li><span class="fa fa-check-circle mr-2"></span>PHPStorm</li>
                                        <li><span class="fa fa-check-circle mr-2"></span>NodeJS</li>
                                        <li><span class="fa fa-check-circle mr-2"></span>NPM</li>
                                    </ul>
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
