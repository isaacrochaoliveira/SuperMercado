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
</script>