<?php

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

</body>

</html>