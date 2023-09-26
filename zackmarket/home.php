<?php

@session_start();
$pag = "index";


?>

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
                <a href="index.php?pag=solid_food" class="btn btn-yellow">
                    See more <i class="bi bi-caret-right"></i>
                </a>
                <br>
            </div>
        </div>
    </div>
</section>
<section class="py-5">
    <div class="d-flex flex-wrap">
        <div class="d-block px-5 py-5">
            <h4 class="fs-34">Solid Food</h4>
            <div id="solid_foodTables">

            </div>
            <button class="btn btn-red"> See EveryThing <i class="bi bi-caret-right"></i></button>
        </div>
        <div class="d-block px-5 py-5">
            <h4 class="fs-34">Liquids</h4>
            <div id="liquidsTables">

            </div>
            <button class="btn btn-red"> See EveryThing <i class="bi bi-caret-right"></i></button>
        </div>
        <div class="d-block px-5 py-5">
            <h4 class="fs-34">Savory and Sweet</h4>
            <div id="savorySweetTables">

            </div>
            <button class="btn btn-red"> See EveryThing <i class="bi bi-caret-right"></i></button>
        </div>
    </div>
    <div class="p-5">
        <h2>Cash Machine</h2>
        <hr>
        <div id="my_bag">

        </div>
    </div>
</section>

<script>
    $(document).ready(function() {
        var pag = "<?= $pag ?>";
        var id = <?= $_SESSION['id'] ?>;
        $.ajax({
            url: pag + '/my_bag.php',
            method: 'post',
            data: {id},
            dataType: 'html',
            success: function(res) {
                $("#my_bag").html(res);
            }
        });
    });
</script>

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

<script>
    $(document).ready(function() {
        var pag = "<?= $pag ?>";
        $.ajax({
            url: pag + '/savorySweetTables.php',
            method: 'post',
            data: {},
            dataType: 'html',
            success: function(msg) {
                $('#savorySweetTables').html(msg);
            }
        });
    })
</script>