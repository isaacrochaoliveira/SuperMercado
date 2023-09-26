<?php

include_once('settings.php');

$pag = "index";

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
    

    <link rel="stylesheet" href="css/fonts.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" href="imgs/favicon.ico" type="image/x-icon">
</head>

<body>
    <div class="w-35 py-5 mx-auto">
        <div class="bg-brown text-light p-5">
            <div>
                <span>Hello World!</span>
                <h2 class="fs-54 major-font"><?= APP_SUBTILE ?></h2>
            </div>
            <form action="#" method="post" class="mx-auto" id="form">
                <div class="row mb-3">
                    <div class="col">
                        <label for="email">E-mail ou Name</label>
                        <input type="text" name="email" id="email" class="form-control">
                    </div>
                </div>
                <div class="row mb-5">
                    <div class="col">
                        <label for="pass">Password</label>
                        <input type="text" name="pass" id="pass" class="form-control">
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-6">
                        <button class="btn btn-brown" type="button" id="login">Sing-in <i class="fa-solid fa-right-to-bracket"></i></button>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <span class="text-me"></span>
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>
</html>

<script>
    $(document).ready(function() {
        $('#login').click(function() {
            var pag = "<?= $pag ?>";
            $.ajax({
                url: pag + '/login.php',
                method: 'post',
                data: $("#form").serialize(),
                success: function(msg) {
                    if (msg.trim() == 'LOGIN') {
                        window.location = 'zackmarket/index.php?pag=home';
                    } else {
                        $('.text-me').text(msg.trim());
                    }
                },
                cache: false
            }); 
        });
    });
</script>