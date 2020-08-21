<!DOCTYPE html>
<html lang="en">
<head>
    <!-- TODO Needs proper description and other meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="description" content="Express Entry system for Canada and how can Fastway Immigration's team help you along the process">
    <meta name="author" content="Fastway Immigration">
    <meta name="keywords" content="express entry, federal skilled worker, federal skilled trades, canadian experience class, fastway immigration, fastwayim">
    <title>Express Entry | Fastway Immigration</title>

    <!-- PHP Serve - Head content - favicons, google analytics script, bootstrap script etc. -->
    <?php $IPATH = $_SERVER["DOCUMENT_ROOT"]."/assets/"; include($IPATH."head_component.html"); ?>
</head>

<body class="color-background-grey-light color-font-dark-grey font-type-sans-serif">
    <!-- PHP Serve - Top Navbar -->
    <?php $IPATH = $_SERVER["DOCUMENT_ROOT"]."/assets/"; include($IPATH."nav_component.html"); ?>

    <!-- Bootstrap Breadcrumbs for page navigation -->
    <div class="container breadcrumbs">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb pl-0 py-1 mb-0">
                <li class="breadcrumb-item"><a href="/index.php#services">All Services</a></li>
                <li class="breadcrumb-item active" aria-current="page">Express Entry</li>
            </ol>
        </nav>
    </div>
    <!-- Content of the page -->
    <article class="pb-5">
        <div class="color-background-brand-tertiary-dark color-font-white shadow py-2">
            <div class="container">
                <!-- Page Heading -->
                <h1 class="font-size-1 font-type-serif py-1">Express Entry</h1>
            </div>
        </div>
        <!-- Add a bit of a text -->
        <div class="container py-3 text-justify">
            <p class="font-size-4 py-1">
                Since January 2015, Immigration Refugee and Citizenship Canada (IRCC), with the aim of improving the efficiency of Canadian Skilled Workers Program, introduced a completely electronic process for selection of Skilled Workers for immigration to Canada.  This system has entirely replaced previous paper application process and shifted it from a “First Come First Served” to a Demand-driven system.
            </p>

            <p class="font-size-4 py-1">
                Express Entry is for skilled workers who currently work in Canada or in other countries.   IRCC chooses skilled immigrants as permanent residents based on their ability to settle in Canada.   Express Entry is a system for managing how the people, with skilled work experience, can apply for immigration to Canada.  So, it is not an immigration program but is used to manage applications for permanent residence under the following programs :
            </p>

        </div>

        <!-- Bootstrap cards for selecting the right service -->
        <div class="container service-card-group">
            <!-- Row/Column grid for services. Using Bootstrap's .row-cols-* class to arrange service cards well -->
            <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-3 px-5 px-sm-0 px-md-2">
                <!-- Service selection card - Federal Skilled workers -->
                <div class="col mb-4">
                    <div class="card h-100 shadow">
                        <div class="service-selection-thumbnail service-selection-card-express-entry-image1 px-2"></div>
                        <div class="card-body text-center d-flex flex-column justify-content-between pb-5">
                            <h3 class="card-title font-size-3 font-weight-bold color-font-black">Federal Skilled Workers</h3>
                            <ul class="text-left py-2">
                                <li>Min 1-year Experience NOC 0, A & B</li>
                                <li>IELTS Score minimum CLB 7 each module</li>
                                <li>Education Credential Assessment</li>
                                <li>Job offer not mandatory</li>
                            </ul>
                            <a href="/pages/express_entry/federal_skilled_workers.php" class="btn button-service-card rounded-0">Read more</a>
                        </div>
                    </div>
                </div>

                <!-- Service selection card - Federal Skilled Trades -->
                <div class="col mb-4">
                    <div class="card h-100 shadow">
                        <div class="service-selection-thumbnail service-selection-card-express-entry-image2 px-2"></div>
                        <div class="card-body text-center d-flex flex-column justify-content-between pb-5">
                            <h3 class="card-title font-size-3 font-weight-bold color-font-black">Federal Skilled Trades</h3>
                            <ul class="text-left py-2">
                                <li>Two (2) years full-time work experience in Skilled Trades NOC B</li>
                                <li>IELTS-CLB 5 in Speaking & Listening CLB 4 in Writing & Reading</li>
                                <li>Job offer from up to 2 employers, or</li>
                                <li>Certificate of Trade Qualification – Canada Provincial Authority</li>
                            </ul>
                            <a href="/pages/express_entry/federal_skilled_trades.php" class="btn button-service-card rounded-0">Read more</a>
                        </div>
                    </div>
                </div>

                <!-- Service selection card - Canadian Experience Class -->
                <div class="col mb-4">
                    <div class="card h-100 shadow">
                        <div class="service-selection-thumbnail service-selection-card-express-entry-image3 px-2"></div>
                        <div class="card-body text-center d-flex flex-column justify-content-between pb-5">
                            <h3 class="card-title font-size-3 font-weight-bold color-font-black">Canadian Experience Class</h3>
                            <ul class="text-left py-2">
                                <li>Min 12 Months of full-time work in Canada</li>
                                <li>Experience in NOC 0, A & B</li>
                                <li>IELTS-CLB 7 for NOC 0 or A and CLB 5 for NOC B</li>
                                <li>No Education Requirement</li>
                            </ul>
                            <a href="/pages/express_entry/canadian_experience_class.php" class="btn button-service-card rounded-0">Read more</a>
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