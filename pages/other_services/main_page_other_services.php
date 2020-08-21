<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="description" content="All other services offered by Fastway Immigration">
    <meta name="author" content="Fastway Immigration">
    <meta name="keywords" content="other services fastway immigration, miscellaneous services, Canada Citizenship application, renewal of permanent residence card, overseas citizen of india, OCI card, OCI card issuance, renewal of canadian passport">
    <title>Other Services | Fastway Immigration</title>

    <!-- PHP Serve - Head content - favicons, google analytics script, bootstrap script etc. -->
    <?php $IPATH = $_SERVER["DOCUMENT_ROOT"] . "/assets/";
    include($IPATH . "head_component.html"); ?>
</head>

<body class="color-background-grey-light color-font-dark-grey font-type-sans-serif">
    <!-- PHP Serve - Top Navbar -->
    <?php $IPATH = $_SERVER["DOCUMENT_ROOT"] . "/assets/";
    include($IPATH . "nav_component.html"); ?>

    <!-- Bootstrap Breadcrumbs for page navigation -->
    <div class="container breadcrumbs pl-4">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb pl-0 mb-0">
                <!-- TODO Proper linking of all breadcrumbs needed -->
                <li class="breadcrumb-item"><a href="/index.php#services">All Services</a></li>
                <li class="breadcrumb-item active" aria-current="page">Other services</li>
            </ol>
        </nav>
    </div>
    <!-- Content of the page -->
    <article class="pb-5">
        <div class="color-background-brand-tertiary-dark color-font-white shadow py-2">
            <div class="container p-2">
                <!-- Page Heading -->
                <h1 class="font-size-1 font-type-serif pl-3 p-1">Other services provided</h1>
            </div>
        </div>
        <!-- Add a bit of a text -->
        <div class="container py-3 text-justify">
            <!-- TODO Add some text on making the user choose appropriate case-->
            <p class="font-size-4 px-3 py-3">
                In addition to our major services, your Fastway Team can assist with any of the following services as well. Lorem, ipsum dolor sit amet consectetur adipisicing elit. Molestias enim ea mollitia fuga modi libero quam, dolorem, reprehenderit doloribus adipisci ex cumque quod architecto. Cupiditate ipsa ab commodi nisi illo.
            </p>
        </div>

        <!-- Bootstrap cards for selecting the right service -->
        <div class="container service-card-group">
            <!-- Row/Column grid for services. Using Bootstrap's .row-cols-* class to arrange service cards well -->
            <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-3 px-5 px-sm-0 px-md-2">
                <!-- Service selection card - Canada Citizenship Application -->
                <div class="col mb-4">
                    <div class="card h-100 shadow">
                        <div class="service-selection-thumbnail service-selection-card-other-services-image1 px-2"></div>
                        <div class="card-body text-center d-flex flex-column justify-content-between pb-5">
                            <h3 class="card-title font-size-3 font-weight-bold color-font-black">Canadian Citizenship Application</h3>
                            <ul class="text-left py-2">
                                <li>Lorem ipsum dolor sit amet, consectetur adipisicing </li>
                                <li>Lorem ipsum dolor sit amet, consectetur adipisicing </li>
                            </ul>
                            <a href="#" class="btn button-service-card rounded-0">Read more</a>
                        </div>
                    </div>
                </div>

                <!-- Service selection card - Issuance/Renewal of PR card -->
                <div class="col mb-4">
                    <div class="card h-100 shadow">
                        <div class="service-selection-thumbnail service-selection-card-other-services-image2 px-2"></div>
                        <div class="card-body text-center d-flex flex-column justify-content-between pb-5">
                            <h3 class="card-title font-size-3 font-weight-bold color-font-black">Issuance & Renewal of Canadian PR card</h3>
                            <ul class="text-left py-2">
                                <li>Lorem ipsum dolor sit amet, consectetur adipisicing </li>
                                <li>Lorem ipsum dolor sit amet, consectetur adipisicing </li>
                            </ul>
                            <a href="#" class="btn button-service-card rounded-0">Read more</a>
                        </div>
                    </div>
                </div>

                <!-- Service selection card - OCI card application -->
                <div class="col mb-4">
                    <div class="card h-100 shadow">
                        <div class="service-selection-thumbnail service-selection-card-other-services-image3 px-2"></div>
                        <div class="card-body text-center d-flex flex-column justify-content-between pb-5">
                            <h3 class="card-title font-size-3 font-weight-bold color-font-black">Overseas Citizenship of India (OCI) card application</h3>
                            <ul class="text-left py-2">
                                <li>Lorem ipsum dolor sit amet, consectetur adipisicing </li>
                                <li>Lorem ipsum dolor sit amet, consectetur adipisicing </li>
                            </ul>
                            <a href="#" class="btn button-service-card rounded-0">Read more</a>
                        </div>
                    </div>
                </div>

                <!-- Service selection card - Canadian Passport application -->
                <div class="col mb-4">
                    <div class="card h-100 shadow">
                        <div class="service-selection-thumbnail service-selection-card-other-services-image4 px-2"></div>
                        <div class="card-body text-center d-flex flex-column justify-content-between pb-5">
                            <h3 class="card-title font-size-3 font-weight-bold color-font-black">Canadian Passport Application</h3>
                            <ul class="text-left py-2">
                                <li>Lorem ipsum dolor sit amet, consectetur adipisicing </li>
                                <li>Lorem ipsum dolor sit amet, consectetur adipisicing </li>
                            </ul>
                            <a href="#" class="btn button-service-card rounded-0">Read more</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </article>
    <!-- PHP Serve - Contact Us Section Footer -->
    <?php $IPATH = $_SERVER["DOCUMENT_ROOT"] . "/assets/";
    include($IPATH . "contact_us_component.html"); ?>

    <!-- PHP Serve the Footer -->
    <?php $IPATH = $_SERVER["DOCUMENT_ROOT"] . "/assets/";
    include($IPATH . "footer_component.html"); ?>
</body>