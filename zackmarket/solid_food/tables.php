<?php

include_once('../../database.php');

$query = $pdo->query("SELECT * FROM solid_food;");
$res = $query->fetchAll(PDO::FETCH_ASSOC);
if (count($res) > 0) {
?>
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

        $photo = $res[$i]['photo'];

        if ($decreased_by > "0") {
            $price = $price - ($price * $decreased_by / 100);
            $priceF = number_format($price, 2, ',', '.');
        } else {
            $priceF = number_format($price, 2, ',', '.');
        }
    ?>
        <div class="card mx-2" style="width: 18rem;">
            <img src="imgs/<?= $photo ?>" class="card-img-top" alt="...">
            <div class="card-body">
                <h4 class="card-title"><?= $name ?></h4>
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">Price: <?= $priceF ?></li>
                <li class="list-group-item">Validate: <?= $validate ?></li>
                <li class="list-group-item">Category: Solid Food</li>
            </ul>
            <div class="card-body">
                <a href="#" class="btn btn-yellow">Purchase</a>
                <a href="#" class="btn">Add on the Bag</a>
            </div>
        </div>
<?php
    }
}
