<!DOCTYPE html>
<html>
<?php
include_once ('../defaults/head.php');
?>
<body>
<div class="container">
    <?php
    include_once ('../defaults/head.php');
    include_once ('../defaults/menu.php');
    include_once ('../defaults/pictures.php');
    global $products;
    ?>

    <h4>beheer sportapparaten</h4>
    <table class="table align-middle">
        <thead>
        <tr>
            <th scope="col">Naam</th>
            <th scope="col">Category</th>
            <th scope="col" class="text-center">Aanpassen</th>
            <th scope="col" class="text-center">Verwijderen</th>
        </tr>
        </thead>
        <tbody>
        <?php $count=1; ?>
        <?php foreach ($products as $product): ?>
        <tr>
            <th scope="row"><?=$count++?></th>
            <?=$product->picture?>
            <td><?=$product->name?></td>
            <td><?=getCategoryName($product->category_id)?></td>

            <td class="text-center">
                <a type="button" class="btn btn-success btn=sm px-3" href="/admin/edit/<?=$product->id?>">
                    <i class="bi bi-pencil-square"></i>
                </a>
            </td>

            <td class="text-center">
                <a type="button" class="btn btn-danger btn=sm px-3" href="/admin/edit/<?=$product->id?>">
                    <i class="bi bi-dash-square"></i>
                </a>
            </td>
        </tr>
        <?php endforeach;?>

        </tbody>
    </table>
    <a type="button" class="btn btn-success btn-sm px-3" href="/admin/add" >
        <i class="bi bi-plus-square"></i>
    </a>
    <?php
    include_once ('../defaults/footer.php');
    ?>
</div>
</body>
</html>
