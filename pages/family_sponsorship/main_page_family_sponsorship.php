<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="description" content="All other services offered by Fastway Immigration">
    <meta name="author" content="Fastway Immigration">
    <meta name="keywords" content="family sponsorship, spousal sponsorship, parents sponsorship, grandparents sponsorship, fastway immigration, fastwayim, sunil malhotra, sangeeta malhotra">
    <title>Family Sponsorship | Fastway Immigration</title>

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
                <li class="breadcrumb-item active" aria-current="page">Family Sponsorship</li>
            </ol>
        </nav>
    </div>
    <!-- Content of the page -->
    <article class="pb-5">
        <div class="color-background-brand-tertiary-dark color-font-white shadow py-2">
            <div class="container p-2">
                <!-- Page Heading -->
                <h1 class="font-size-1 font-type-serif p-1">Family Sponsorship</h1>
            </div>
        </div>
        <!-- Add a bit of a text -->
        <div class="container py-3 text-justify">
            <!-- TODO Add some text on making the user choose appropriate case-->
            <p class="font-size-4 py-3">
                Family reunification is one of the three pillars of CIC’s immigration program. Canadian immigration policy and legislation have a long tradition of supporting family reunification, which permits both recent immigrants and long-established Canadians to be reunited with members of their family. Under the Immigration and Refugee Protection Regulations (IRPR), family living abroad may be sponsored as well as spouses or common-law partners living in Canada with their sponsor. Persons who can be sponsored in the family class include the spouse, common-law partner (including same-sex partner), conjugal partner, dependent children, parents, grand-parents, children adopted from abroad, and other relatives in special circumstances.
            </p>
        </div>

        <!-- Bootstrap cards for selecting the right service -->
        <div class="container service-card-group">
            <!-- Row/Column grid for services. Using Bootstrap's .row-cols-* class to arrange service cards well -->
            <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-3 px-5 px-sm-0 px-md-2">
                <!-- Service selection card - Spousal Sponsorship -->
                <div class="col mb-4">
                    <div class="card h-100 shadow">
                        <div class="service-selection-thumbnail service-selection-card-family-sponsorship-image1 px-2"></div>
                        <div class="card-body text-center d-flex flex-column justify-content-between pb-5">
                            <h3 class="card-title font-size-3 font-weight-bold color-font-black">Spousal Sponsorship</h3>
                            <ul class="text-left py-2">
                                <li>Canada committed to Family unification  </li>
                                <li>Faster Processing</li>
                                <li>Separate Assessment of Sponsor and Applicant</li>
                                <li>Sponsor spouses outside and inside Canada</li>
                            </ul>
                            <a href="/pages/family_sponsorship/spousal_sponsorship.php" class="btn button-service-card rounded-0">Read more</a>
                        </div>
                    </div>
                </div>

                <!-- Service selection card - Parents & Grand-Parents Sponsorship -->
                <div class="col mb-4">
                    <div class="card h-100 shadow">
                        <div class="service-selection-thumbnail service-selection-card-family-sponsorship-image2 px-2"></div>
                        <div class="card-body text-center d-flex flex-column justify-content-between pb-5">
                            <h3 class="card-title font-size-3 font-weight-bold color-font-black">Parents & Grand-parents sponsorship</h3>
                            <ul class="text-left py-2">
                                <li>IRCC committed to Family Unification</li>
                                <li>Sponsor your parents and grandparents</li>
                                <li>Meet LICO Requirement for 3 years</li>
                                <li>Meet requirements to Sponsor</li>
                            </ul>
                            <a href="/pages/family_sponsorship/parents_grandparents_sponsorship.php" class="btn button-service-card rounded-0">Read more</a>
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