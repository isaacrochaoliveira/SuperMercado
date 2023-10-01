<?php

@session_start();
include_once('../database.php');

$pag = "cash_machine";

?>

<div class="container">
    <div id="purchased">

    </div>
</div>

<script>
    $(document).ready(function() {
        var id = <?= $_SESSION['id'] ?>;
        var pag = "<?= $pag ?>";
        $.ajax({
            url: pag + '/tables.php',
            method: 'post',
            data: {id},
            dataType: 'html',
            success: function(msg) {
                $("#purchased").html(msg);
            }
        });
    });
</script>