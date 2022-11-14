<!DOCTYPE html>
<html>
<?php
include_once('defaults/head.php');
?>

<body>

<div class="container">
    <?php
    include_once('defaults/header.php');
    include_once('defaults/menu.php');
    include_once('defaults/pictures.php');
    ?>

    <div class="row gy-3 ">
        <?php global $fietsen ?>
        <?php foreach ($fietsen as $fiets): ?>
            <div class="col-sm-4 col-md-3">
                <div class="card">
                    <div class="card-body text-center">
                        <?php
                        echo $fiets['merk'];
                        echo $fiets ['type'];
                        echo $fiets ['prijs'];
                        ?>

                    </div>

                </div>
            </div>
        <?php endforeach;?>

    </div>

    <hr>
    <?php
    include_once('defaults/footer.php');

    ?>
</div>

</body>
</html>