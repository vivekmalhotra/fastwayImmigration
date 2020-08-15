<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Success!</title>
    <?php $IPATH = $_SERVER["DOCUMENT_ROOT"]."/assets/"; include($IPATH."head_component.html"); ?>
</head>
<body class="text-center">
    <div class="container d-flex justify-content-center align-items-center" style="height: 100vh;">
        <div class="container h-75 w-75 p-5 shadow rounded d-flex flex-column justify-content-around success-message">
            <div class="container">
                <i class="fas fa-thumbs-up font-size-1 color-font-white"></i>
                <h1 class="font-size-1 font-type-serif color-font-white py-5">Success!</h1>
                <p class="font-size-4 font-type-sans-serif color-font-white">Your message was successfully sent. Our team will contact you soon!
                </p>
            </div>
            <div class="container">
                <a href="https://fastwayimmigration.com" class="btn btn-light rounded-0">Go to Home page</a>
            </div>
        </div>
    </div>
</body>
</html>