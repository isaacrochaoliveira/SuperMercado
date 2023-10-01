<?php

date_default_timezone_set('America/Sao_Paulo');

@session_start();
include_once('../../database.php');

$id = trim($_POST['id']);
$qtde = trim($_POST['qtde']);
$payment = trim($_POST['payment']);

$query = $pdo->query("SELECT * FROM solid_food WHERE id_sf = '$id'");
$res = $query->fetchAll(PDO::FETCH_ASSOC);
if (count($res) > 0) {
    $res = $pdo->prepare("INSERT INTO purchased SET status = :status, user_id = :user_id, products_id = :products_id, category = :category, qtde = :qtde, date_purchased = :date_purchased, time_purchased = :time_purchased, payment = :payment");
    $res->bindValue(':status', 'Não Pago', PDO::PARAM_STR);
    $res->bindValue(':user_id', $_SESSION['id'], PDO::PARAM_INT);
    $res->bindValue(':products_id', $id, PDO::PARAM_INT);
    $res->bindValue(':category', 'Solid Food', PDO::PARAM_STR);
    $res->bindValue(":qtde", $qtde, PDO::PARAM_INT);
    $res->bindValue(':date_purchased', Date('Y-m-d'), PDO::PARAM_STR);
    $res->bindValue(':time_purchased', Date('H:i'), PDO::PARAM_STR);
    $res->bindValue(':payment', $payment, PDO::PARAM_STR);
    $res->execute();

    echo "PURCHASED";
} else {
    echo "Ops! Talk to the ADM";
}