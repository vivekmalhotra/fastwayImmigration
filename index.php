<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Basic data related to the landing page -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="description" content="We are a Canadian Immigration Consulting company serving our clients globally in all Immigration, Visa & Citizenship related matters.">
    <meta name="author" content="Fastway Immigration">
    <meta name="keywords" content="fastway, fastwayim, fastway immigration, canada, canada immigration, canadian immigration, fastway immigration and visa services, fastway visa, canadian visa, canada study permit, canada work visa, canada LMIA, canada work permit, visit canada, canada visitor visa, canada tourist visa, AINP, alberta immigrant nominee program, edmonton, alberta, SINP, Saskatechwan immigrant nominee program">
    <!-- TITLE for the page -->
    <title>Home | Fastway Immigration & Visa Services</title>

    <!-- PHP Serve - Head content - favicons, google analytics script, bootstrap script etc. -->
    <?php $IPATH = $_SERVER["DOCUMENT_ROOT"] . "/assets/";
    include($IPATH . "head_component.html"); ?>
</head>

<!-- Sets a default background color class to Body element -->

<body class="color-background-grey-light" data-spy="scroll" data-target="#mainNavigationBar" data-offset="10">
    <!-- PHP Serve - Top Navbar -->
    <?php $IPATH = $_SERVER["DOCUMENT_ROOT"] . "/assets/";
    include($IPATH . "nav_component.html"); ?>

    <!-- SECTION : COVER IMAGE CAROUSEL using Bootstrap Carousel -->
    <section id="cover-image-carousel-section">
        <div class="container-fluid p-0">
            <div id="carouselMainPage" class="carousel slide" data-ride="carousel" data-interval="8000">
                <!-- Carousel Inner main body -->
                <div class="carousel-inner">
                    <!-- First Carousel Item -->
                    <div class="carousel-item active background-image-1">
                        <div class="container carousel-overlay h-75 mt-5 pl-3 pl-md-5 color-font-black d-flex flex-column justify-content-center">
                            <h3 class="font-size-4 font-type-sans-serif w-50 color-font-brand-secondary-light font-weight-bold p-1 mb-1 animate__animated animate__fadeInUp" style="animation-delay: 1.3s; animation-duration: 1.6s;">COMMITTED TO SUCCESS</h3>
                            <h1 class="font-size-1 font-weight-bold px-1 font-type-serif animate__animated animate__fadeIn" style="animation-delay: 0.1s;">Affordable Services</h1>
                            <h2 class="font-size-4 w-50 font-type-sans-serif p-1 animate__animated animate__fadeInDown" style="animation-delay: 0.5s; animation-duration: 1.2s;">Our team provides you the best case representation at competitive fees. Contact us today to discuss your case.</h2>
                        </div>
                    </div>

                    <!-- Second Carousel Item -->
                    <div class="carousel-item background-image-2">
                        <div class="container carousel-overlay h-75 mt-5 pl-3 pl-md-5 color-font-black d-flex flex-column justify-content-center">
                            <h3 class="font-size-4 font-type-sans-serif w-50 color-font-brand-secondary-light font-weight-bold p-1 mb-1 animate__animated animate__fadeInUp" style="animation-delay: 1.3s; animation-duration: 1.6s;">DEDICATED & TRUSTWORTHY</h3>
                            <h1 class="font-size-1 font-weight-bold px-1 font-type-serif animate__animated animate__fadeIn" style="animation-delay: 0.1s;">Knowledgeable Team</h1>
                            <h2 class="font-size-4 w-50 font-type-sans-serif p-1 animate__animated animate__fadeInDown" style="animation-delay: 0.5s; animation-duration: 1.2s;">Canadian Immigration is quite complex. Your Fastway team is experienced and capable of handling all Immigration matters. Whether your case is a fresh application or you need to re-apply, our Team can help you.</h2>
                        </div>
                    </div>

                    <!-- TODO Need to add proper text in 3rd Carousel item -->
                    <!-- Third Carousel Item -->
                    <div class="carousel-item background-image-3">
                        <div class="container carousel-overlay h-75 mt-5 pl-3 pl-md-5 color-font-black d-flex flex-column justify-content-center">
                            <h3 class="font-size-4 font-type-sans-serif w-50 color-font-brand-secondary-light font-weight-bold p-1 mb-1 animate__animated animate__fadeInUp" style="animation-delay: 1.3s; animation-duration: 1.6s;">EVERY STEP OF THE WAY</h3>
                            <h1 class="font-size-1 font-weight-bold px-1 font-type-serif animate__animated animate__fadeIn" style="animation-delay: 0.1s;">Proper Guidance</h1>
                            <h2 class="font-size-4 w-50 font-type-sans-serif p-1 animate__animated animate__fadeInDown" style="animation-delay: 0.5s; animation-duration: 1.2s;">Let us take your troubles and guide you through every aspect of your Immigration process. So you can be worry-free and focus on what really matters. Give us a call and let's talk!</h2>
                        </div>
                    </div>
                </div>

                <!-- Carousel - Left and Right Mouse control to switch images -->
                <a class="carousel-control-prev" href="#carouselMainPage" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselMainPage" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </section>

    <!-- SECTION : COMPANY DETAIL
            Tells about the company (Who we are?) and Our commitment to the customer -->
    <section id="companyDetailSection" class="color-background-brand-secondary color-font-white">
        <div class="container p-3 py-lg-5">
            <div class="row">
                <!-- Who We Are -->
                <div id="company-detail-who-we-are" class="col-md-6 p-3">
                    <h2 class="font-type-serif font-size-2 text-center p-2"><strong>WHO WE ARE</strong></h2>
                    <hr class="horizontal-row-divider">
                    <div class="p-3 p-lg-5">
                        <p class="font-size-4 font-type-sans-serif text-justify">An Immigration consulting firm based in Edmonton, Alberta, Canada. We provide consultation and representation services to our clients in all their Canadian Immigration, Visa and Citizenship matters.</p>
                        <p class="font-size-4 font-type-sans-serif text-justify">Fastway's team takes pride in helping individuals and families all over the world successfully immigrate to Canada. Our consultants are Regulated Canadian Immigration Consultants (RCIC) & member in good standing with Immigration Consultants of Canada Regulatory Council (ICCRC)</p>
                    </div>
                </div>

                <!-- Our Commitment  -->
                <div id="company-detail-our-commitment" class="company-detail-col col-md-6 p-3">
                    <h2 class="font-type-serif font-size-2 text-center p-2"><strong>SERVICE COMMITMENT</strong></h2>
                    <hr class="horizontal-row-divider">
                    <div class="p-3 p-lg-5">
                        <p class="font-size-4 font-type-sans-serif text-justify">To provide a quality, timely and cost-effective service to all our clients. Each client must receive an upfront honest assessment about the strengths of their case. Our team will maintain an honest, transparent and an open communication with clients and render dedicated service with personal attention to each individual application.</p>
                    </div>
                </div>
            </div>

            <div class="container text-center">
                <h4 class="font-size-4 px-2">We are a proud Member-in-good-standing of the following Professional Associations:</h4>
                <div class="row align-items-center">
                    <div class="col d-none d-lg-block d-lg-2"></div>
                    <div class="col d-lg-3 logo-associations logo-iccrc"></div>
                    <div class="col d-lg-2 logo-associations logo-rcic"></div>
                    <div class="col d-lg-3 logo-associations logo-capic"></div>
                    <div class="col d-none d-lg-block d-lg-2"></div>
                </div>
            </div>

        </div>
    </section>

    <!-- SECTION : SERVICES PROVIDED - Using Bootstrap cards, all the services provides -->
    <section id="services" class="color-background-grey-light">
        <div class="container pt-5 pb-5">
            <!-- Heading of Services we Offer -->
            <h2 class="font-type-serif font-size-2 p-3 text-center"><strong>SERVICES WE OFFER</strong></h2>
            <hr class="horizontal-row-divider">
            <p class="font-type-sans-serif font-size-4 p-2 text-center color-color-font-brand-secondary-dark">One stop for all your Canadian Immigration matters</p>

            <!-- Immigration related services provided by Fastway Immigration -->
            <div class="container">
                <!-- Row/Column grid for services. Using Bootstrap's .row-cols-* class to arrange service cards well -->
                <div class="row row-cols-2 row-cols-md-3 row-cols-lg-4">
                    <!-- Service Card - Express Entry -->
                    <div class="col mb-4">
                        <!-- TODO Correct hyperlinks for the services cards -->
                        <!-- Wraps the Background and Text overlay in an anchor tag -->
                        <a href="/pages/express_entry/main_page_express_entry.php" title="Express Entry service">
                            <!-- Card container for each service  -->
                            <div class="card-container h-100 w-100 border-0 d-flex justify-content-center service-card-1-image">
                                <!-- Text overlay of the card-container  -->
                                <h3 class="font-size-3 color-font-white text-center align-self-center px-2 m-0">Express Entry</h3>
                            </div>
                        </a>
                    </div>

                    <!-- Service Card - Family Sponsorship  -->
                    <div class="col mb-4">
                        <!-- TODO Correct hyperlinks for the services cards -->
                        <!-- Wraps the Background and Text overlay in an anchor tag -->
                        <a href="/pages/family_sponsorship/main_page_family_sponsorship.php" title="Family Sponsorship service">
                            <!-- Card container for each service  -->
                            <div class="card-container h-100 w-100 border-0 d-flex justify-content-center service-card-2-image">
                                <!-- Text overlay of the card-container  -->
                                <h3 class="font-size-3 color-font-white text-center align-self-center px-2 m-0">Family Sponsorship</h3>
                            </div>
                        </a>
                    </div>

                    <!-- Service Card - Provincial Immigration -->
                    <div class="col mb-4">
                        <!-- TODO Correct hyperlinks for the services cards -->
                        <!-- Wraps the Background and Text overlay in an anchor tag -->
                        <a href="/pages/provincial_immigration/main_page_provincial_nomination.php" title="Provincial Immigration service">
                            <!-- Card container for each service  -->
                            <div class="card-container h-100 w-100 border-0 d-flex justify-content-center service-card-3-image">
                                <!-- Text overlay of the card-container  -->
                                <h3 class="font-size-3 color-font-white text-center align-self-center px-2 m-0">Provincial Immigration</h3>
                            </div>
                        </a>
                    </div>

                    <!-- Service Card - Business Immigration  -->
                    <div class="col mb-4">
                        <!-- TODO Correct hyperlinks for the services cards -->
                        <!-- Wraps the Background and Text overlay in an anchor tag -->
                        <a href="#" title="Business Immigration service">
                            <!-- Card container for each service  -->
                            <div class="card-container h-100 w-100 border-0 d-flex justify-content-center service-card-4-image">
                                <!-- Text overlay of the card-container  -->
                                <h3 class="font-size-3 color-font-white text-center align-self-center px-2 m-0">Business Immigration</h3>
                            </div>
                        </a>
                    </div>

                    <!-- Service Card - Canada Visitor Visa -->
                    <div class="col mb-4">
                        <!-- TODO Correct hyperlinks for the services cards -->
                        <!-- Wraps the Background and Text overlay in an anchor tag -->
                        <a href="/pages/visitor_visa.php" title="Canada Visitor Visa service">
                            <!-- Card container for each service  -->
                            <div class="card-container h-100 w-100 border-0 d-flex justify-content-center service-card-5-image">
                                <!-- Text overlay of the card-container  -->
                                <h3 class="font-size-3 color-font-white text-center align-self-center px-2 m-0">Canada Visitor Visa (TRV)</h3>
                            </div>
                        </a>
                    </div>

                    <!-- Service Card - Super Visa (Parents & Grandparents) -->
                    <div class="col mb-4">
                        <!-- TODO Correct hyperlinks for the services cards -->
                        <!-- Wraps the Background and Text overlay in an anchor tag -->
                        <a href="/pages/super_visa.php" title="Super Visa service (Parents & Grand-parents)">
                            <!-- Card container for each service  -->
                            <div class="card-container h-100 w-100 border-0 d-flex justify-content-center service-card-6-image">
                                <!-- Text overlay of the card-container  -->
                                <h3 class="font-size-3 color-font-white text-center align-self-center px-2 m-0">Super Visa (Parents & Grand-parents)</h3>
                            </div>
                        </a>
                    </div>

                    <!-- Service Card - Business Visa -->
                    <div class="col mb-4">
                        <!-- TODO Correct hyperlinks for the services cards -->
                        <!-- Wraps the Background and Text overlay in an anchor tag -->
                        <a href="/pages/business_visa.php" title="Business Visa service">
                            <!-- Card container for each service  -->
                            <div class="card-container h-100 w-100 border-0 d-flex justify-content-center service-card-7-image">
                                <!-- Text overlay of the card-container  -->
                                <h3 class="font-size-3 color-font-white text-center align-self-center px-2 m-0">Business Visa</h3>
                            </div>
                        </a>
                    </div>

                    <!-- Service Card - Studying in Canada -->
                    <div class="col mb-4">
                        <!-- TODO Correct hyperlinks for the services cards -->
                        <!-- Wraps the Background and Text overlay in an anchor tag -->
                        <a href="/pages/study_permit/main_page_study_in_canada.php" title="Study Permit service">
                            <!-- Card container for each service  -->
                            <div class="card-container h-100 w-100 border-0 d-flex justify-content-center service-card-8-image">
                                <!-- Text overlay of the card-container  -->
                                <h3 class="font-size-3 color-font-white text-center align-self-center px-2 m-0">Studying in Canada</h3>
                            </div>
                        </a>
                    </div>

                    <!-- Service Card - Work Permit  -->
                    <div class="col mb-4">
                        <!-- TODO Correct hyperlinks for the services cards -->
                        <!-- Wraps the Background and Text overlay in an anchor tag -->
                        <a href="/pages/work_permit/main_page_work_permit.php" title="Work Permit service">
                            <!-- Card container for each service  -->
                            <div class="card-container h-100 w-100 border-0 d-flex justify-content-center service-card-9-image">
                                <!-- Text overlay of the card-container  -->
                                <h3 class="font-size-3 color-font-white text-center align-self-center px-2 m-0">Work Permit</h3>
                            </div>
                        </a>
                    </div>

                    <!-- Service Card - Other Services -->
                    <div class="col mb-4">
                        <!-- TODO Correct hyperlinks for the services cards -->
                        <!-- Wraps the Background and Text overlay in an anchor tag -->
                        <a href="/pages/other_services/main_page_other_services.php" title="Other services provided by Fastway Immigration">
                            <!-- Card container for each service  -->
                            <div class="card-container h-100 w-100 border-0 d-flex justify-content-center service-card-10-image">
                                <!-- Text overlay of the card-container  -->
                                <h3 class="font-size-3 color-font-white text-center align-self-center px-2 m-0">Miscellaneous Services</h3>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- SECTION : TESTIMONIALS from customers using Bootstrap Carousel component-->
    <section id="testimonials-section" class="color-background-brand-tertiary color-font-white text-center">
        <div class="container pt-5 pb-5">
            <!-- Heading of Services Section -->
            <h2 class="font-type-serif font-size-2 p-3 text-center"><strong>CUSTOMER TESTIMONIALS</strong></h2>
            <hr class="horizontal-row-divider">
            <p class="font-type-sans-serif font-size-5 p-2 text-center color-font-dark-grey">Here is what some of our customers say about us</p>
            <!-- Customer Testimonial #1  -->
            <div class="row p-3 mb-3">
                <!-- Quotation Mark -->
                <div class="col-1 p-2 m-1"><span class="text-right font-size-1"><i class="fas fa-quote-left"></i></span></div>
                <!-- Testimonial text with the name of individual -->
                <blockquote class="blockquote col-10 p-2 m-1">
                    <p class="font-size-4 font-type-serif text-justify">I am originally from Nepal and got married there. I retained Fastway Immigration team's services for submitting a sponsorship application of my spouse. I am impressed with their service. They provided transparent services and swiftly attended to my enquiries. I received a positive outcome of my case at the first instance. Would Definitely recommend them.</p>
                    <footer class="blockquote-footer font-size-5 text-left font-italic color-font-brand-secondary"> Mr. Tamang, Canada</footer>
                </blockquote>
            </div>

            <!-- Customer Testimonial #2  -->
            <div class="row p-3 mb-3">
                <!-- Quotation Mark -->
                <div class="col-1 p-2 m-1"><span class="text-right font-size-1"><i class="fas fa-quote-left"></i></span></div>
                <!-- Testimonial text with the name of individual -->
                <blockquote class="blockquote col-10 p-2 m-1">
                    <p class="font-size-4 font-type-serif text-justify">My Express Entry case was lingering on with no results for more than a year. I brought my
                        case over to Fastway Immigration. Mr. Malhotra handled it in a transparent manner and at a very competitive price. Got a positive case outcome in less than a month. Highly recommend them.</p>
                    <footer class="blockquote-footer font-size-5 text-left font-italic color-font-brand-secondary"> Mr. Kumar, Canada</footer>
                </blockquote>
            </div>

            <!-- Customer Testimonial #3  -->
            <div class="row p-3 mb-3">
                <!-- Quotation Mark -->
                <div class="col-1 p-2 m-1"><span class="text-right font-size-1"><i class="fas fa-quote-left"></i></span></div>
                <!-- Testimonial text with the name of individual -->
                <blockquote class="blockquote col-10 p-2 m-1">
                    <p class="font-size-4 font-type-serif text-justify">I submitted my application for spousal sponsorship through Fastway Immigration and Visa Services. They handled it professionally and charges were competitive. Service was personalized. I got medical request for my family within 5 months. Very dependable and trustworthy professionals - I certainly recommend them.</p>
                    <footer class="blockquote-footer font-size-5 text-left font-italic color-font-brand-secondary"> Mr. Khadka, Canada</footer>
                </blockquote>
            </div>
        </div>
    </section>

    <!-- PHP Serve - Contact Us Section Footer -->
    <?php $IPATH = $_SERVER["DOCUMENT_ROOT"] . "/assets/";
    include($IPATH . "contact_us_component.html"); ?>

    <!-- PHP Serve - Footer -->
    <?php $IPATH = $_SERVER["DOCUMENT_ROOT"] . "/assets/";
    include($IPATH . "footer_component.html"); ?>
</body>

</html>