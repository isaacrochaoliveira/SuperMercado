<?php

include_once('../../database.php');

$id = trim($_POST['id']);

$query = $pdo->query("SELECT * FROM my_bag WHERE user_id = '$id'");
$res = $query->fetchAll(PDO::FETCH_ASSOC);
if (count($res) > 0) {
    for ($i = 0; $i < count($res); $i++) {
        foreach ($res[$i] as $key => $value) {
        }
        $id_mb = $res[$i]['id_mb'];
        $products = $res[$i]['products_id'];
        $qtde = $res[$i]['qtde'];

        ?>
            <div class="card" style="width: 18rem;">
                <img src="..." class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">An item</li>
                    <li class="list-group-item">A second item</li>
                    <li class="list-group-item">A third item</li>
                </ul>
                <div class="card-body">
                    <a href="#" class="card-link">Card link</a>
                    <a href="#" class="card-link">Another link</a>
                </div>
            </div>
        <?php
    }
} else {
    echo "<p>Your bag is tollaty empty! Let's get some food to purchase!";
}
