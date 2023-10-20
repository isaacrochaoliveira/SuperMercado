<?php

@session_start();
include_once('../../database.php');

$id = trim($_POST['id']);

$query = $pdo->query("SELECT * FROM purchased WHERE id_pur = '$id' AND status = 'Não Pago' ORDER BY id_pur DESC");
$res = $query->fetchAll(PDO::FETCH_ASSOC);
if (count($res) > 0) {
    $products = $res[0]['products_id'];
    $category = $res[0]['category'];
    $payment = $res[0]['payment'];
    $date_purchased = $res[0]['date_purchased'];
    $time_purchased = $res[0]['time_purchased'];
    
    if ($category == 'Solid Food') {
        $solid_query = $pdo->query("SELECT * FROM solid_food WHERE id_sf = '$products'");
        $solid_res = $solid_query->fetchAll(PDO::FETCH_ASSOC);
        $name = $solid_res[0]['products_name'];
        $price =  $solid_res[0]['price'];
        $validate = $solid_res[0]['validate'];
        $date = $solid_res[0]['date'];
        $decreased_by = $solid_res[0]['decreased_by'];
        $photo = $solid_res[0]['photo'];

        $priceF = number_format($price, 2, ',', '.');

    }

    ?>
    <div class="d-flex flex-wrap justify-content-around">
        <div class="w-50 py-5">
            <span class="fs-28"><?= "isaak.rocha137@gmail.com" ?></span>
            <h3 class="fs-36"><?= $_SESSION['name'] ?></h3>
            <a href="index.php?pag=solid_food" class="btn btn-brown">Go Shopping More</a>
        </div>
        <div class="w-50 text-center">
            <img src="./imgs/<?= $photo ?>" alt="<?= $photo ?>" width="420">
            <hr>
            <h4 class="fs-34"><?= $name ?></h4>
            <p>$<?= $priceF . ' - '. $date. ' - '. $validate . ' - ' . '-'.$decreased_by.'%'?></p>
        </div>
    </div>
    <?php
} else {
    echo "Ops!";
}