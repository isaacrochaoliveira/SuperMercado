<?php

include_once('../database.php');

$pag = "solid_food";

?>

<section id="backgroundSolid">
    <div class="text-center">
        <h1 class="major-font fs-58">Welcome to our Section Solid Food</h1>
        <hr>
        <p>Hello! What are you up to? I'm great, so...What you wanna/gonna get buy?</p>
    </div>
</section>
<section>
    <div id="list" class="d-flex flex-wrap p-5">

    </div>
</section>

<script>
    $(document).ready(function() {
        var pag = "<?= $pag ?>";
        $.ajax({
            url: pag + '/tables.php',
            method: 'post',
            data: {},
            dataType: 'html',
            success: function(res) {
                $("#list").html(res);
            }
        });
    });

    function tables() {
        $(document).ready(function() {
            var pag = "<?= $pag ?>";
            $.ajax({
                url: pag + '/tables.php',
                method: 'post',
                data: {},
                dataType: 'html',
                success: function(res) {
                    $("#list").html(res);
                }
            });
        });
    }
</script>

<script>
    function my_bag(id) {
        var qtde = Number(window.prompt("How Many?"));
        if ((qtde > 0) || qtde != "") {
            $(document).ready(function() {
                var pag = "<?= $pag ?>";
                $.ajax({
                    url: pag + '/my_bag.php',
                    method: 'post',
                    data: {
                        id,
                        qtde
                    },
                    success: function(msg) {
                        if (msg.trim() == "READY") {
                            tables();
                        } else {
                            alert(msg.trim());
                        }
                    }
                });
            });
        } else {
            alert("Product's Cod: " + id + '\nShopping suspended!');
        }
    }

    function purchase(id) {
        $(document).ready(function() {
            var qtde = Number(window.prompt("How Many?"));
            if ((qtde != 0) || (qtde != "")) {
                var payment = window.prompt('Payment: ');
                var pag = "<?= $pag ?>";
                $.ajax({
                    url: pag + '/purchase.php',
                    method: 'post',
                    data: {
                        id,
                        qtde,
                        payment
                    },
                    success: function(msg) {
                        if (msg.trim() == "PURCHASED") {
                            location.href = 'index.php?pag=cash_machine'
                        } else {
                            alert(msg.trim());
                        }
                    }
                });
            } else {
                alert("Product's Cod: " + id + "\nShopping Suspended!");
            }
        });
    }
</script>