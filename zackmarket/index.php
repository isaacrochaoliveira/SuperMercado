<?php

$pag = "index";

session_start();
include_once('../database.php');
include_once('../settings.php');

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= APP_TITLE ?></title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>


    <link rel="stylesheet" href="../css/fonts.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="shortcut icon" href="../imgs/favicon.ico" type="image/x-icon">
</head>

<body>
    <div class="bg-yellow pt-2 pb-1 ">
        <div class="container">
            <ul class="d-flex justify-content-center align-items-center">
                <li class="list-style-none mx-2">
                    <i class="bi bi-map"></i>
                    Street 149, N 51
                </li>
                <li class="list-style-none mx-2">
                    <i class="bi bi-telephone"></i>
                    (62) 98165-2770
                </li>
            </ul>
        </div>
    </div>
    <div class="container">
        <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
            <a href="index.php" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
                <img src="../imgs/512-pizza-withoutback.png" alt="ZackMarket" width="60" height="60">
                <h1 class="fs-44"><?= APP_SUBTILE ?></h1>
            </a>

            <ul class="nav nav-pills">
                <li class="nav-item"><a href="#" class="nav-link" aria-current="page">Home</a></li>
                <li class="nav-item"><a href="#" class="nav-link">Solid Food</a></li>
                <li class="nav-item"><a href="#" class="nav-link">Liquids</a></li>
                <li class="nav-item"><a href="#" class="nav-link">Savory and Sweet</a></li>
                <li class="nav-item"><a href="#" class="nav-link">Cash Machine</a></li>
            </ul>
        </header>
    </div>
    <section class="px-5">
        <div class="d-flex">
            <div class="card mx-1" style="width: 18rem;">
                <img src="../imgs/supermarket/vegetables.jpg" class="card-img-top" alt="Vegetables are so good">
                <div class="card-body">
                    <h5 class="card-title courgette ">Vegetables making our health well</h5>
                    <p class="card-text weight-100">
                        A diet rich in vegetables and fruits can lower blood pressure, reduce the risk of heart disease and stroke.
                    </p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
            <div class="card" style="width: 18rem;">
                <img src="../imgs/supermarket/buffet.jpg" class="card-img-top" alt="Business decreased by 25% in Goiânia">
                <div class="card-body">
                    <h5 class="card-title courgette">Business decreased by 25% in Goiânia</h5>
                    <p class="card-text weight-100">
                        This's not the year to buffet business, btw we still dunno how fix this. Now just wait for the best
                    </p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
            <div class="d-block mx-1 my-5">
                <div class="bg-brown p-5 text-light" style="position: absolute; width: 50%;">
                    <span>1389 Available</span>
                    <h5 class="fs-36">Solid Food</h5>
                    <div class="border-bottom-dashed"></div>
                    <p>
                        Don't wait too much! If you wish it, you already want
                    </p>
                    <a href="#" class="btn btn-yellow">
                        See more <i class="bi bi-caret-right"></i>
                    </a>
                    <br>
                </div>
            </div>
        </div>
    </section>
    <section class="py-5">
        <div class="d-flex">
            <div class="d-block px-5">
                <h4>Solid Food</h4>
                <div id="solid_foodTables">

                </div>
                <button class="btn btn-red"> See EveryThing <i class="bi bi-caret-right"></i></button>
            </div>
            <div class="d-block px-5">
                <h4>Liquids</h4>
                <div id="liquidsTables">

                </div>
                <button class="btn btn-red"> See EveryThing <i class="bi bi-caret-right"></i></button>
            </div>
        </div>
    </section>
</body>
</html>

<script>
    $(document).ready(function() {
        var pag = "<?= $pag ?>";
        $.ajax({
            url: pag + '/solidFoodTables.php',
            method: 'post',
            data: {},
            dataType: 'html',
            success: function(msg) {
                $('#solid_foodTables').html(msg);
            }
        });
    })
</script>

<script>
    $(document).ready(function() {
        var pag = "<?= $pag ?>";
        $.ajax({
            url: pag + '/liquidsTables.php',
            method: 'post',
            data: {},
            dataType: 'html',
            success: function(msg) {
                $('#liquidsTables').html(msg);
            }
        });
    })
</script>