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
            <div class="pt-12">
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
                                        <li><span class="fa fa-check-circle mr-2"></span>C++</li>
                                        <li><span class="fa fa-check-circle mr-2"></span>C#</li>
                                        <li><span class="fa fa-check-circle mr-2"></span>VueJS</li>
                                        <li><span class="fa fa-check-circle mr-2"></span>VBScript</li>
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
                                        <li><span class="fa fa-check-circle mr-2"></span>Tailwing</li>
                                        <li><span class="fa fa-check-circle mr-2"></span>Wordpress</li>
                                        <li><span class="fa fa-check-circle mr-2"></span>Drupal</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 ftco-animate">
                            <div class="block-7">
                                <div class="p-4">
                                    <h4 class="">Software</h4>
                                    <ul class="pricing-text mb-2">
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
                <div class="col-md-12 heading-section pr-md-5 ftco-animate d-flex align-items-center">
                    <div class="w-100 mb-4 mb-md-0">
                        <span class="subheading">Freequesntly Ask Question</span>
                        <h2 class="mb-5">Frequently Ask Question</h2>
                        <div id="accordion" class="myaccordion w-100" aria-multiselectable="true">
                            <div class="card">
                                <div class="card-header p-0" id="headingOne">
                                    <h2 class="mb-0">
                                        <button href="#collapseOne"
                                            class="d-flex py-3 px-4 align-items-center justify-content-between btn btn-link"
                                            data-parent="#accordion" data-toggle="collapse" aria-expanded="false"
                                            aria-controls="collapseOne">
                                            <p class="mb-0">How much does it cost to build a website?</p>
                                            <i class="fa" aria-hidden="true"></i>
                                        </button>
                                    </h2>
                                </div>
                                <div class="collapse" id="collapseOne" role="tabpanel" aria-labelledby="headingOne">
                                    <div class="card-body py-3 px-0">
                                        <p>Building a website completely depends on your needs. It would be negligence if
                                            were to give you a price without spending a little time with you to understand
                                            your needs.</p>
                                        <p>Having said that, a new website can cost between R4,000 for small websites to
                                            R15,000 for e-commece websites. Factors like style and features, as well as your
                                            goals and purpose, will determine the type of investment you'll need. A site
                                            with fewer features and less customization generally costs less than a fully
                                            custom, feature-rich website from .
                                        </p>
                                        <p>Some of the factors that influence the investment are:</p>
                                        <ol>
                                            <li><strong>Functionality</strong>: Anything beyond a basic contact form and 5-
                                                pages requires a custom quote. Some examples include e-commerce, membership
                                                websites, extensive forms, and product catalogs.</li>
                                            <li><strong>Number of Pages</strong>: While we don’t charge per page, a 50-page
                                                website requires significantly more work than a 5-page website. Larger
                                                websites require more planning to achieve a user-friendly site structure and
                                                design.&nbsp;</li>
                                            <li><strong>Overall Look</strong>: Custom designs versus template designs can
                                                affect the investment. You can utilize one of our templates that we created
                                                to save money and time or we can build from scratch building from our design
                                                expertise.</li>
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
                                            <p class="mb-0">How does the website design process work? </p>
                                            <i class="fa" aria-hidden="true"></i>
                                        </button>
                                    </h2>
                                </div>
                                <div class="collapse" id="collapseTwo" role="tabpanel" aria-labelledby="headingTwo">
                                    <div class="card-body py-3 px-0">

                                        <p>Web design works using a clear system and process of content, design, and
                                            programming.</p>
                                        <p>Your project will start with a kick-off meeting. At this meeting, we'll discuss
                                            the scope of work, goals, communication, and in-depth into your project's
                                            content.</p>
                                        <p>Then your Designer begins to work - either a logo, mood board, or homepage. From
                                            there, we will work through the site's design as we gather content like your
                                            text and photos. If we are working on e-commerce, we'll help you build out your
                                            product spreadsheet.</p>
                                        <p>We will guide you through the content gathering process based on your designs.
                                        </p>
                                        <p>Next, we’ll conduct an SEO Audit and go through the results.</p>
                                        <p>After designs are approved, we’ll begin development.</p>
                                        <p>Once your site is developed, we have a period that you can provide your feedback
                                            using our staging tool.</p>
                                        <p>Once you are happy with the website, we'll move your website live and then train
                                            your team to update your new website!</p>
                                        <p>After launch, we’ll work with you to optimize your digital marketing strategy and
                                            grow your business.&nbsp;</p>

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
                                            <p class="mb-0">How long does it take to design a website and build a website?
                                            </p>
                                            <i class="fa" aria-hidden="true"></i>
                                        </button>
                                    </h2>
                                </div>
                                <div class="collapse" id="collapseThree" role="tabpanel" aria-labelledby="headingTwo">
                                    <div class="card-body py-3 px-0">
                                        <p>The time it takes to design and build a website depends on the size and
                                            complexity of your site and the quality of content that you have ready to go. A
                                            basic 5- page website typically takes around 1-2 weeks from beginning to end.
                                        </p>
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
                                            <p class="mb-0">Will my website work on mobile devices? </p>
                                            <i class="fa" aria-hidden="true"></i>
                                        </button>
                                    </h2>
                                </div>
                                <div class="collapse" id="collapseFour" role="tabpanel" aria-labelledby="headingTwo">
                                    <div class="card-body py-3 px-0">
                                        <p>Yes, it will. All the websites we design work on all devices. We can design and
                                            develop your site using a responsive website
                                            design so that the site is optimized for mobile devices.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header p-0" id="heading5" role="tab">
                                    <h2 class="mb-0">
                                        <button href="#collapse5"
                                            class="d-flex py-3 px-4 align-items-center justify-content-between btn btn-link"
                                            data-parent="#accordion" data-toggle="collapse" aria-expanded="false"
                                            aria-controls="collapse5">
                                            <p class="mb-0">Will I own the my website? </p>
                                            <i class="fa" aria-hidden="true"></i>
                                        </button>
                                    </h2>
                                </div>
                                <div class="collapse" id="collapse5" role="tabpanel" aria-labelledby="headingTwo">
                                    <div class="card-body py-3 px-0">
                                        <p>Yes, you will own the copyright to the website. If you decide to have your own
                                            admin manage your website, you have full ownership and the right to change
                                            whatever you’d like. If you sell your business, the website goes with it. You
                                            don’t need our permission. But, we cannot transfer ownership of proprietary code
                                            like open-source, source code, and stock photos. You also cannot
                                            take this website and sell it as is to others.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header p-0" id="heading6" role="tab">
                                    <h2 class="mb-0">
                                        <button href="#collapse6"
                                            class="d-flex py-3 px-4 align-items-center justify-content-between btn btn-link"
                                            data-parent="#accordion" data-toggle="collapse" aria-expanded="false"
                                            aria-controls="collapse6">
                                            <p class="mb-0">What kind of guarantee do you offer? </p>
                                            <i class="fa" aria-hidden="true"></i>
                                        </button>
                                    </h2>
                                </div>
                                <div class="collapse" id="collapse6" role="tabpanel" aria-labelledby="headingTwo">
                                    <div class="card-body py-3 px-0">
                                        <p>We guarantee that we will promptly create your website; not only will it be
                                            aesthetically pleasing, but it will also be very intuitive to use. Our design
                                            team will work with you every step of ensuring that you are 100% satisfied with
                                            every aspect of your website. Only then will we proceed with the next step of
                                            creating your online presence.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header p-0" id="heading7" role="tab">
                                    <h2 class="mb-0">
                                        <button href="#collapse7"
                                            class="d-flex py-3 px-4 align-items-center justify-content-between btn btn-link"
                                            data-parent="#accordion" data-toggle="collapse" aria-expanded="false"
                                            aria-controls="collapse7">
                                            <p class="mb-0">Do you provide search engine optimization, paid ads, and social
                                                media marketing services? </p>
                                            <i class="fa" aria-hidden="true"></i>
                                        </button>
                                    </h2>
                                </div>
                                <div class="collapse" id="collapse7" role="tabpanel" aria-labelledby="headingTwo">
                                    <div class="card-body py-3 px-0">
                                        <p>After a website is live, the next step is to generate traffic to it. We have
                                            already worked on your on-page Search Engine Optimization (SEO). Now it's time
                                            to get real and begin a campaign that brings in qualified leads. This can take
                                            the form of SEO, content marketing, and Google Adwords.</p>
                                        <p>Social media comes into play as we share your content on the channels most
                                            important to your audience.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header p-0" id="heading8" role="tab">
                                    <h2 class="mb-0">
                                        <button href="#collapse8"
                                            class="d-flex py-3 px-4 align-items-center justify-content-between btn btn-link"
                                            data-parent="#accordion" data-toggle="collapse" aria-expanded="false"
                                            aria-controls="collapse8">
                                            <p class="mb-0">Can you write the content for my site? </p>
                                            <i class="fa" aria-hidden="true"></i>
                                        </button>
                                    </h2>
                                </div>
                                <div class="collapse" id="collapse8" role="tabpanel" aria-labelledby="headingTwo">
                                    <div class="card-body py-3 px-0">
                                        <p>Yes, working with you and with an initial consultation, we write your content.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header p-0" id="heading9" role="tab">
                                    <h2 class="mb-0">
                                        <button href="#collapse9"
                                            class="d-flex py-3 px-4 align-items-center justify-content-between btn btn-link"
                                            data-parent="#accordion" data-toggle="collapse" aria-expanded="false"
                                            aria-controls="collapse9">
                                            <p class="mb-0">Can you build our web application? </p>
                                            <i class="fa" aria-hidden="true"></i>
                                        </button>
                                    </h2>
                                </div>
                                <div class="collapse" id="collapse9" role="tabpanel" aria-labelledby="headingTwo">
                                    <div class="card-body py-3 px-0">
                                        <p>Yes we can.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header p-0" id="heading10" role="tab">
                                    <h2 class="mb-0">
                                        <button href="#collapse10"
                                            class="d-flex py-3 px-4 align-items-center justify-content-between btn btn-link"
                                            data-parent="#accordion" data-toggle="collapse" aria-expanded="false"
                                            aria-controls="collapse10">
                                            <p class="mb-0">Can you build our e-commerce store? </p>
                                            <i class="fa" aria-hidden="true"></i>
                                        </button>
                                    </h2>
                                </div>
                                <div class="collapse" id="collapse10" role="tabpanel" aria-labelledby="headingTwo">
                                    <div class="card-body py-3 px-0">
                                        <p>Yes, we can work with your business to create an e-commerce
                                            store<. We have the ability to create fully custom eCommerce websites that are
                                                not limited by standard eCommerce store templates.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header p-0" id="heading11" role="tab">
                                    <h2 class="mb-0">
                                        <button href="#collapse11"
                                            class="d-flex py-3 px-4 align-items-center justify-content-between btn btn-link"
                                            data-parent="#accordion" data-toggle="collapse" aria-expanded="false"
                                            aria-controls="collapse11">
                                            <p class="mb-0">Where is iTec Assist located? </p>
                                            <i class="fa" aria-hidden="true"></i>
                                        </button>
                                    </h2>
                                </div>
                                <div class="collapse" id="collapse11" role="tabpanel" aria-labelledby="headingTwo">
                                    <div class="card-body py-3 px-0">
                                        <p>The iTec Assist team works remotely from each person's home-based offices all
                                            over
                                            the world.&nbsp;</p>
                                        <ul>
                                            <li>Stuart (CEO, Developer) - Pretoria, South Africa</li>
                                            <li>Rebeca (Developer) - Santiago, Brazil</li>
                                            <li>Davi (Care Plan Manager) - Santiago, Brazil</li>
                                            <li>Siddharth (Developer) - Dubai, India</li>
                                            <li>Daniela (Front-End Developer) - Buenos Aires</li>
                                            <li>Pieter (Bookkeeper) - Pretoria, South Africa</li>
                                            <li>Then a team of writers and graphic designers.</li>
                                        </ul>

                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header p-0" id="heading12" role="tab">
                                    <h2 class="mb-0">
                                        <button href="#collapse12"
                                            class="d-flex py-3 px-4 align-items-center justify-content-between btn btn-link"
                                            data-parent="#accordion" data-toggle="collapse" aria-expanded="false"
                                            aria-controls="collapse12">
                                            <p class="mb-0">Do you provide training? </p>
                                            <i class="fa" aria-hidden="true"></i>
                                        </button>
                                    </h2>
                                </div>
                                <div class="collapse" id="collapse12" role="tabpanel" aria-labelledby="headingTwo">
                                    <div class="card-body py-3 px-0">
                                        <p>Yes, we provide all of our clients with training on updating their
                                            websites.&nbsp;</p>
                                        <p>What we will not do is train you in how to build a website. There are severely
                                            great companies that offer website development training.</p>
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
