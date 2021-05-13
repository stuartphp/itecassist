@extends('layouts.site')
@section('content')
    <section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_4.jpg');">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-end">
                <div class="col-md-9 ftco-animate pb-5">
                    <p class="breadcrumbs"><span class="mr-2">
                        <a href="/">Home <i class="fa fa-chevron-right"></i></a></span>
                        <span>Frequently Asked Questions</span></p>
                    <h1 class="mb-0 bread">Frequently Asked Questions</h1>
                </div>
            </div>
        </div>
    </section>
    <section class="ftco-section ftco-faqs services-section bg-light">
        <div class="overlay"></div>
        <div class="container">
            <div class="row d-flex">
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
