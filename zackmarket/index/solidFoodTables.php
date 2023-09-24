<?php

include_once('../../database.php');

$query = $pdo->query("SELECT * FROM solid_food LIMIT 3;");
$res = $query->fetchAll(PDO::FETCH_ASSOC);
if (count($res) > 0) {
    ?>
    <table class="table">
        <thead>
            <tr>
                <th>Cod</th>
                <th>Produt's Name</th>
                <th>Price</th>
                <th>Validate's Date</th>
                <th>Date</th>
                <th>Discount</th>
            </tr>
        </thead>
        <tbody>
            <?php
            for ($i = 0; $i < count($res); $i++) {
                foreach ($res[$i] as $key => $value) {
                }
                $id = $res[$i]['id_sf'];
                $name = $res[$i]['products_name'];
                $price = $res[$i]['price'];
                $validate = $res[$i]['validate'];
                $date = $res[$i]['date'];
                $decreased_by = $res[$i]['decreased_by'];

                if ($decreased_by > "0") {
                    $price = $price - ($price * $decreased_by / 100);
                    $priceF = number_format($price, 2, ',', '.');
                } else {
                    $priceF = number_format($price, 2, ',', '.');
                }
                ?>
                <tr>
                    <td><?= $id ?></td>
                    <td><?= $name ?></td>
                    <td>R$<?= $priceF ?></td>
                    <td><?= $validate ?></td>
                    <td><?= $date ?></td>
                    <td><?= $decreased_by ?>%</td>  
                </tr>
                <?php
            }
            ?>
        </tbody>
    </table>
    <?php
}