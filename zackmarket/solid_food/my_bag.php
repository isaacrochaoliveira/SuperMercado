<?php

@session_start();
include_once('../../database.php');

$id = trim($_POST['id']);

$query = $pdo->query("SELECT * FROM solid_food WHERE id_sf = '$id'");
$res = $query->fetchAll(PDO::FETCH_ASSOC);
if (count($res) > 0) {
    $res = $pdo->prepare("INSERT INTO my_bag SET user_id = :user_id, products_id = :products_id, category = :category, qtde = :qtde, date_purchase = :date_purchase, time_purchase = :time_purchase, payment = :payment");
    $res->bindValue(':user_id', $_SESSION['id'], PDO::PARAM_INT);
    $res->bindValue(':products_id', $id, PDO::PARAM_INT);
    $res->bindValue(':category', 'Solid Food', PDO::PARAM_STR);
    $res->bindValue(':qtde', $qtde, PDO::PARAM_INT);
    $res->bindValue(':date_purchase', Date('Y-m-d'), PDO::PARAM_STR);
    $res->bindValue(':time_purchase', Date('H:i'), PDO::PARAM_STR);
    $res->bindValue(':payment', )
}