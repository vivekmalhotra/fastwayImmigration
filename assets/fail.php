<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fail!</title>
    <?php $IPATH = $_SERVER["DOCUMENT_ROOT"]."/assets/"; include($IPATH."head_component.html"); ?>
</head>
<body class="text-center">
    <div class="container d-flex justify-content-center align-items-center" style="height: 100vh;">
        <div class="container h-75 w-75 p-5 shadow rounded d-flex flex-column justify-content-around fail-message">
            <div class="container">
                <i class="fas fa-sad-tear font-size-1 color-font-white"></i>
                <h2 class="font-size-2 font-type-serif color-font-white py-5">Something went wrong</h2>
                <p class="font-size-4 font-type-sans-serif color-font-white">Let's take you back and try again!
                </p>
            </div>
            <div class="container">
                <button type="button" class="btn btn-light rounded-0" onclick="window.history.back()">Back</button>
            </div>
        </div>
    </div>
</body>
</html>