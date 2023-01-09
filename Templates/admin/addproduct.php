<!DOCTYPE html>
<html>
<?php
include ("../defaults/head.php");
?>
<body>
<div class="container">
    <?php
    include_once ('../defaults/header.php');
    include_once ('../defaults/menu.php');
    include_once ('../defaults/pictures.php');
    global $categories;
    ?>
    <?php if (!empty($message)): ?>
    <div class="alert alert-success" role="alert">
        <?$=$message?>
    </div>
    <?php endif;?>
    <form class="row g-3" method="post" enctype="multipart/form-data"></form>
</div>
</body>
</html>