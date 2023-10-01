<?php

@session_start();
include_once('../../database.php');

date_default_timezone_set('America/Sao_Paulo');

$id = trim($_POST['id']);
$qtde = trim($_POST['qtde']);

$query = $pdo->query("SELECT * FROM solid_food WHERE id_sf = '$id'");
$res = $query->fetchAll(PDO::FETCH_ASSOC);
if (count($res) > 0) {
    $res = $pdo->prepare("INSERT INTO my_bag SET status = :status, user_id = :user_id, products_id = :products_id, category = :category, qtde = :qtde, date_purchase = :date_purchase, time_purchase = :time_purchase, payment = :payment");
    $res->bindValue(':user_id', $_SESSION['id'], PDO::PARAM_INT);
    $res->bindValue(':products_id', $id, PDO::PARAM_INT);
    $res->bindValue(':category', 'Solid Food', PDO::PARAM_STR);
    $res->bindValue(':qtde', $qtde, PDO::PARAM_INT);
    $res->bindValue(':date_purchase', Date('Y-m-d'), PDO::PARAM_STR);
    $res->bindValue(':time_purchase', Date('H:i'), PDO::PARAM_STR);
    $res->bindValue(':payment', 'NONE', PDO::PARAM_STR);
    $res->bindValue(':status', 'Não Pago', PDO::PARAM_STR);
    $res->execute();

    echo "READY";
} else {
    echo "Solicitation doesn't allow!";
}